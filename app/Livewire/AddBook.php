<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Books;

class AddBook extends Component
{
    public $title, $author, $publication_year;

    public function save(){
        Books::create([
            'title' => $this->title,
            'author' => $this->author,
            'publication_year' => $this->publication_year,
        ]);

        return redirect('/')->with('addSuccess', 'Book added successfully!');
    }
    public function render()
    {
        return view('livewire.add-book');
    }
}
