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
        <h3>ADD SERVICE</h3>
        <div class="card m-3">
            <div class="card-body">
                <form method="POST" action="{{ url('/admin/add-service') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="serviceNameLabel" class="form-label">Service Name</label>
                        <input type="text" class="form-control" id="serviceNameLabel" name="service_name" required>
                    </div>

                    {{-- <div class="mb-3">
                        <label for="summernote3" class="form-label">Service Overview</label>
                        <input type="text" class="form-control"  name="service_overview" required>
                    </div> --}}

                    <div class="mb-3">
                        <label for="service_overview" class="form-label">Service Overview</label>
                        <textarea id="summernote3" name="service_overview" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="serviceShortDescriptionLabel" class="form-label">Service Short Description</label>
                        <textarea class="form-control" id="summernote1" name="service_short_description" rows="3"></textarea>

                    </div>


                    <div class="mb-3">
                        <label for="serviceDescriptionLabel" class="form-label">Service Description</label>
                        <textarea class="form-control" id="summernote2" name="service_description" rows="5"></textarea>

                    </div>

                    <div class="mb-3">
                        <label for="serviceImage" class="form-label">Service Image</label>
                        <input type="file" class="form-control" id="serviceImage" name="service_image" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>

        </div>
    </div>


    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>


    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script> --}}

    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet"> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script> --}}
    {{-- <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Enter product description...',
                tabsize: 2,
                height: 150
            });
        });
    </script> --}}
    {{-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" /> --}}
    {{-- <script type="text/javascript" src="cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> --}}




    <!-- include summernote css/js-->
    {{-- <link href="summernote-bs5.css" rel="stylesheet">
    <script src="summernote-bs5.js"></script> --}}




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
