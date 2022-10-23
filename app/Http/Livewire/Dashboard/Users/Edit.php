<?php

namespace App\Http\Livewire\Dashboard\Users;

use App\Models\User;
use Livewire\Component;

class Edit extends Component
{

    private User $user;

    public function mount(User $user){
        $this->user = $user;
    }
    
    public function render()
    {
        return view('livewire.dashboard.users.edit',[
            'user' => $this->user
        ]);
    }
}
