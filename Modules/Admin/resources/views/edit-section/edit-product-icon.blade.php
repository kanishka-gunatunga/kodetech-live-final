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
        <h3>EDIT PRODUCT ICON</h3>
        <div class="card m-3">
            <div class="card-body">
                <form method="POST" action="{{ route('productIcon.update', $productIcon->id) }}"
                    enctype="multipart/form-data">
                    @csrf


                    <div class="mb-3">
                        <label for="product_id" class="form-label">Select a Product</label>
                        {{-- <select name="product_id" id="product_id" class="form-control" required>
                            <option value="">-- Select Product --</option>
                            @foreach ($productsIcons as $productIcon)
                                <option value="{{ $productIcon->id }}" {{ old('product_id', $productIcon->product_id) == $product->id ? 'selected' : '' }}>
                                    {{ $product->product_name }}
                                </option>
                            @endforeach
                        </select> --}}


                        <select name="product_id" id="product_id" class="form-control" required>
                            <option value="">-- Select Product --</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}"
                                    {{ old('product_id', $productIcon->product_id) == $product->id ? 'selected' : '' }}>
                                    {{ $product->product_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="productIconTitle" class="form-label">Product Icon Title</label>
                        <input type="text" class="form-control" id="productIconTitle" name="product_icon_title"
                            value="{{ old('product_icon_title', $productIcon->product_icon_title) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="productOverviewLabel" class="form-label">Product Icon Short Description</label>
                        <input type="text" class="form-control" id="productOverviewLabel"
                            name="product_icon_short_description"
                            value="{{ old('product_icon_short_description', $productIcon->product_icon_short_description) }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="productIconImage" class="form-label">Product Icon</label>
                        
                        @if ($productIcon->product_icon_image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $productIcon->product_icon_image) }}"
                                    alt="Current Icon" width="64" height="64">
                            </div>
                        @endif
                        <input type="file" class="form-control" id="productIconImage" name="product_icon_image"
                            accept="image/*">
                    </div>


                    {{-- <div class="mb-3">
                        <label for="newsImage" class="form-label">News Image</label><br>
                        @if ($blog->news_image)
                            <img src="{{ asset('storage/' . $blog->news_image) }}" width="120" class="mb-2">
                        @endif
                        <input type="file" class="form-control" id="newsImage" name="news_image" accept="image/*">

                    </div> --}}
                    <button type="submit" class="btn btn-primary">Update Icon</button>
                    {{-- <a href="{{ route('admin.product-icon.index') }}" class="btn btn-secondary">Cancel</a> --}}
                </form>
            </div>
        </div>
    </div>
@endsection
