<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap5/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style.css')}}" rel="stylesheet">
    <!-- Boostrap Popper -->
    <script src="{{asset('bootstrap5/js/bootstrap.bundle.min.js')}}"></script>
  </head>
  <body class="custom-bg">
    <div class="container-fluid">
      <!-- Login Form Card -->
      <div class="row center-screen">
        <div class="col col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Login</h5>
              <form>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password">
                </div>
                <a href="/index" class="btn btn-primary">Login</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
