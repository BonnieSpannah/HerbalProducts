@extends('layouts.app', ['menu' => 'users', 'submenu' => 'edit'])

@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit User</h4>
                    <p class="card-description">
                        Edit {{ $user->name }} details
                    </p>
                    <form class="forms-sample" method="POST" action="{{ route('users.update', $user) }}">
                        @csrf

                        @include('users.form')

                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
