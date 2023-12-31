<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Vacante;

class MostrarVacantes extends Component
{
    public function render()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(1);

        return view('livewire.mostrar-vacantes', [
            'vacantes' => $vacantes
        ]);
    }
}