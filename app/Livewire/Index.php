<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Books;


class Index extends Component
{

    public function display()
    {
        return view('welcome');
    }

    #[Title('Homepage')]
    public function render()
    {

        return view('livewire.index', ['books'=>Books::all()]);
    }
}
