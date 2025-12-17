{{-- @include('admin::layouts.dashboard-header'); --}}


@extends('admin::layouts.dashboard-header')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('fail'))
        <div class="alert alert-danger">
            {{ session('fail') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <p>{{ $errors->first() }}</p>
        </div>
    @endif


    <div class="main-wrapper">
        <h3>ADD PRODUCT ICON</h3>
        <div class="card m-3">
            <div class="card-body">
                <form method="POST" action="{{ url('/admin/add-product-icon') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="product_id" class="form-label">Select a Product</label>
                        <select name="product_id" id="product_id" class="form-control" required>
                            <option value="">-- Select Product --</option>
                            @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="servieIconTitile" class="form-label">Product Icon Title</label>
                        <input type="text" class="form-control" id="servieIconTitile" name="product_icon_title" required>
                    </div>

                    <div class="mb-3">
                        <label for="productOverviewLabel" class="form-label">Product Icon Short Description</label>
                        <input type="text" class="form-control" id="productOverviewLabel" name="product_icon_short_description"
                            required>
                    </div>


                    <div class="mb-3">
                        <label for="productIconImage" class="form-label">Product Icon</label>
                        <input type="file" class="form-control" id="productIconImage" name="product_icon_image" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>

        </div>
    </div>

@endsection
