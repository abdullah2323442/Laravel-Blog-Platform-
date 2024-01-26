<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CommentPolicy
{
    public function viewAny(User $user): bool
    {
        // Allow anyone to view any comment
        return true;
    }

    public function view(User $user, Comment $comment): bool
    {
        if ($user->isAdmin() || $user->isEditor()) {
            return true;
        }

        return $user->id === $comment->post->user_id || $user->id === $comment->user_id;
    }

    public function create(User $user): bool
    {
        // Allow anyone to create comments
        return $user->isUser();
    }

    public function update(User $user, Comment $comment): bool
    {
        if ($user->isAdmin() || $user->isEditor()) {
            return true;
        }
        return $user->id === $comment->user_id;
    }

    public function delete(User $user, Comment $comment): bool
    {
        if ($user->isAdmin()||$user->isEditor()) {
            return true;
        }

        // Check if user is the author of the post
        return $user->id === $comment->user_id;
    }
}
