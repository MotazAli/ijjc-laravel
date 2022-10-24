<?php

namespace App\Http\Livewire\Dashboard\Users;

use App\Interfaces\Services\UsersServiceInterface;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
        
    //private int $rowsPerPage = 6;

    private LengthAwarePaginator $users;
    //private  $users;


    // function __construct()
    // {
    //     $this->users = new LengthAwarePaginator(null,0,1);
    // }

    // public function mount(UsersServiceInterface $usersservice){
        
    //     $this->users =  $usersservice->getAllUsersAscdPagination($this->rowsPerPage); //User::orderBy('created_at','desc')->paginate($this->rowsPerPage);
    //     //dd(get_class($this->users));
    //     //dd($this->users);
    // }

    public function mount(LengthAwarePaginator $users){
        
        $this->users =  $users;
    }

    public function userClickHandler(User $user){
        if($user)
        {
            //dd($user);
            redirect()->route('dashboard.users.edit',[$user]);
        }
    }


    public function render()
    {
        return view('livewire.dashboard.users.index',[
            'users' => $this->users
        ]);
    }
}
