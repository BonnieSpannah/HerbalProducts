@extends('layouts.app', ['menu' => 'users', 'submenu' => 'index'])

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">System Users</h4>
                <p class="card-description">
                    All registered users in the system
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Full name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Updated At</th>
                            <th class="text-center">Manage</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $n = 1;?>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $n }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->status }}</td>
                                <td>{{ $user->updated_at->format('j l, F Y') }}</td>
                                <td class="text-center">
                                    @if(auth()->user()->role == 'Super Admin')
                                        @if($user->status == 'Active')
                                            <a href="{{ route('users.edit', $user) }}" rel="tooltip" data-placement="bottom" title="Edit {{ $user->name }}" class="btn btn-round btn-warning btn-icon btn-sm">Edit</a>
                                            <a href="{{ route('users.deactivate', $user) }}" rel="tooltip" data-placement="bottom" title="Edit {{ $user->name }}" class="btn btn-round btn-danger btn-icon btn-sm">Deactivate</a>
                                        @else
                                            <a href="{{ route('users.activate', $user) }}" rel="tooltip" data-placement="bottom" title="Edit {{ $user->name }}" class="btn btn-round btn-success btn-icon btn-sm">Activate</a>
                                        @endif
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                            <?php $n++;?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
