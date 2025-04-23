<div>
    <livewire:alert>
    <p class="display-3">BOOKS</p>
    <hr>

    <div class="d-flex justify-content-between align-items-center">
        <input class="form-control mr-sm-2" style="width:300px" type="text" wire:model.live.debounce.300ms="titleSearch" placeholder="Search Book Title">
        <a href="{{ route('addBook') }}" class="btn btn-success ms-auto">ADD BOOK</a>
    </div>

    <table class="table mt-2">
        <thead>
          <tr>
            <th scope="col" class="w-auto">Title</th>
            <th scope="col" class="w-auto">Author</th>
            <th scope="col" class="w-auto">Publication Year</th>
            <th scope="col" class="w-auto text-end">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
              <tr wire:key="{{ $book->id }}">
                <th scope="row" class="w-auto">{{ $book->title }}</th>
                <td class="w-auto">{{ $book->author }}</td>
                <td class="w-auto">{{ $book->publication_year }}</td>
                <td class="w-auto text-end">
                    <a href="{{ route('editBook', $book->id) }}" class="btn btn-primary">EDIT</a>
                    <button wire:confirm="Are you sure you want to delete {{ $book->title }}?" wire:click="delete({{ $book->id }})" class="btn btn-danger">DELETE</button>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
      {{ $books->links() }}

</div>
