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

        <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">

                <label for="newsHeading" class="form-label">News Heading</label>
                <input type="text" class="form-control" id="newsHeading" name="news_heading"
                    value="{{ old('news_heading', $blog->news_heading) }}" required>

            </div>

            <div class="mb-3">
                <label for="newsDesccriptionLabel" class="form-label">News Description</label>
                <textarea class="form-control" id="summernote" name="news_description">{{ old('news_description', $blog->news_description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="authur" class="form-label">Authur</label>
                <input type="text" class="form-control" id="authur" name="authur"
                    value="{{ old('authur', $blog->authur) }}">
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date"
                    value="{{ old('date', $blog->date) }}" required>
            </div>

            <div class="mb-3">
                <label for="newsImage" class="form-label">News Image</label><br>
                @if ($blog->news_image)
                    <img src="{{ asset('storage/' . $blog->news_image) }}" width="120" class="mb-2">
                @endif
                <input type="file" class="form-control" id="newsImage" name="news_image" accept="image/*">

            </div>

            <button type="submit" class="btn btn-primary">Update Blog</button>

        </form>
    </div>


    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#summernote'))
            .catch(error => {
                console.error(error);
            });


        // const newsDescription = @json($blog->news_description);
        // console.log(newsDescription);
    </script>
@endsection
