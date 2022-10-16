<?php

namespace App\Http\Livewire\Menu;

use Livewire\Component;

class Schedule extends Component
{

    
    public $numberOfDays;


    public function mount()
    {
        $this->numberOfDays = range(0,6);
    }


    public function render()
    {
        return view('livewire.menu.schedule');
    }


    public function getFirstDate(){
        return date("d/m/Y");
    }

    public function getLastDate(){
        $today = date("Y-m-d");
        //$date = strtotime($today);
        //$date = strtotime("+7 day", $today);
        return date( "d/m/Y", strtotime( "$today +7 day" ) );// date("d/m/Y",$date);
    }


    public function getDayNameOfDate(string $day){
        if($day == "0"){ return date( 'l' ); }

        $today = date("Y-m-d");
        return date( 'l', strtotime( "$today +$day day" ) );
    }

    public function getDayNumberOfDate(string $day){
        
        if($day == "0"){ return date( 'j' ); }
            
        $today = date("Y-m-d");
        return date( 'j', strtotime( "$today +$day day" ) );
    }
}
