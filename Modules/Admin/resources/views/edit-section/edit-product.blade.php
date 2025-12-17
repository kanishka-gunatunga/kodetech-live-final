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



    <div class="container mt-4">
        <h2>Edit Product</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" name="product_name" class="form-control"
                    value="{{ old('product_name', $product->product_name) }}" required>
            </div>

            <div class="mb-3">
                <label for="product_overview" class="form-label">Product Overview</label>

                <textarea class="form-control" name="product_overview" id="summernote3" rows="3">{{ old('product_overview', $product->product_overview) }}</textarea>
                {{-- <input type="text" name="product_overview" class="form-control"
                    value="" required> --}}
            </div>


            <div class="mb-3">
                <label for="product_short_description" class="form-label">Product Short Description</label>
                <textarea id="summernote1" name="product_short_description" class="form-control">{{ old('product_short_description', $product->product_short_description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="product_description" class="form-label">Product Description</label>
                <textarea id="summernote2" name="product_description" class="form-control">{{ old('product_description', $product->product_description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="product_image" class="form-label">Product Image</label><br>
                @if ($product->product_image)
                    <img src="{{ asset('storage/' . $product->product_image) }}" width="120" class="mb-2">
                @endif
                <input type="file" name="product_image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
            {{-- <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back</a> --}}
        </form>
    </div>


    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#summernote1'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#summernote2'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#summernote3'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
