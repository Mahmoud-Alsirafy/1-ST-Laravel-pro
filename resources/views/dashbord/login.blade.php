<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Register</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('dash') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{ asset('dash') }}/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

    <div class="container">
        <div class="card card-login mx-auto mt-5">
          <div class="card-header">Login</div>
          <div class="card-body">
            <form method="post" action="{{ route('login.store') }}">
                @csrf
              <div class="form-group">
                <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                  <label for="inputEmail">Email address</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password">
                    @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                        </div>
                    @enderror
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me">
                    Remember Password
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-block" type="submit">Login</button>
              {{-- <a class="btn btn-primary btn-block" href="index.html">Login</a> --}}
            </form>
            <div class="text-center">
              <a class="d-block small mt-3" href="register.html">Register an Account</a>
              <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div>
          </div>
        </div>
      </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('dash') }}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('dash') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('dash') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
