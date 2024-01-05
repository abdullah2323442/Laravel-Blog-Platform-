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
        // Only allow the owner of the post or the comment author to view the comment
        return $user->id === $comment->post->user_id || $user->id === $comment->user_id;
    }

    public function create(User $user): bool
    {
        // Allow anyone to create comments
        return true;
    }

    public function update(User $user, Comment $comment): bool
    {
        // Only allow the owner of the comment to update it
        return $user->id === $comment->user_id;
    }

    public function delete(User $user, Comment $comment): bool
    {
        // Only allow the owner of the comment or the owner of the post to delete it
        return $user->id === $comment->user_id || $user->id === $comment->post->user_id;
    }
}
