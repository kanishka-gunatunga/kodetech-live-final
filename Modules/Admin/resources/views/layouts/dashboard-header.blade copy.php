<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Dashboard</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('public/css/styles.css') }}">
</head>

<body>


    <!-- Header -->
    <div class="header">
        <div class="logo">
            <img  src="{{ asset('public/images/Logomedihouse.png') }}" alt="Logo" style="width: 100px; height: auto;">
        </div>

        <div class="gap-2 d-flex align-items-center gap-md-4">
            <img  src="{{ asset('public/images/userimg.png') }}" alt="User Image"
                style="width: 50px; height: auto; border-radius: 100%;">
            <div>
                <span class="d-block" style="font-weight: 600;">Michael Harris</span>
                <small class="text-muted">Admin</small>
            </div>
            <a href="{{ url('admin/logout') }}" class="btn logout-btn">
    <img src="{{ asset('public/images/logoutarrow.png') }}" alt="Download Icon" class="logout-arrow-img" />
    <span class="menu-text">Log out</span>
</a>
        </div>

    </div>
    

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> -->
        
</body>

</html>