<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    protected $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    protected function getAllowedTypes(Request $request): ?array
    {
        return $request->input('allowed_user_types');
    }

    public function index(Request $request)
    {
        $this->authorize('viewAny', User::class);

        $allowedTypes = $this->getAllowedTypes($request);

        if ($request->ajax() || $request->wantsJson()) {
            return $this->service->getForDataTable($allowedTypes);
        }

        return view('admin.users.index', compact('allowedTypes'));
    }

    public function create(Request $request)
    {
        $this->authorize('create', User::class);

        $roles = Role::orderBy('name')->get();
        $allowedTypes = $this->getAllowedTypes($request);

        return view('admin.users.create', compact('roles', 'allowedTypes'));
    }

    public function store(StoreUserRequest $request)
    {
        $this->authorize('create', User::class);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('users', 'public');
        }

        $this->service->create($validated);

        return redirect()->route('admin.users.index')
            ->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        $this->authorize('view', $user);

        $user = $this->service->getById($user->id);

        return view('admin.users.show', compact('user'));
    }

    public function edit(Request $request, User $user)
    {
        $this->authorize('update', $user);

        $roles = Role::orderBy('name')->get();
        $user->load('roles');
        $allowedTypes = $this->getAllowedTypes($request);

        return view('admin.users.edit', compact('user', 'roles', 'allowedTypes'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $this->authorize('update', $user);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('users', 'public');
        }

        $this->service->update($user, $validated);

        return redirect()->route('admin.users.index')
            ->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $this->authorize('delete', $user);

        $this->service->delete($user);

        return redirect()->route('admin.users.index')
            ->with('success', 'User deleted successfully.');
    }

    public function restore($id)
    {
        $this->authorize('restore', User::class);

        $this->service->restore($id);

        return redirect()->route('admin.users.index')
            ->with('success', 'User restored successfully.');
    }

    public function updateStatus(Request $request, User $user)
    {
        $this->authorize('updateStatus', User::class);

        $request->validate([
            'status' => 'required|in:0,1,2',
        ]);

        $this->service->updateStatus($user, $request->status);

        return redirect()->back()
            ->with('success', 'User status updated successfully.');
    }
}
