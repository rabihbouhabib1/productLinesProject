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
      @include('navbar') 

      <!-- Title -->
      <div class="row">
        <div class="col col-4">
            <br>
          <h2>Application Title</h2>
        </div>
      </div>
      <br>
      <!-- Home Image -->
      <div class="row">
        <div class="col text-center">
          <img src="./assets/online booking.png" class="img-fluid" alt="index pic">
        </div>
      </div>
      <br>
      <!-- Functionalities -->
      <!-- Book an appointment -->
      <div class="row">
      <div class="col text-center">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Book an appointment
          </button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content custom-modal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Booking form</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Reservation Form -->
                  
                    <div class="row">
                      <div class="col tex-center">
                        <img src="/assets/calendar.png" class="img" alt="">
                      </div>
                    </div>
                    <br>             
                    <div class="row">
                      <div class="col col-md-3">
                        <label for="">Service selection</label>
                      </div>
                      <div class="col col-md-6">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Available service</option>
                          <option value="1">S1</option>
                          <option value="2">S2</option>
                          <option value="3">S3</option>
                        </select>
                      </div>
                    </div>
                    <br>          
                    <div class="row">
                      <div class="col col-md-3">
                        <label class="form-label" for="date">Date:</label>
                      </div>
                      <div class="col col-md-6">
                        <input class="form-control" type="date" name="date" id="" require>                   
                      </div>
                      <div class="col col-md-3">
                        <button class="btn btn-primary" id="availabilityBtn">Check</button>
                      </div>
                    </div>
                    <br>
                    <br>
                    <div class="row" id="availabilityButtons" style="display: none;">
                      <div class="col col-md-4">
                        <button class="btn btn-success">10:00</button>
                      </div>
                      <div class="col col-md-4">
                        <button class="btn btn-success">14:45</button>
                      </div>
                      <div class="col col-md-4">
                        <button class="btn btn-success">16:15</button>
                      </div>
                    </div>
                    <br>   
                    <hr>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <!-- Write a review -->
      <div class="row">
      <div class="col text-center">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
          Write a review
          </button>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content custom-modal">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Review form</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Review Form -->
              <form action="/review" method="post">
                <div class="row">
                  <div class="col col-md-3">
                    <label for="">Reservation</label>
                  </div>
                  <div class="col col-md-6">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>No previous reservations</option>
                    </select>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col col-md-3">
                    <label class="form-label" for="title">Review title:</label>
                  </div>
                  <div class="col col-md-6">
                    <input class="form-control" type="text" name="title" id="title" placeholder="Title" require>                      
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col col-md-3">
                    <label class="form-label" for="mail">Message:</label>
                  </div>
                  <div class="col col-md">
                    <textarea id="review" name="review" rows="4" cols="30" class="form-control" placeholder="Your message...">
                    </textarea>                      
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
          $('#availabilityBtn').click(function() {
            $('#availabilityButtons').show();
          });
        });
    </script>
  </body>
</html>
