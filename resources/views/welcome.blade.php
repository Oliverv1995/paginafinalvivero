<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vivero Gutierrez</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/footer-distributed.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    </head>
    <body>
        <br>
        <br>
        <center><img src="img/logo.png"></center>
        <br>
        <br>
        <div ></div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="">INICIO<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/plantas')}}">PRODUCTOS</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/contactenos')}}">CONTACTO</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="BUSCAR EN TODA LA TIEND" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </div>
        </nav>
<br>
<br>
<div class="container">
      <div class="row">
        <div class="col-12">
           <div class="bd-example">
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/s18-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/s18-2.jpg" class="d-block w-100" alt="...">
                  
                </div>
              </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
                </div>
                      <br>
                      <br>
                      <div class="container">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                              <img src="img/queregalar.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">FLORES</h5>
                                <p class="card-text">PARA REGALAR</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4" >
                            <div class="card" style="width: 18rem;">
                              <img src="img/promo2.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">ENCUENTRANOS</h5>
                                <p class="card-text">NUESTROS VIVEROS</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                              <img src="img/promo3a.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">PEDIDOS</h5>
                                <p class="card-text">AL POR MAYOR</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>




                  <footer class="footer-distributed">

      <div class="footer-right">

        <a href="https://www.facebook.com/login/?cuid=AYiP45RyKpv_25cPE35b-RoSsbKDrSZzwYvcd9gopa1NezvGfpjF_lik5J-9Un_hkoBj1eJM1XCRTNWgNy660O_Aqoz3eeMTYORTHIChgN1ebWQhDCAPoTTb9Z5wzfx0ZPoURxVfDVKDMZfR6XDSu4gEQdURaxbQB44gSBfOdxkDmw&next"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>

      </div>

      <div class="footer-left">

        <p class="footer-links">
          <a href="">Inicio</a>
          ·
          <a href="#">Blog</a>
          ·
          <a href="#">Acerca de</a>
          ·
          <a href="{{url('/contactenos')}}">Contacto</a>
        </p>

        <p>Septimo semestre &copy; 2019</p>
      </div>

    </footer>   


                    </div>
                  </div> 

                 
            </body>
        </html>
