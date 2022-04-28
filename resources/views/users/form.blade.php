<div class="form-group">
    <label for="name">Full name</label>
    <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name"
           placeholder="Full name" name="name" value="{{ old('name') ?? $user->name  }}" autocomplete="name" autofocus>
    @include('alerts.feedback', ['field' => 'name'])
</div>

<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email"
           placeholder="Email address" name="email" value="{{ old('email') ?? $user->email }}" autocomplete="email">
    @include('alerts.feedback', ['field' => 'email'])
</div>

<div class="form-group">
    <label for="role">Select role</label>
    <select class="js-example-basic-single w-100 @error('role') is-invalid @enderror" id="role" name="role">
        @foreach($user->roleOptions() as $roleOptionKey => $roleOptionValue)
            <option value="{{ $roleOptionKey }}" {{ $roleOptionValue == @$user->role ? 'selected' : '' }}>{{ $roleOptionValue }}</option>
        @endforeach
    </select>
    @include('alerts.feedback', ['field' => 'role'])
</div>
