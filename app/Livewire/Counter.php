<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1; // ao definir uma propriedade pública, vai está disponivel automaticamente na viw abaixo sem necessidade de passagem de parametros
    public function increment(){
        $this->count++;
    }
    public function decrement(){
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
