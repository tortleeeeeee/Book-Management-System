<div>

    <a href="{{ route('addBook') }}">Add Book</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Publication Year</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
              <tr wire:key="{{ $book->id }}">
                <th scope="row">{{ $book->title }}</th>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publication_year }}</td>
                <td>
                    <button wire:click="render">Delete</button>
                </td>
                <td>
                    <button>edit</button>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>

