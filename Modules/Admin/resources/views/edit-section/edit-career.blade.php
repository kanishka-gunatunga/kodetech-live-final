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
        <h3>ADD NEW JOB </h3>
        <div class="card m-3">
            <div class="card-body">
                <form method="POST" action="{{route('career.update',$career->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="careerNameLabel" class="form-label">Career Name</label>
                        <input type="text" class="form-control" id="careerNameLabel" name="career_name" value="{{ $career->career_name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="careerOverviewLabel" class="form-label">Career Overview</label>
                        <input type="text" class="form-control" id="careerOverviewLabel" name="career_overview" value="{{ $career->career_overview }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="careerDescriptionLabel" class="form-label">Career Description</label>
                        <textarea class="form-control" id="summernote" name="career_description">{{$career->career_description}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="working_type" class="form-label">Working Type</label>
                        <select id="working_type" class="form-select" name="working_type" value>
                            <option value="onsite" {{$career->working_type=='onsite' ? 'selected':''}}>Onsite</option>
                            <option value="hybrid" {{$career->working_type=='hybrid' ? 'selected':''}}>Hybrid</option>
                            <option value="remote" {{$career->working_type=='remote' ? 'selected':''}}>Remote</option>
                        </select>
                    </div>      

                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{ $career->location }}">
                    </div>


                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary</label>
                        <input type="number" class="form-control" id="salary" name="salary" value="{{ $career->salary }}">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>



    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#summernote'))
            .catch(error => {
                console.error(error);
            });
    </script>
    
@endsection
