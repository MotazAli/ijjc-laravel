<?php

namespace App\Http\Livewire\Dashboard\Users;

use App\Models\User;
use Livewire\Component;

class Show extends Component
{

    private User $user;

    public function mount(User $user){
        $this->user = new User();
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.dashboard.users.show',[
            'user' => $this->user
        ]);
    }
}
