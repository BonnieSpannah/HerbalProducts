@if (session($key ?? 'status'))
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session($key ?? 'status') }}
    </div>
@endif
