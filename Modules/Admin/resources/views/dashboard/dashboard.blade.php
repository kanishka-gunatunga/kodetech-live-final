<?php
use Illuminate\Support\Str;
?>
@extends('admin::layouts.dashboard-header')

@section('content')
    <div class="main-wrapper p-3" style="background-color: beige">
        <div class="row d-flex flex-column align-items-center row-cols-1 gap-3">

            {{-- project table --}}
            <div class="card col-9">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/admin/add-project') }}">
                            <button type="button" class="btn btn-info">Add Project</button>
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Project Name</th>
                                    {{-- <th scope="col">Project Image</th> --}}
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($projects as $index => $project)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $project->project_name }}</td>
                                        {{-- <td>
                                            @if ($project->project_image)
                                                <img src="{{ asset('storage/' . $project->project_image) }}" width="100"
                                                    height="100" alt="Project Image">
                                            @else
                                                No image
                                            @endif
                                        </td> --}}
                                        <td>
                                            <a href="{{ route('project.edit', $project->id) }}"
                                                class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('project.destroy', $project->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure to delete this project?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- service table --}}
            <div class="card col-9">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/admin/add-service') }}">
                            <button type="button" class="btn btn-info">Add Service</button>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Service Name</th>
                                    {{-- <th scope="col">Image</th> --}}
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($services as $index => $service)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $service->service_name }}</td>
                                        {{-- <td>
                                            @if ($service->service_image)
                                                <img src="{{ asset('storage/' . $service->service_image) }}" width="100"
                                                    height="100" alt="Product Image">
                                            @else
                                                No image
                                            @endif
                                        </td> --}}
                                        <td>
                                            <a href="{{ route('service.edit', $service->id) }}"
                                                class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form action="{{ route('service.destroy', $service->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure to delete this service?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- product table --}}
            <div class="card col-9">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/admin/add-product') }}">
                            <button type="button" class="btn btn-info">Add Product</button>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    {{-- <th scope="col">Image</th> --}}
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $index => $product)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $product->product_name }}</td>
                                        {{-- <td>
                                            @if ($product->product_image)
                                                <img src="{{ asset('storage/' . $product->product_image) }}" width="100"
                                                    height="100" alt="Product Image">
                                            @else
                                                No image
                                            @endif
                                        </td> --}}
                                        <td>
                                            <a href="{{ route('product.edit', $product->id) }}"
                                                class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form action="{{ route('product.destroy', $product->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure to delete this product?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- testtimonial table --}}
            <div class="card col-9">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/admin/add-testimonial') }}">
                            <button type="button" class="btn btn-info">Add Testimonial</button>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Review Overview</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Client Name</th>
                                    <th scope="col">Client Designation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($testimonials as $index => $testimonial)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $testimonial->review_overview }}</td>
                                        <td>{{ $testimonial->rating }}</td>
                                        <td>{{ $testimonial->client_name }}</td>
                                        <td>{{ $testimonial->client_designation }}</td>
                                        <td>
                                            <a href="{{ route('testimonial.edit', $testimonial->id) }}"
                                                class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('testimonial.delete', $testimonial->id) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure to delete this product?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            {{-- blog table --}}

            <div class="card col-9">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/admin/add-blog') }}">
                            <button type="button" class="btn btn-info">Add Blog Post</button>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">News Heading</th>
                                    <th scope="col">Authur</th>
                                    <th scope="col">Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($blogs as $index => $blog)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $blog->news_heading }}</td>
                                        <td>
                                            {{ $blog->authur }}
                                        </td>
                                        <td>
                                            {{ $blog->date }}
                                        </td>
                                        <td>
                                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form action="{{ route('blog.delete', $blog->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure to delete this blog?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- career table --}}
            <div class="card col-9">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/admin/add-blog') }}">
                            <button type="button" class="btn btn-info">Add Blog Post</button>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">career_name</th>
                                    <th scope="col">career_overview</th>
                                    <th scope="col">career_description</th>
                                    <th scope="col">working_type</th>
                                    <th scope="col">location</th>
                                    <th scope="col">salary</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($careers as $index => $career)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $career->career_name }}</td>
                                        <td>{{ $career->career_overview }}</td>
                                        <td>{{ $career->career_description }}</td>
                                        <td>{{ $career->working_type }}</td>
                                        <td>{{ $career->location }}</td>
                                        <td>{{ $career->salary }}</td>
                                        <td>
                                            <a href="{{ route('career.edit', $career->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form action="{{ route('career.delete', $career->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure to delete this blog?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            {{-- service-icon-table--}}
            <div class="card col-9">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/admin/add-service-icon') }}">
                            <button type="button" class="btn btn-info">Add Service Icon</button>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Servie Icon Tilte</th>
                                    <th scope="col">Service Icon Short Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($servicesIcons as $index => $servicesIcon)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{$servicesIcon-> service_icon_title}}</td>
                                        <td>{{$servicesIcon-> service_icon_short_description}}</td>
                                       
                                        
                                        <td>
                                            <a href="{{ route('serviceIcon.edit', $servicesIcon->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form action="{{ route('serviceIcon.delete', $servicesIcon->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure to delete this ServiceIcon?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            {{-- product-icon-table--}}
            <div class="card col-9">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/admin/add-product-icon') }}">
                            <button type="button" class="btn btn-info">Add Product Icon</button>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Icon Tilte</th>
                                    <th scope="col">Product Icon Short Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @forelse ($productIcons as $index => $productIcon)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{$productIcon-> product_icon_title}}</td>
                                        <td>{{$productIcon-> product_icon_short_description}}</td>
                                       
                                        
                                        <td>
                                            <a href="{{ route('productIcon.edit', $productIcon->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form action="{{ route('productIcon.delete', $productIcon->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure to delete this Product Icon?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
