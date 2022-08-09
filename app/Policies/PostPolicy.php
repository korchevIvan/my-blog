<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function show(?User $user, Post $post) {
        return $post->published === 1;
    }

    public function before(?User $user) {
        if($user) {
            return true;
        }

        return null;
    }
}
