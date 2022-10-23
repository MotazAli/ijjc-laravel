<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;

class Button extends Component
{


    public bool $showLoading;
    public string $text;

    protected $listeners = [
        'showLoading' => 'showLoadingHandler',
        'hideLoading' => 'hideLoadingHandler',
    ];


    public function mount(){
        $this->showLoading = false;
    }


    public function showLoadingHandler(){
        $this->showLoading = true;
    }

    public function hideLoadingHandler(){
        $this->showLoading = false;
    }

    public function clickHandler(){
        $this->showLoadingHandler();
    }

    public function render()
    {
        return view('livewire.ui.button');
    }
}
