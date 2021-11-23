<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo asset('css/main/home.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('css/main/login.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('css/main/footer.css')?>">
        <link rel="stylesheet" href="<?php echo asset('css/font-awesome.min.css')?>">
    </head>

    <body>
      @if(session('result'))
          <script>
              window.alert("Please Complete Your Data For Making Your Feedback");
          </script>
      @endif
<!-- Navbar Section -->
<div class="cover1">
  <div class="cover2">
    <div class="navbar-div">
      <div class="container-fluid">
        <div class="row">
          <div class="logo col-lg-3 col-md-12  col-sm-12 text-center">
            <h1>Hitachi</h1>
          </div>
          <div class="links col-lg-7 col-md-12  col-sm-12 text-center">
              <a href="#" class="active">Home</a>
              <a href="/login">Login</a>
          </div>
          <div class="phone col-lg-2 col-md-12  col-sm-12 text-center">
              <p>01121238817</p>
          </div>
        </div>
      </div>
    </div>
      <div class="content text-center">
        <h1>Hitachi</h1><br>
          <p>For Elevators <span>&&</span> Escalators</p>
      </div>
  </div>
</div>
<!-- About Info -->
<div class="about-div">
    <br><br><br><br><br><br><br><br>
    <div class="content">
        <div class="container">
        <div class="row">
            <div class="say-hello col-lg-4 col-md-12 col-sm-12 ">
                <h1>Say Feedback</h1>
                <form method="post" action="/feedback">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="fullname">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="email">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message" name="msg"></textarea>
                  </div>
                  <div class="form-group">
                    <button>Send</button>
                  </div>
                </form>

            </div>
            <div class="contact-info col-lg-4 col-md-12 col-sm-12 text-center">
              <h1 class="text-center">Contact Info</h1>
              <p> <i class="fa fa-google-plus-official"> mostafaGamal@gmail.com </i> </p>
              <p> <i class="fa fa-phone-square"> 01091395638 </i> </p>
              <p> <i class="fa fa-map-marker"> 60 nageeb mawaad , Elmataria , Cairo </i> </p>
              <div class="cont text-center">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-google" aria-hidden="true"></i>
              </div>

            </div>
            <div class="about col-lg-4 col-md-12 col-sm-12 ">
              <h1 class="text-center">About</h1>
              <p>
                It is a long established fact that a reader will be distracted
                 by the readable content of a page when looking at its layout.
                 The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                  as opposed to using 'Content here, content here', making it look like readable English.
                   Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                   and a search for 'lorem ipsum' will uncover many web sites
              </p>
            </div>
        </div>
    </div>
    </div>
</div>


@include('main.footer')
