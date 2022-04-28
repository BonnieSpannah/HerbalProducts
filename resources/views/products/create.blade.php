@extends('layouts.app', ['menu' => 'products', 'submenu' => 'create'])

@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">New Product</h4>
                    <p class="card-description">
                        New product details
                    </p>
                    <form class="forms-sample" method="POST" action="{{ route('products.store') }}">
                        @csrf

                        @include('products.form')

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
