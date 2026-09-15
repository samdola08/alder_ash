<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('user.view-any');
    }

    public function view(User $user, User $model): bool
    {
        if (!$user->hasPermissionTo('user.view')) {
            return false;
        }

        $allowedTypes = request()->input('allowed_user_types', []);

        if (!empty($allowedTypes) && !in_array($model->type, $allowedTypes)) {
            return false;
        }

        return true;
    }

    public function create(User $user): bool
    {
        if (!$user->hasPermissionTo('user.create')) {
            return false;
        }

        $allowedTypes = request()->input('allowed_user_types', []);

        if (!empty($allowedTypes)) {
            $requestedType = request()->input('type');

            if ($requestedType && !in_array((int) $requestedType, $allowedTypes)) {
                return false;
            }
        }

        return true;
    }

    public function update(User $user, User $model): bool
    {
        if (!$user->hasPermissionTo('user.update')) {
            return false;
        }

        $allowedTypes = request()->input('allowed_user_types', []);

        if (!empty($allowedTypes) && !in_array($model->type, $allowedTypes)) {
            return false;
        }

        return true;
    }

    public function delete(User $user, User $model): bool
    {
        if (!$user->hasPermissionTo('user.delete') || $user->id === $model->id) {
            return false;
        }

        $allowedTypes = request()->input('allowed_user_types', []);

        if (!empty($allowedTypes) && !in_array($model->type, $allowedTypes)) {
            return false;
        }

        return true;
    }

    public function restore(User $user): bool
    {
        return $user->hasPermissionTo('user.restore');
    }

    public function updateStatus(User $user): bool
    {
        return $user->hasPermissionTo('user.update-status');
    }
}
