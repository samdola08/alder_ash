<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Yajra\DataTables\Facades\DataTables;

class UserRepository
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function query(): Builder
    {
        return $this->model->with('roles')->latest();
    }

    public function scopeByType(array $types): Builder
    {
        return $this->query()->whereIn('type', $types);
    }

    public function getFilteredQuery(?array $allowedTypes = null): Builder
    {
        if ($allowedTypes) {
            return $this->scopeByType($allowedTypes);
        }

        return $this->query();
    }

    public function paginate(?array $allowedTypes = null, $perPage = 15): LengthAwarePaginator
    {
        return $this->getFilteredQuery($allowedTypes)->paginate($perPage);
    }

    public function dataTable(?array $allowedTypes = null)
    {
        $query = $this->getFilteredQuery($allowedTypes);

        return DataTables::of($query)
            ->addColumn('full_name', fn ($user) => $user->full_name)
            ->addColumn('role', fn ($user) => $user->roles->pluck('name')->first() ?? '-')
            ->addColumn('type_label', fn ($user) => $user->type_label)
            ->addColumn('status_label', fn ($user) => $user->status_label)
            ->addColumn('status_badge', fn ($user) => $user->status_badge)
            ->addColumn('image_url', fn ($user) => $user->image_url)
            ->addColumn('created_at_formatted', fn ($user) => $user->created_at->format('M d, Y'))
            ->rawColumns(['full_name', 'status_label', 'image_url'])
            ->make(true);
    }

    public function find($id): User
    {
        return $this->model->with('roles')->findOrFail($id);
    }

    public function create(array $data): User
    {
        return $this->model->create($data);
    }

    public function update(User $user, array $data): User
    {
        $user->update($data);
        return $user->fresh();
    }

    public function delete(User $user): bool
    {
        return $user->delete();
    }

    public function restore($id): User
    {
        $user = $this->model->withTrashed()->findOrFail($id);
        $user->restore();
        return $user;
    }

    public function updateStatus(User $user, int $status): User
    {
        $user->update(['status' => $status]);
        return $user->fresh();
    }

    public function countByType(): array
    {
        return $this->model->selectRaw('type, count(*) as total')
            ->groupBy('type')
            ->pluck('total', 'type')
            ->toArray();
    }

    public function countByStatus(): array
    {
        return $this->model->selectRaw('status, count(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status')
            ->toArray();
    }
}
