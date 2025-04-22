<div>

    <p class="display-3">BOOKS</p>
    <hr>
    <a href="{{ route('addBook') }}" class="btn btn-success">ADD BOOK</a>
    <input class="form-control mr-sm-2" type="text" wire:model.live.debounce.300ms="titleSearch" placeholder="Search Book Title">

    <table class="table mt-2">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Publication Year</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
              <tr wire:key="{{ $book->id }}">
                <th scope="row">{{ $book->title }}</th>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publication_year }}</td>
                <td>
                    <a href="{{ route('editBook', $book->id) }}" class="btn btn-primary">EDIT</a>
                    <button wire:click="delete({{ $book->id }})" class="btn btn-danger">DELETE</button>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
      {{ $books->links() }}
</div>

