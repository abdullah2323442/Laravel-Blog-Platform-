<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class SupportButton extends Component
{
    public Post $post;


    public function toggleSupport()
    {
        if (auth()->guest()) {
            return $this->redirect(route('login'), true);
        }

        $user = auth()->user();

        if ($user->hasSupported($this->post)) {
            $user->Supports()->detach($this->post);
            return;
        }

        $user->Supports()->attach($this->post);
    }

    public function render()
    {
        return view('livewire.Support-button');
    }
}
