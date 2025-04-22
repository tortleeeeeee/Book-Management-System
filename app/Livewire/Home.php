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

    public function delete($id, $title)
    {
        $book = Books::find($id);
        $book->delete();
        return redirect()->with('success', 'Book deleted successfully!');
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
