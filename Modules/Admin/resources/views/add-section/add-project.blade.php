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
        <H3>ADD PROJECT</H3>
        <div class="card m-3">
            <div class="card-body">
                <form method="POST" action="{{ url('/admin/add-project') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="projectNameLabel" class="form-label">Project Name</label>
                        <input type="text" class="form-control" id="projectNameLabel" name="project_name" required>
                    </div>

                    <div class="mb-3">
                        <label for="formSelect" class="form-label">Category</label>
                        <select id="formSelect" class="form-select" name="category" required>
                            <option>Select Category</option>
                            <option>UX/UI Design</option>
                            <option>Branding</option>
                            <option>Marketing</option>
                            <option>Commercial</option>
                            <option>Web Development</option>
                        </select>
                    </div>



                    <div class="mb-3">
                        <label for="ClientNameLabel" class="form-label">Client</label>
                        <input type="text" class="form-control" id="ClientNameLabel" name="client_name">
                    </div>

                    <div class="mb-3">
                        <label for="durationLabel" class="form-label">Duration</label>
                        <input type="text" class="form-control" id="durationLabel" name="duration">
                    </div>

                    <div class="mb-3">
                        <label for="projectTypeSelect" class="form-label">Project Type</label>
                        <select id="projectTypeSelect" class="form-select" name="project_type" required>
                            <option>System</option>
                            <option>Website</option>
                        </select>
                    </div>

                    <div class="mb-3 d-none" id="websiteLinkContainer">
                        <label for="websiteLink" class="form-label">Website Link</label>
                        <input type="url" class="form-control" id="websiteLink" name="websiteLink">
                    </div>


                    <div class="mb-3">
                        <label for="projectOverviewLabel" class="form-label">Project Overview</label>
                        <input type="text" class="form-control" id="projectOverviewLabel" name="project_overview"
                            required>
                    </div>


                    <div class="mb-3">
                        <label for="projectDescriptionLabel" class="form-label">Project Description</label>
                        <textarea class="form-control" id="summernote" name="project_description" rows="5"></textarea>

                    </div>

                    <div class="mb-3">
                        <label for="projectImage" class="form-label">Project Image</label>
                        <input type="file" class="form-control" id="projectImage" name="project_image" accept="image/*">
                    </div>



                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
    {{-- 
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script type="text/javascript" src="cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">

    <!-- include summernote css/js-->
    <link href="summernote-bs5.css" rel="stylesheet">
    <script src="summernote-bs5.js"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Enter product description...',
                tabsize: 2,
                height: 150
            });
        });
    </script> --}}

    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
    

    <script>
        $('#summernote').summernote({
            placeholder: 'Type....',
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
            ],
            styleTags: [{
                    title: 'Paragraph',
                    tag: 'p',
                    className: '',
                    value: 'p'
                },
                {
                    title: 'Heading 1',
                    tag: 'h1',
                    className: '',
                    value: 'h1'
                },
                {
                    title: 'Heading 2',
                    tag: 'h2',
                    className: '',
                    value: 'h2'
                },
                {
                    title: 'Heading 3',
                    tag: 'h3',
                    className: '',
                    value: 'h3'
                }
            ],
            callbacks: {
                onPaste: function(e) {
                    e.preventDefault();
                    const text = (e.originalEvent || e).clipboardData.getData('text/plain');
                    document.execCommand('insertText', false, text);
                }
            }
        });
    </script> --}}

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#summernote'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const select = document.getElementById('projectTypeSelect');
            const container = document.getElementById('websiteLinkContainer');

            function update() {
                if (select.value === 'Website') {
                    container.classList.remove('d-none');
                } else {
                    container.classList.add('d-none');
                }
            }

            update();
            select.addEventListener('change', update);
        });
    </script>
@endsection
