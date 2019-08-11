<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Vivero Gutierrez</title>
 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/footer-distributed.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
 		<br>
        <br>
        <center><img src="img/logo.png"></center>
        <br>
        <br>
        <div ></div>	
        <br>
        <br>
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">INICIO<span class="sr-only">(current)</span></a>
              </li>

              
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/contactenos')}}">CONTACTO</a>
              </li>
            </ul>
          </div>
        </nav>
<br>
<br>
	<div class="wrap">
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todas las Plantas</a>
				<a href="#" class="category_item" category="arboles">Arboles</a>
				<a href="#" class="category_item" category="arbustos">Arbustos</a>
				<a href="#" class="category_item" category="trepadora">Trepadora</a>
				<a href="#" class="category_item" category="plantas">Plantas</a>
			</div>

			
			
			<section class="products-list">
<!-- Arbustos -->
				<div class="product-item" category="arbustos">
					<img src="img/arbustos/crataegus_monogyna2,60.jpg" alt="" >
					<a href="{{url('arbust1')}}">Crataegus_Monogyna</a>
				</div>
				<div class="product-item" category="arbustos">
					<img src="img/arbustos/lagerstroemia_indica_8,60.jpg" alt="" >
					<a href="{{url('/arbust2')}}">Lagerstroemia</a>
				</div>
				<div class="product-item" category="arbustos">
					<img src="img/arbustos/ligustrum_ovalifolium0,35.jpg" alt="" >
					<a href="{{url('/arbust3')}}">Ligustrum</a>
				</div>
				<div class="product-item" category="arbustos">
					<img src="img/arbustos/magnolia_soulangeana21,75.jpg" alt="" >
					<a href="{{url('/arbust4')}}">Magnolia</a>
				</div>
				<div class="product-item" category="arbustos">
					<img src="img/arbustos/pachysandra_terminalis1,00.jpg" alt="" >
					<a href="{{url('/arbust5')}}">Pachysandra</a>
				</div>
				<div class="product-item" category="arbustos">
					<img src="img/arbustos/philadelphus_virginalis2,25.jpg" alt="" >
					<a href="{{url('/arbust6')}}">Philadelphus</a>
				</div>
				<div class="product-item" category="arbustos">
					<img src="img/arbustos/phormiun_tenax_18,85.jpg" alt="" >
					<a href="{{url('/arbust7')}}">Phormiun</a>
				</div>
				<div class="product-item" category="arbustos">
					<img src="img/arbustos/pieris_japonica7,10.jpg" alt="" >
					<a href="{{url('/arbust8')}}">Pieris_Japonica</a>
				</div>

<!-- Trepadora -->
		
				<div class="product-item" category="trepadora">
					<img src="img/trepadora/campsis_radicans_5,93.jpg" alt="" >
					<a href="{{url('/trepar1')}}">Campsis_Radicans</a>
				</div>
				<div class="product-item" category="trepadora">
					<img src="img/trepadora/jasminum_nudiflorum_amarillo_jazm_n_4,10.jpg" alt="" >
					<a href="{{url('/trepar2')}}">Jasminum</a>
				</div>

				<div class="product-item" category="trepadora">
					<img src="img/trepadora/lonicera_nitida_madreselva_1,35.jpg" alt="" >
					<a href="{{url('/trepar3')}}">Lonicera</a>
				</div>
				<div class="product-item" category="trepadora">
					<img src="img/trepadora/parthenocissus_quinquefolia_parra_virgen_4,50.jpg" alt="" >
				<a href="{{url('/trepar4')}}">Parthenocissus</a>
				</div>
				<div class="product-item" category="trepadora">
					<img src="img/trepadora/rhynchospermum_jasminoides_jazm_n_5,25.jpg" alt="" >
					<a href="{{url('/trepar5')}}">jasminoides</a>
				</div>
				<div class="product-item" category="trepadora">
					<img src="img/trepadora/solamun_jasminoides_4,50.jpg" alt="" >
					<a href="{{url('/trepar6')}}">Solamun</a>
				</div>
				<div class="product-item" category="trepadora">
					<img src="img/trepadora/wisteria_sinensis_glicinia_6,75.jpg" alt="" >
					<a href="{{url('/trepar7')}}">Wisteria</a>
				</div>
				<div class="product-item" category="trepadora">
					<img src="img/trepadora/passiflora_pasionar_3,00.jpg" alt="" >
					<a href="{{url('/trepar8')}}">Passiflora</a>
				</div>
<!-- Arboles -->
				<div class="product-item" category="arboles">
					<img src="img/vivero/acer_platanoides_arce_real__314,25.jpg" alt="" >
					<a href="{{url('/arbol1')}}">Acer_Platanoides</a>
				</div>
				<div class="product-item" category="arboles">
					<img src="img/vivero/aesculus_hippocastanum_casta_o_de_indias__236,00.jpg" alt="" >
					<a href="{{url('/arbol2')}}">Aesculus_Hippocastanum</a>
				</div>
				<div class="product-item" category="arboles">
					<img src="img/vivero/acacia_dealbata_1_167,50.jpg" alt="" >
					<a href="{{url('/arbol3')}}">Acacia_Dealbata</a>
				</div>	
				<div class="product-item" category="arboles">
					<img src="img/vivero/ailanthus_altissima_1_218,00.jpg" alt="" >
					<a href="{{url('/arbol4')}}">Ailanthus_Altissima</a>
				</div>
				<div class="product-item" category="arboles">
					<img src="img/vivero/albizia_julibrissin_acacia_de_constantinopla__239,00.jpg" alt="" >
					<a href="{{url('/arbol5')}}">Albizia_Julibrissim</a>
				</div>
				<div class="product-item" category="arboles">
					<img src="img/vivero/alnus_glutinosa_aliso__212,00.jpg" alt="" >
					<a href="{{url('/arbol6')}}">Alnus_glutinosa</a>
				</div>
				<div class="product-item" category="arboles">
					<img src="img/vivero/betula_alba_verrucosa_abedul__24,00.jpg" alt="" >
					<a href="{{url('/arbol7')}}">Betula_alba</a>
				</div>
				<div class="product-item" category="arboles">
					<img src="img/vivero/carpinus_betelus_carpe__1_27,00.jpg" alt="" >
					<a href="{{url('/arbol8')}}">Carpinus</a>
				</div>
<!-- Plantas-->
				<div class="product-item" category="plantas">
					<img src="img/plantas/lavandula1,50.jpg" alt="" >
					<a href="{{url('/plants1')}}">Lavandula</a>
				</div>

				<div class="product-item" category="plantas">
					<img src="img/plantas/salvia-1,50.jpg" alt="" >
					<a href="{{url('/plants2')}}">Salvia</a>
				</div>

				<div class="product-item" category="plantas">
					<img src="img/plantas/santolina-1,50.jpg" alt="" >
					<a href="{{url('/plants3')}}">Santolina</a>
				</div>

				<div class="product-item" category="plantas">
					<img src="img/plantas/tomillo-1,50.jpg" alt="" >
					<a href="{{url('/plants4')}}">Tomillo</a>
				</div>


			</section>
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
          <a href="{{ url('/') }}">Inicio</a>
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

</body>
</html>