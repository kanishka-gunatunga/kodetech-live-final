{{-- @include('admin::layouts.dashboard-header'); --}}
@extends('admin::layouts.dashboard-header')

@section('content')
    

@if(session('success'))
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
    <h3>ADD CLIENT</h3>
    <div class="card m-3">
        <div class="card-body">
            <form method="POST" action="{{ url('/admin/add-client') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="clientNameLabel" class="form-label">Client Name</label>
                  <input type="text" class="form-control" id="clientNameLabel" name="client_name" required>
                </div>

                {{-- <div class="mb-3">
                    <label for="clientOverviewLabel" class="form-label">client Overview</label>
                    <input type="text" class="form-control" id="clientOverviewLabel" name="client_overview" required>
                </div>


                <div class="mb-3">
                    <label for="clientDescriptionLabel" class="form-label">client Description</label>
                    <textarea class="form-control" id="clientDescriptionLabel" name="client_description" rows="5"></textarea>

                </div> --}}

                <div class="mb-3">
                    <label for="clientLogo" class="form-label">client Logo</label>
                    <input type="file" class="form-control" id="clientLogo" name="client_logo" accept="image/*">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
    </div>
</div>


@endsection