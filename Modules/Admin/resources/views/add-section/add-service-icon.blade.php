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
        <h3>ADD SERVICE ICON</h3>
        <div class="card m-3">
            <div class="card-body">
                <form method="POST" action="{{ url('/admin/add-service-icon') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="service_id" class="form-label">Select a Service</label>
                        <select name="service_id" id="service_id" class="form-control" required>
                            <option value="">-- Select Service --</option>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="servieIconTitile" class="form-label">Service Icon Title</label>
                        <input type="text" class="form-control" id="servieIconTitile" name="service_icon_title" required>
                    </div>

                    <div class="mb-3">
                        <label for="serviceOverviewLabel" class="form-label">Service Icon Short Description</label>
                        <input type="text" class="form-control" id="serviceOverviewLabel" name="service_icon_short_description"
                            required>
                    </div>


                    <div class="mb-3">
                        <label for="serviceIconImage" class="form-label">Service Icon</label>
                        <input type="file" class="form-control" id="serviceIconImage" name="service_icon_image" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>

        </div>
    </div>

@endsection
