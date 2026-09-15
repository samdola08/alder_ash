<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll(?array $allowedTypes = null)
    {
        return $this->repository->paginate($allowedTypes);
    }

    public function getForDataTable(?array $allowedTypes = null)
    {
        return $this->repository->dataTable($allowedTypes);
    }

    public function getById($id): User
    {
        return $this->repository->find($id);
    }

    public function create(array $data): User
    {
        $data['name'] = trim($data['first_name'] . ' ' . ($data['last_name'] ?? ''));
        $data['password'] = Hash::make($data['password']);

        $user = $this->repository->create($data);

        if (!empty($data['role'])) {
            $user->assignRole($data['role']);
        }

        return $user;
    }

    public function update(User $user, array $data): User
    {
        $data['name'] = trim($data['first_name'] . ' ' . ($data['last_name'] ?? ''));

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $user = $this->repository->update($user, $data);

        if (!empty($data['role'])) {
            $user->syncRoles([$data['role']]);
        }

        return $user;
    }

    public function delete(User $user): bool
    {
        return $this->repository->delete($user);
    }

    public function restore($id): User
    {
        return $this->repository->restore($id);
    }

    public function updateStatus(User $user, int $status): User
    {
        return $this->repository->updateStatus($user, $status);
    }

    public function getStats(): array
    {
        return [
            'by_type' => $this->repository->countByType(),
            'by_status' => $this->repository->countByStatus(),
        ];
    }
}
