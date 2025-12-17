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
        <h3>EDIT SERVICE ICON</h3>
        <div class="card m-3">
            <div class="card-body">
                <form method="POST" action="{{ route('serviceIcon.update', $serviceIcon->id) }}"
                    enctype="multipart/form-data">
                    @csrf


                    <div class="mb-3">
                        <label for="service_id" class="form-label">Select a Service</label>
                        {{-- <select name="service_id" id="service_id" class="form-control" required>
                            <option value="">-- Select Service --</option>
                            @foreach ($servicesIcons as $serviceIcon)
                                <option value="{{ $serviceIcon->id }}" {{ old('service_id', $serviceIcon->service_id) == $service->id ? 'selected' : '' }}>
                                    {{ $service->service_name }}
                                </option>
                            @endforeach
                        </select> --}}


                        <select name="service_id" id="service_id" class="form-control" required>
                            <option value="">-- Select Service --</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}"
                                    {{ old('service_id', $serviceIcon->service_id) == $service->id ? 'selected' : '' }}>
                                    {{ $service->service_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="serviceIconTitle" class="form-label">Service Icon Title</label>
                        <input type="text" class="form-control" id="serviceIconTitle" name="service_icon_title"
                            value="{{ old('service_icon_title', $serviceIcon->service_icon_title) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="serviceOverviewLabel" class="form-label">Service Icon Short Description</label>
                        <input type="text" class="form-control" id="serviceOverviewLabel"
                            name="service_icon_short_description"
                            value="{{ old('service_icon_short_description', $serviceIcon->service_icon_short_description) }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="serviceIconImage" class="form-label">Service Icon</label>
                        
                        @if ($serviceIcon->service_icon_image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $serviceIcon->service_icon_image) }}"
                                    alt="Current Icon" width="64" height="64">
                            </div>
                        @endif
                        <input type="file" class="form-control" id="serviceIconImage" name="service_icon_image"
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
                    {{-- <a href="{{ route('admin.service-icon.index') }}" class="btn btn-secondary">Cancel</a> --}}
                </form>
            </div>
        </div>
    </div>
@endsection
