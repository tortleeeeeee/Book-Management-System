<div>

    @if (session('success'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif (session('addSuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('addSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif (session('updateSuccess'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            {{ session('updateSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <p class="display-3">BOOKS</p>
    <hr>

    <div class="d-flex justify-content-between align-items-center">
        <input class="form-control mr-sm-2" style="width:300px" type="text" wire:model.live.debounce.300ms="titleSearch" placeholder="Search Book Title">
        <a href="{{ route('addBook') }}" class="btn btn-success ms-auto">ADD BOOK</a>
    </div>

    <table class="table mt-2">
        <thead>
          <tr>
            <th scope="col" class="w-25">Title</th>
            <th scope="col" class="w-25">Author</th>
            <th scope="col" class="w-25">Publication Year</th>
            <th scope="col" class="w-25 text-end">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
              <tr wire:key="{{ $book->id }}">
                <th scope="row" class="w-25">{{ $book->title }}</th>
                <td class="w-25">{{ $book->author }}</td>
                <td class="w-25">{{ $book->publication_year }}</td>
                <td class="w-25 text-end">
                    <a href="{{ route('editBook', $book->id) }}" class="btn btn-primary">EDIT</a>
                    <button wire:click="delete({{ $book->id }})" class="btn btn-danger">DELETE</button>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
      {{ $books->links() }}

      <script>
        $(".alert").alert('close')
      </script>
</div>

