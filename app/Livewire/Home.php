<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Books;
use Livewire\WithPagination;


class Home extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $titleSearch = '';

    public function delete($id)
    {
        $book = Books::find($id);
        $book->delete();
    }

    #[Title('Homepage')]
    public function render()
    {
        if ($this->titleSearch) {
            return view('livewire.home', ['books'=>Books::where('title', 'LIKE', "%{$this->titleSearch}%")->paginate(5)]);
        }

        return view('livewire.home', ['books'=>Books::paginate(5)]);
    }
}
