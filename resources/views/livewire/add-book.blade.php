<div>
    <p class="display-3">ADD BOOK</p>
    <hr>

    <form wire:submit="save">
        <div class="form-group mt-2">
          <b><label>Title</label></b>
          <input class="form-control" type="text" wire:model='title' placeholder="Book Title" required>
        </div>
        <div class="form-group mt-2">
          <b><label>Author</label></b>
          <input class="form-control" type="text" wire:model="author" placeholder="Author" required>
        </div>
        <div class="form-group mt-2">
          <b><label>Year</label></b>
          <input class="form-control" type="number" min="1900" max="2100" wire:model="publication_year" placeholder="Year" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">SUBMIT</button>
      </form>
</div>
