<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
  <div class="container-fluid d-flex justify-content-center align-items-center vh-100 body-admin-login" style="background: url('{{ asset('images/login-back-img.jpeg') }}') no-repeat center center; background-size: cover; height: 100vh;">
    <div class="px-2 row justify-content-center w-100">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
        <div class="p-4 shadow-lg card" style="border-radius: 10px;">
          <div class="text-center">
            <img src="{{ asset('images/Logomedihouse.png') }}" alt="Logo" style="width: 100px;">
            <h3 class="mt-3 mb-4 main-head">CREATE ADMIN ACCOUNT</h3>
          </div>
          @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
          @elseif(session('fail'))
            <div class="alert alert-danger">
                {{ session('fail') }}
            </div>
          @endif
          <form method="POST" action="{{ url('/admin/signup') }}">
          @csrf
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text back-clr-input">
                  <img src="{{ asset('images/emailll.png') }}" alt="Email Icon" style="width: 20px;" class="input-icon">
                </span>
                <input type="email" id="email" name="email" class="form-control input-height login-palceholder" placeholder="admin@medihouse.lk" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text back-clr-input">
                  <img src="{{ asset('images/user.png') }}" alt="User Icon" style="width: 20px;" class="input-icon">
                </span>
                <input type="text" id="name" name="name" class="form-control input-height login-palceholder" placeholder="Full Name" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="mb-3">
              <div class="input-group">
                <span class="input-group-text back-clr-input">
                  <img src="{{ asset('images/KeySecurity.png') }}" alt="Password Icon" style="width: 25px;" class="input-icon">
                </span>
                <input type="password" name="password" id="password" class="form-control input-height login-palceholder" placeholder="Password" required>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="mb-3">
              <div class="input-group">
                <span class="input-group-text back-clr-input">
                  <img src="{{ asset('images/KeySecurity.png') }}" alt="Confirm Password Icon" style="width: 25px;" class="input-icon">
                </span>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-height login-palceholder" placeholder="Confirm Password" required>
              </div>
            </div>
            
            <button type="submit" class="btn btn-enter w-100" style="margin-bottom: 40px;">SIGN UP</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
