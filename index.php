<!DOCTYPE html>

<html lang="en">
<head>
    
  <title>AIKTC - Bonhomie</title>
  <?php
  include('style/style.php');
  include('links/links.php');
  ?>

</head>
<body>
    <header class="header">
        <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand animate__animated animate__heartBeat animate__infinite font-weight-bold " href="..">BONHOMIE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-1">
              <a class="nav-link active" href="..">Home</a>
            </li>
            <li class="nav-item ml-1">
              <a class="nav-link" href="#events">Events</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Rules
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              
                <a class="dropdown-item" href="#">Sports</a>
                <a class="dropdown-item" href="#">Technical</a>
                <a class="dropdown-item" href="#">Cultural</a>
                <a class="dropdown-item" href="#">Co-ordinators</a>
               
              </li>
            <li class="nav-item ml-1">
              <a class="nav-link" href="technical/">About us</a>
            </li>
            <li class="nav-item ml-1">
              <a class="nav-link" href="#Logout">Logout</a>
            </li>
          </ul>
        </div>
        </div>
      </nav>
      <!-- NAVBAR  -->
      <!-- CAROUSEL  -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="" src="img1.jpg" alt="Los Angeles" width="100%" height="600">
          </div>
          <div class="carousel-item">
            <img class="" src="img2.jpg" alt="Los Angeles" width="100%" height="600">
          </div>
          <div class="carousel-item">
            <img class="" src="img3.jpg" alt="Los Angeles" width="100%" height="600">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- CARROUSEL -->
    </header>

    <section id="events" class="events">
        <div class="container">
            <h1 class="text-center text-light font-weight-bold my-5">EVENTS</h1>
            <div class="row">
                <div class="col my-5 text-center">
                    <div class="card text-dark" id="card1" style="width: 18rem;">
                        <a href="sports/">
                          <div class="cardheader">
                            <img class="img-fluid" src="img/sports.jpg" alt="">
                              <div class="caption">
                                  <h2 class="text-center font-weight-bold text-white">Sports</h2>
                              </div>
                          </div>
                        </a>
                        <div class="card-body">
                            <h3 class="text-center font-weight-bold my-2">Sports</h3>
                            <p class="text-center">Bonhomie has a quite good sports event every year.</p>
                        </div>
                     </div>
                </div>
                <div class="col my-5 text-center">
                  <div class="card text-dark" id="card2" style="width: 18rem;">
                    <a href="technical/">
                      <div class="cardheader">
                        <img class="img-fluid" src="img/technical.jpg" alt="">
                          <div class="caption">
                              <h2 class="text-center font-weight-bold text-white">Technical</h2>
                          </div>
                      </div>
                    </a>
                    <div class="card-body">
                        <h3 class="text-center font-weight-bold my-2">Technical</h3>
                        <p class="text-center">Bonhomie has a quite good Technical event every year.</p>
                    </div>
                 </div>
                </div>
                <div class="col my-5 text-center">
                  <div class="card text-dark" id="card3" style="width: 18rem;">
                    <a href="technical/">
                      <div class="cardheader">
                        <img class="img-fluid" src="img/cultural.jpg" alt="">
                          <div class="caption">
                              <h2 class="text-center font-weight-bold text-white">Cultural</h2>
                          </div>
                      </div>
                    </a>
                    <div class="card-body">
                        <h3 class="text-center font-weight-bold my-2">Cultural</h3>
                        <p class="text-center">Bonhomie has a quite good Cultural event every year.</p>
                    </div>
                 </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5" id="reg" style="width:100%;background: #95a5a6;">
      <div class="container home_login">
          <div class="row">
              <div class="col-6">
                  <div class="login_p my-auto">
                      <h3 class="font-weight-bold my-auto">What are you wating for? Go ahead and start registering for events!</h3>
                  </div>
              </div>
              <div class="col-6">
                  <div class="fa_user text-center">
                     <img class="my-3" src="img/event.png" alt="" style="width:100px;height:100px;">
                  </div>
                  <div class="login_btn mt-2 mb-3">
                          <a class="" href="login/">Login</a>
                          <a class="" href="register/">Register</a>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="my-5" id="contact" style="background: #26de81;">
    <div class="container">
      <h1 class="text-center text-dark font-weight-bold my-5 p-4">Have a query? Contact Us.</h1>
     <div class="my-5 w-50 mx-auto">
      <form>
        <div class="form-group">
          <label class="font-weight-bold" for="name">Name</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
          <label class="font-weight-bold" for="email">Email address</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label class="font-weight-bold" for="query">Query</label>
          <textarea class="form-control" id="query" rows="3"></textarea>
        </div>
      </form>
      <button type="submit" class=" mb-5 btn btn-primary">Submit</button>
     </div>
    </div>
  </section>
 

    <!-- Footer -->
    <section class=" mt-5" id="footer">
      <div class="container">
          <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4 mb-4">
              <h3 class="font-weight-bold my-3 text-light">Quick links</h3>
              <ul class="list-unstyled quick-links">
                <li><a href=""><i class="fa fa-angle-double-right"></i>Home</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Events</a></li>
                <li><a href="../login/"><i class="fa fa-angle-double-right"></i>Login</a></li>
                <li><a href="../register/"><i class="fa fa-angle-double-right"></i>Register</a></li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 mb-4">
              <h3 class="font-weight-bold my-3 text-light">Quick links</h3>
              <ul class="list-unstyled quick-links">
                <li><a href=""><i class="fa fa-angle-double-right"></i>Home</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Events</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Login</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Register</a></li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 mb-4">
              <h3 class="font-weight-bold my-3 text-light">Quick links</h3>
              <ul class="list-unstyled quick-links">
                <li><a href=""><i class="fa fa-angle-double-right"></i>Home</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Events</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Login</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Register</a></li>
              </ul>
            </div>
          </div>
                <h6 class="text-center text-grey" style="color: #CFCFCF;">Managed By : Sakib Arkate | Siddiqui Affan | Siddiqui Sufiyan</h6>

      </div>
    </section>
    <!-- Footer -->
    
      <script>
          

          $(document).ready(function(){
         $(window).scroll(function(){
            var positiontop = $(document).scrollTop();
            console.log(positiontop);
          if((positiontop>240) && (positiontop < 300)){
            $('#events').addClass('animate__animated animate__fadeInUp ');
            document.getElementById('events').style.visibility = "visible";
          }

            if((positiontop > 240) && (positiontop < 300)){
                $('#card1').addClass('animate__animated animate__fadeInLeft ');
                $('#card2').addClass('animate__animated animate__fadeIn');
                $('#card3').addClass('animate__animated animate__fadeInRight ');
            }


            if((positiontop > 615) && (positiontop < 645)){
              $('#reg').addClass('animate__animated animate__fadeInUp ');
              // document.getElementById('reg').style.visibility = "visible";
            }

            if((positiontop > 840) && (positiontop < 880)){
              $('#contact').addClass('animate__animated animate__fadeInUp ');
              document.getElementById('reg').style.visibility = "visible";
            }

            if((positiontop > 1440) && (positiontop < 1480)){
            $('#footer').addClass('animate__animated animate__fadeInUp ');
            $('#info').addClass('animate__animated animate__fadeInUp ');
            }
            
        });
        });
           
      </script>

</body>
</html>