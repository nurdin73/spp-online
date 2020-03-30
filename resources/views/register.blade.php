@include('templates.header')
<body>
    <div id="app">
      <section class="section">
        <div class="container mt-5">
          <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

            <div class="login-brand text-primary">
                <i class="fas fa-fw fa-money-check-alt" style="font-size:50px;"></i>
            </div>
            @if (Session::get('message'))
                @if (Session::get('message') === 'success')
                    <div class="alert alert-success">
                        Register user success
                    </div>
                @else
                    <div class="alert alert-danger">
                        register user failed
                    </div>
                @endif
            @endif
              <div class="card card-primary">
                <div class="card-header"><h4>Register</h4></div>

                <div class="card-body">
                  <form class="register-user" method="POST" action="{{ url('auth/register-user') }}">
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="frist_name">First Name</label>
                        <input id="frist_name" type="text" class="form-control" name="frist_name" autofocus>
                      </div>
                      <div class="form-group col-6">
                        <label for="last_name">Last Name</label>
                        <input id="last_name" type="text" class="form-control" name="last_name">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      <input id="email" type="email" class="form-control" name="email">
                      <div class="invalid-feedback">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-6">
                        <label for="password" class="d-block">Password</label>
                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                        <div id="pwindicator" class="pwindicator">
                          <div class="bar"></div>
                          <div class="label"></div>
                        </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="password2" class="d-block">Password Confirmation</label>
                        <input id="password2" type="password" class="form-control" name="password-confirm">
                      </div>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Register
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="text-muted text-center">
                You have an account? <a href="{{ url('auth/login') }}">Login</a>
              </div>
              <div class="simple-footer">
                Copyright &copy; SPP Online <?= date('Y'); ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/modules/popper.js') }}"></script>
  <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  {{-- <script>
      $(document).ready(function () {
          $('.register-user').on('submit', function (e) {
              e.preventDefault()
              var formData = $('.register-user').serialize()
              $.ajax({
                  type: "post",
                  url: "{{ url('auth/register-user') }}",
                  data: formData,
                  success: function (response) {
                      if(response) {

                      }
                  }
              });
          })
      });
  </script> --}}
</body>
</html>
