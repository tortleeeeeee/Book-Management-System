<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Books;

class EditBook extends Component
{
    public $bookId, $title, $author, $publication_year;

    public function mount($id)
    {
        $book = Books::find($id);

        $this->bookId = $book->id;
        $this->title = $book->title;
        $this->author = $book->author;
        $this->publication_year = $book->publication_year;
    }
    public function update(){
        $book = Books::find($this->bookId);

        $book->update([
            'title' => $this->title,
            'author' => $this->author,
            'publication_year' => $this->publication_year,
        ]);
        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.edit-book');
    }
}
