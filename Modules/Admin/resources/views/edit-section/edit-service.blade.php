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
        <h2>Edit Service</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="service" class="form-label">Service Name</label>
                <input type="text" name="service_name" class="form-control"
                    value="{{ old('service', $service->service_name) }}" required>
            </div>


            <div class="mb-3">
                <label for="service_overview" class="form-label">Service Overview</label>
                <textarea id="service_overview" name="service_overview" class="form-control">{{ old('service_overview', $service->service_overview) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="service_short_description" class="form-label">Service Short Description</label>
                <textarea id="service_short_description" name="service_short_description" class="form-control">{{ old('service_short_description', $service->service_short_description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="service_description" class="form-label">Service Description</label>
                <textarea id="summernote" name="service_description" class="form-control">{{ old('service_description', $service->service_description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="service_image" class="form-label">Service Image</label><br>
                @if ($service->service_image)
                    <img src="{{ asset('storage/' . $service->service_image) }}" width="120" class="mb-2">
                @endif
                <input type="file" name="service_image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
            {{-- <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back</a> --}}
        </form>
    </div>


    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#summernote'))
            .catch(error => {
                console.error(error);
            });


        ClassicEditor
            .create(document.querySelector('#service_short_description'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#service_overview'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
