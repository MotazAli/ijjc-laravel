<?php

namespace App\Http\Livewire\Dashboard\Academies;

use App\Models\Academy;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    private LengthAwarePaginator $academies;

    public function mount(LengthAwarePaginator $academies){
        $this->academies = $academies;
    }

    public function academyClickHandler(Academy $academy = null){
        if( is_null($academy))
        {
            //dd($user);
            redirect()->route('dashboard.academies.edit',[$academy]);
        }
    }

    public function render(): Factory|View|Application
    {

        return view(
            'livewire.dashboard.academies.index',
            [
                'academies' => $this->academies
            ]
        );
    }
}
