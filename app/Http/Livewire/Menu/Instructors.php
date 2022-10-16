<?php

namespace App\Http\Livewire\Menu;

use Livewire\Component;

class Instructors extends Component
{


    public $instructors;


    public function mount(){
        $this->instructors = collect([1, 2, 3]);
        //  [
        //     ['name' => 'fouzi mouzuari', 'belt' => 'black', 'dan' => 3 ,'email' => 'fouzi@gamil.com','phone' => '3245346546', 'descriptions' => 'this is just descriptions','image_path' => 'https://res.cloudinary.com/dfw7q7qe2/image/upload/v1665894292/ijjc/05f46fba-3528-40d1-b642-2e04238369ae_amptpm.jpg'],
        //     ['name' => 'motaz ali', 'belt' => 'black', 'dan' => 0 ,'email' => 'motaz@gamil.com','phone' => '3245346546' ,'descriptions' => 'this is just descriptions','image_path' => 'https://res.cloudinary.com/dfw7q7qe2/image/upload/v1665894292/ijjc/05f46fba-3528-40d1-b642-2e04238369ae_amptpm.jpg'],
        //     ['name' => 'ahmed bahgat', 'belt' => 'purple', 'dan' => 0 ,'email' => 'ahmed@gamil.com','phone' => '3245346546' ,'descriptions' => 'this is just descriptions','image_path' => 'https://res.cloudinary.com/dfw7q7qe2/image/upload/v1665894292/ijjc/05f46fba-3528-40d1-b642-2e04238369ae_amptpm.jpg']
        // ];
    }


    public function render()
    {
        return view('livewire.menu.instructors');
    }
}
