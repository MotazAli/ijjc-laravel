<?php

namespace App\Http\Livewire\Dashboard\Academies;

use App\Models\Academy;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Create extends Component
{

    private string $filename = "countries";
    public array  $countries_json = [];
    public string $selected_country = '';
    public string $selected_city = '';
    public array $cities = [];

    public $is_active;

//    protected array $rules = [
//        '$academy.name' => 'required|string',
//        '$academy.owner' => 'required|string',
//        '$academy.phone' => 'required|string',
//        '$academy.address' => 'required|string',
//    ];

    public function mount(){



        $path = storage_path() . "/json/{$this->filename}.json"; // ie: /var/www/laravel/app/storage/json/countries.json
        $this->countries_json =(array) json_decode(file_get_contents($path), true);

        //dd(current($this->countries_json));
        // dd(gettype($this->countries_json[]));
    }
    public function render(): Factory|View|Application
    {
        if(!empty($this->selected_country))
        {
            $this->cities = $this->countries_json[$this->selected_country];
        }
        return view('livewire.dashboard.academies.create');
    }
}
