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
    <h3>EDIT TESTIMONIAL</h3>
    <div class="card m-3">
        <div class="card-body">
            <form method="POST" action="{{ route('testimonial.update', $testimonial->id) }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="reviewOverviewLabel" class="form-label">Review Overview</label>
                    <input type="text" class="form-control" id="reviewOverviewLabel" name="review_overview" value="{{ $testimonial->review_overview }}" required>
                </div>

                <div class="mb-3">
                    <label for="reviewMessageLabel" class="form-label">Review Message</label>
                    <textarea class="form-control" id="reviewMessageLabel" name="review_message" rows="5">{{ $testimonial->review_message }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="RatingValueLabel" class="form-label">Rating</label>
                    <select id="RatingValueLabel" class="form-select" name="rating">
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}" {{ $testimonial->rating == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <div class="mb-3">
                    <label for="ClientNameLabel" class="form-label">Client Name</label>
                    <input type="text" class="form-control" id="ClientNameLabel" name="client_name" value="{{ $testimonial->client_name }}" required>
                </div>

                <div class="mb-3">
                    <label for="ClientDesignationLabel" class="form-label">Client Designation</label>
                    <input type="text" class="form-control" id="ClientDesignationLabel" name="client_designation" value="{{ $testimonial->client_designation }}" required>
                </div>

                <div class="mb-3">
                    <label for="testimonialClientImage" class="form-label">Client Image</label>
                    <input type="file" class="form-control" id="testimonialClientImage" name="testimonial_client_image" accept="image/*">

                    @if($testimonial->testimonial_client_image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $testimonial->testimonial_client_image) }}" width="100" alt="Current Image">
                        </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
