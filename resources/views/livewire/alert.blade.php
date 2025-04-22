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

    <script>
        $(".alert").alert('close')
    </script>
</div>
