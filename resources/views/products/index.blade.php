@extends('layouts.app', ['menu' => 'products', 'submenu' => 'index'])

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">System Products</h4>
                <p class="card-description">
                    All registered products in the system
                </p>

                @include('alerts.success')
                @include('alerts.fail')

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Luo name</th>
                            <th>Scientific name</th>
                            <th>Type</th>
                            <th>Treatment</th>
                            <th>Created By</th>
                            <th>Updated At</th>
                            <th class="text-center">Manage</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $n = 1;?>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $n }}</td>
                                <td>{{ $product->luo_name }}</td>
                                <td>{{ $product->scientific_name }}</td>
                                <td>{{ $product->type }}</td>
                                <td>{{ $product->treatment }}</td>
                                <td>{{ $product->user->name }}</td>
                                <td>{{ $product->updated_at->format('j l, F Y') }}</td>
                                <td class="text-center">
                                    @if($product->user_id == auth()->id() || auth()->user()->role == 'Super Admin')
                                        <a href="{{ route('products.edit', $product) }}" rel="tooltip" data-placement="bottom" title="Edit {{ $product->luo_name }}" class="btn btn-round btn-info btn-icon btn-sm">Edit</a>
                                    @else
                                        -
                                    @endif
                                    @if(auth()->user()->role == 'Super Admin')
                                        <a href="{{ route('products.delete', $product) }}" rel="tooltip" data-placement="bottom" title="Delete {{ $product->luo_name }}" class="btn btn-round btn-danger btn-icon btn-sm">Delete</a>
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
