@if (session($key ?? 'fail'))
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        {{ session($key ?? 'fail') }} <br>
        <button type="button" class="close pt-3" data-dismiss="alert" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
        </button>
    </div>
@endif
