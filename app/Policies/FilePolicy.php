<?php

namespace App\Policies;

use App\Models\File;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FilePolicy
{
    use HandlesAuthorization;

    public function create(User $user, File $file)
    {
        return $user->id == $file->user_id;
    }
}
