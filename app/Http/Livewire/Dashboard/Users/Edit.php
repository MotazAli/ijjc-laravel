<?php

namespace App\Http\Livewire\Dashboard\Users;

use App\Models\User;
use Livewire\Component;

class Edit extends Component
{

    public User $user;
 
    protected $rules = [
        'user.name' => 'required|string',
        'user.email' => 'required|string',
    ];

    public function mount(User $user){
        $this->user = $user;
    }
    
    public function render()
    {
        return view('livewire.dashboard.users.edit')->layoutData(['title'=> $this->user->name]);
    }
}
