<?php

namespace App\Http\Livewire\Dashboard\Users;

use App\Models\User;
use Livewire\Component;

class Edit extends Component
{

    public User $user;
    private string $filename = "countries";
    public array  $countries_json = [];
    public string $selected_country = '';
    public string $selected_city = '';
    public array $cities = [];
    public array $joined_academies = [];
    
    protected $rules = [
        'user.name' => 'required|string',
        'user.email' => 'required|string',
        'user.birth_date'=>'date',
    ];

    public function mount(User $user){
        $this->user = $user;

        
        $path = storage_path() . "/json/{$this->filename}.json"; // ie: /var/www/laravel/app/storage/json/countries.json
        $this->countries_json =(array) json_decode(file_get_contents($path), true);
        if(empty($this->user->birth_date))
        {
            $this->user->birth_date = now()->setTimezone('T')->format('Y-m-d');
        }
        //dd(current($this->countries_json));
        // dd(gettype($this->countries_json[]));
    }
    
    public function render()
    {
        
        if(!empty($this->selected_country))
        {
            $this->cities = $this->countries_json[$this->selected_country];
        }
        return view('livewire.dashboard.users.edit');//->layoutData(['title'=> $this->user->name]);
    }
}
