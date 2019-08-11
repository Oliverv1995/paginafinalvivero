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
                <a class="nav-link" href="{{ url('/') }}">INICIO<span class="sr-only">(current)</span></a>
              </li>

            </ul>
          </div>
        </nav>
<br>
<br>
<div class="container" >
      <div class="row">
        <div class="col-12">        
          
  <div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">Contáctenos</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form role="form" method="post" action="{{url('comentario')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Correo electrónico</label>
                                    <input type="text" class="form-control" name="correo" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="text" class="form-control" name="telefono" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Decripción</label>
                                    <input type="text" class="form-control" style="WIDTH: 1080px; HEIGHT: 98px" 
                                        size=32 name=text1 name="descripcion" placeholder="">
                                </div>
                                <div style="text-align: right;width:1080px">
                                <button type="submit" class="btn btn-success">Enviar</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
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
            </body>
        </html>
