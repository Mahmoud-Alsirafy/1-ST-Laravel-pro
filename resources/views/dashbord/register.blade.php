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
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="POST" action="{{ route('register.store') }}" class="form-register">
            @csrf
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" value="{{ old('first_name')}}" name="first_name" placeholder="First name" autofocus="autofocus">
                    @error('first_name')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                        </div>
                    @enderror
                  <label for="firstName">First name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control"value="{{ old('last_name')}}" name="last_name" placeholder="Last name">
                    @error('last_name')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                        </div>
                    @enderror
                  <label for="lastName">Last name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control"value="{{ old('email')}}" name="email" placeholder="Email address">
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                        </div>
                    @enderror
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
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
              <div class="col-md-6">
                <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control"  name="password_confirmation" placeholder="Confirm password">
                    @error('password_confirmation')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                        </div>
                    @enderror
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Register</button>
        </form>

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
