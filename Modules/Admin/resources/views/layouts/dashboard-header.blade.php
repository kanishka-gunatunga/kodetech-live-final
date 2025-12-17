<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodetech | Admin</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">
   --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="main-container ">
        <!-- Header -->
        <div class="header d-flex justify-content-between my-3 ms-3">
            <div class="logo ">
                <img src="{{ asset('assets/img/kodetech/kodetech-logo.png') }}" alt="Logo"
                    style="width: 100px; height: auto;" class="header-logo">
            </div>

            <div class="gap-2 d-flex align-items-center gap-md-4 me-md-3">
                <div class="gap-2 d-flex align-items-center gap-md-2 ">
                    <img src="{{ asset('assets/img/kodetech/Ellipse 4.png') }}" alt="User Image"
                        style="width: 50px; height: auto; border-radius: 100%;">
                    <div style="line-height: 20px;">
                        <span class="d-block" style="font-weight: 600; font-family: Poppins, sans-serif;">Ethan
                            Carter</span>
                        <small class="text-muted" style="font-family: Poppins, sans-serif;">Admin</small>
                    </div>
                </div>

                <a href="{{ url('admin/logout') }}" class="btn logout-btn">
                    {{-- <img src="{{ asset('images/logoutarrow.png') }}" alt="Download Icon" class="logout-arrow-img" /> --}}
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Log out
                </a>
            </div>
        </div>
        {{-- sidebar --}}
        <div class="sidebar d-flex">
            <!-- Sidebar -->
            <div class="pe-5 bg-light vh-100 p-3" style="width: 250px;">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('admin/dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/add-product') }}">Add Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/add-service') }}">Add Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/add-project') }}">Add Project</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/add-client') }}">Add Client</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/add-testimonial') }}">Add Testimonial</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/add-blog') }}">Add Blog Post</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('career.index') }}">Add Career</a>
                    </li>





                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Add Icons
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('serviceIcon.index') }}">Add Service Icon</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('productIcon.index') }}">Add Product Icon</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>

            <div class="w-100">
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>





</body>

</html>
