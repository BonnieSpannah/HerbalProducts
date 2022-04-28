@extends('layouts.app', ['menu' => 'products', 'submenu' => 'edit'])

@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Product</h4>
                    <p class="card-description">
                        Edit {{ $product->luo_name }} details
                    </p>
                    <form class="forms-sample" method="POST" action="{{ route('products.update', $product) }}">
                        @csrf

                        @include('products.form')

                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
