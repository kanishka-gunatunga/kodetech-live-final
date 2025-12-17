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
        <h2>Edit Project</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="project_name" class="form-label">Project Name</label>
                <input type="text" name="project_name" class="form-control"
                    value="{{ old('project_name', $project->project_name) }}" required>
            </div>


            <select id="formSelect" class="form-select" name="category" required>
                <option value="">Select Category</option>
                <option value="UX/UI Design" {{ $project->category == 'UX/UI Design' ? 'selected' : '' }}>UX/UI Design
                </option>
                <option value="Branding" {{ $project->category == 'Branding' ? 'selected' : '' }}>Branding</option>
                <option value="Marketing" {{ $project->category == 'Marketing' ? 'selected' : '' }}>Marketing</option>
                <option value="Commercial" {{ $project->category == 'Commercial' ? 'selected' : '' }}>Commercial</option>
                <option value="Web Development" {{ $project->category == 'Web Development' ? 'selected' : '' }}>Web
                    Development</option>
            </select>



            <div class="mb-3">
                <label for="ClientNameLabel" class="form-label">Client</label>
                <input type="text" class="form-control" id="ClientNameLabel" name="client_name"
                    value="{{ old('client_name', $project->client_name) }}">
            </div>

            <div class="mb-3">
                <label for="durationLabel" class="form-label">Duration</label>
                <input type="text" class="form-control" id="durationLabel" name="duration"
                    value="{{ old('duration', $project->duration) }}">
            </div>

            <div class="mb-3">
                <label for="projectTypeSelect" class="form-label">Project Type</label>
                <select id="projectTypeSelect" class="form-select" name="project_type" required>
                    <option value="System" {{ $project->project_type == 'System' ? 'selected' : '' }}>System</option>
                    <option value="Website" {{ $project->project_type == 'Website' ? 'selected' : '' }}>Website</option>
                </select>
            </div>

            <div class="mb-3 d-none" id="websiteLinkContainer">
                <label for="websiteLink" class="form-label">Website Link</label>
                <input type="text" class="form-control" id="websiteLink" name="websiteLink"
                    value="{{ old('websiteLink', $project->website_link) }}">
            </div>

            <div class="mb-3">
                <label for="project_overview" class="form-label">Project Overview</label>
                <input type="text" name="project_overview" class="form-control"
                    value="{{ old('project_overview', $project->project_overview) }}" required>
            </div>

            <div class="mb-3">
                <label for="project_description" class="form-label">Project Description</label>
                <textarea id="summernote" name="project_description" class="form-control">{{ old('project_description', $project->project_description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="project_image" class="form-label">Project Image</label><br>
                @if ($project->project_image)
                   {{-- <img src="{{ asset($project->project_image) }}" width="120" class="mb-2"> --}}
                    <img src="{{ asset('storage/' . $project->project_image) }}" width="120" class="mb-2">
                @endif
                <input type="file" name="project_image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update Project</button>
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
