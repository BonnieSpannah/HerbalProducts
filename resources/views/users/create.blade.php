@extends('layouts.app', ['menu' => 'users', 'submenu' => 'create'])

@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">New User</h4>
                    <p class="card-description">
                        New user details
                    </p>
                    <form class="forms-sample" method="POST" action="{{ route('users.store') }}">
                        @csrf

                        @include('users.form')

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
