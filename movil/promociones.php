<?php
session_start();
$idclientes = $_SESSION["idclientes"];
$nombrecliente = $_SESSION["cliente"];
$correocliente = $_SESSION["correo"];
/*movil*/

require_once '../conex.php';
if (empty ($strTitle)) {$strTitle = $arreglosSeo["promociones"]["tituloseo"];}
if (empty ($strCaption)) {$strCaption = $arreglosSeo["promociones"]["metadescripcion"]; }
if (empty ($canonical)) {$canonical = $arreglosSeo["promociones"]["canomovil"];}
if (empty ($canopc)) {$canopc = $arreglosSeo["promociones"]["canopc"]; }
if (empty ($desc1)) {$desc1 = $arreglosSeo["promociones"]["desc1"];}
if (empty ($video1)) {$video1 = $arreglosSeo["promociones"]["video1"];}
if (empty ($imagen1)) {$imagen1 = $arreglosSeo["promociones"]["imagen1"];}
if (empty ($desc2)) {$desc2 = $arreglosSeo["promociones"]["desc2"];}
if (empty ($precio2)) {$precio2 = $arreglosSeo["promociones"]["precio2"];}
if (empty ($video2)) {$video2 = $arreglosSeo["promociones"]["video2"];}
if (empty ($imagen2)) {$imagen2 = $arreglosSeo["promociones"]["imagen2"];}
if (empty ($youtube)) {$youtube = $arreglosSeo["promociones"]["youtube"];}
?>


<!DOCTYPE html>
<html class="no-js" lang="es-ES">
<!--<![endif]-->

<?php include("head.php"); ?>

<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>


<?php include("cabecera.html"); ?>
<?php
if($idclientes == ""){?>
	<section class="ds intro_section">
				<div class="flexslider">
					<ul class="slides">
						<li data-duration="1500">
							<img src="/images/slider01.png" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h2 id="h21" class="big margin_0">Cliente debe estar registrado para ver el contenido</h2>
													<!--<h2 id="h22" class="muellerhoff topmargin_5 bottommargin_50 highlight">by Julia Rey</h2>-->
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
					</ul>
				</div>
				<!-- eof flexslider -->
	</section>
<?php } else { ?>



<section class="ds intro_section" style="height: 250px">
				<div class="flexslider vertical-nav">
					<ul class="slides">
						<li data-duration="5000" style="background: url(/images/promociones201.jpg);background-position: 30% 0px;max-height: 250px; background-size: cover;">
							<div style="height: 100px"></div>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper" style="min-height: 200px">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h2 class="big margin_0">Bienvenido <?php echo $nombrecliente; ?></h2>
													<h2 class="muellerhoff topmargin_5 bottommargin_50 highlight"></h2>
												</div>
												<div class="intro-layer" data-animation="slideExpandUp">
													<p class="entry-excerpt bottommargin_30" style="text-align: center;">
														Bienvenido a Zona amiga, desde éste mismo momento puedes beneficiarte de ofertas, regalos y estar informado de nuestras  promociones especiales.<br>

		<a href="#videoStory" class="theme_button color1 topmargin_20" id="videoLink">Ver Video  <i class="fa fa-play-circle" aria-hidden="true">&nbsp;</i></a></p>


													<div id="videoStory" class="mfp-hide" style="max-width: 75%; margin: 0 auto;">
<iframe width="100%" src="https://www.youtube.com/embed/<?php echo $youtube; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<!--<video width="100%" controls controlsList="nodownload">
  <source src="https://www.youtube.com/embed/4Ai63AkrZDk" type="video/mp4">
</video>-->


</div>
<script type="text/javascript">
$('#videoLink')
.magnificPopup({
	  type:'inline',
	  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
  })
</script>


												<!--	<a href="about.html" class="theme_button color1 topmargin_20">About us</a> -->
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
					</ul>
				</div>
</section>

<section style="background-image:url(/images/fondo-chicas-o.jpg);background-position: 50% -30px;">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4">
							<div class="row">


								<div class="col-sm-12 bottommargin_40">
									<div class="side-item event-item content-padding with_background">
										<div class="row">
											<div class="col-md-4">
												<div class="item-media">
													<?php
												if ($video1==""){

													echo "<img src='$imagen1' alt='$strTitle'>";
												}else{

													echo "<video width='100%' controls controlsList='nodownload'>
													  <source src='$video1' type='video/mp4'>
													</video>";
												}
												?>
													<div class="media-links">
													<!--	<a class="abs-link" title="" href="event-single-left.html"></a>-->
													</div>
												</div>
											</div>
											<div class="col-md-8">
												<div class="item-content">
													<h3 class="entry-title topmargin_0">
														Reina de <span class="highlight">la semana</span><br>
														<?php print $arreglosSeo["promociones"]["titulo1"]; ?>
													</h3>
													<p style="color:#ffffff">
														<?php echo $desc1; ?>
												    </p>
													<h3 class="entry-title topmargin_0">
													<?php print $arreglosSeo["promociones"]["precio1"]; ?>
													</h3>
													<p style="text-align: center" class="entry-excerpt bottommargin_30">
													<a href="javascript:reservar_1()" class="theme_button color1 topmargin_20"><i class="rt-icon2-whatsapp"> </i>Reservar</a></p>
													<p class="item-meta grey">
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-12 bottommargin_40">
									<div class="side-item event-item content-padding with_background">
										<div class="row">
											<div class="col-md-4">
												<div class="item-media">
													<img src="/images/Carlalibro.jpg" alt="">
													<div class="media-links">
													<!--	<a class="abs-link" title="" href="event-single-left.html"></a>-->
													</div>
												</div>
											</div>
											<div class="col-md-8">
												<div class="item-content">
													<h3 class="entry-title topmargin_0">
														Te gustan las cosas con calma y disfrutar bien un encuentro?
													</h3>

													<h3 class="entry-title topmargin_0">
														Tu escort favorita y disfrutar dos horas con ella por solo 300€
													</h3>
													<p style="text-align: center" class="entry-excerpt bottommargin_30">
													<a href="javascript:reservar_2()" class="theme_button color1 topmargin_20"><i class="rt-icon2-whatsapp"> </i>Reservar</a></p>
													<p class="item-meta grey">
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-12 bottommargin_40">
									<div class="side-item event-item content-padding with_background">
										<div class="row">
											<div class="col-md-4">
												<div class="item-media">
													<img src="movil/images/champmovil.jpg" alt="">
													<div class="media-links">
													<!--	<a class="abs-link" title="" href="event-single-left.html"></a>-->
													</div>
												</div>
											</div>
											<div class="col-md-8">
												<div class="item-content">
													<h3 class="entry-title topmargin_0">
														Premio a tu fidelidad
													</h3>


													<p style="color: #ffffff">Tercera cita Botella de champán o 15 min de masaje sensitivo.</p>
													<p style="color: #ffffff" >Sexta cita 20€ de descuento</p>
													<p style="color: #ffffff">Novena cita Griego o Francés natural hasta el final o 20 min más de cita.</p>
													<p style="color: #ffffff">Doceava una hora con la señorita seleccionada por tan sólo 100€.</p>



													<p style="text-align: center" class="entry-excerpt bottommargin_30">
													<a href="javascript:reservar_3()" class="theme_button color1 topmargin_20"><i class="rt-icon2-whatsapp"> </i>Reservar</a></p>
													<p class="item-meta grey">
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-12 bottommargin_40">
									<div class="side-item event-item content-padding with_background">
										<div class="row">
											<div class="col-md-4">
												<div class="item-media">
													<img src="/images/background.jpg" alt="">
													<div class="media-links">
													<!--	<a class="abs-link" title="" href="event-single-left.html"></a>-->
													</div>
												</div>
											</div>
											<div class="col-md-8">
												<div class="item-content">
													<h3 class="entry-title topmargin_0">
														Para los más insaciables
													</h3>
													<p style="color: #ffffff">Prepara dos citas consecutivas  y disfruta de los encantos de dos escorts que saciarán todos tus deseos durante dos horas seguidas. Quedarás más que satisfecho.</p>
													<h3 class="entry-title topmargin_0">
														Dos citas por 300€
													</h3>
													<p style="text-align: center" class="entry-excerpt bottommargin_30">
													<a href="javascript:reservar_4()" class="theme_button color1 topmargin_20"><i class="rt-icon2-whatsapp"> </i>Reservar</a></p>
													<p class="item-meta grey">
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>


								<div class="col-sm-12 bottommargin_40">
									<div class="side-item event-item content-padding with_background">
										<div class="row">
											<div class="col-md-4">
												<div class="item-media">
													<img src="/images/Cita-Romantica1.jpg" alt="">
													<div class="media-links">
													<!--	<a class="abs-link" title="" href="event-single-left.html"></a>-->
													</div>
												</div>
											</div>
											<div class="col-md-8">
												<div class="item-content">
													<h3 class="entry-title topmargin_0">
														Para los más románticos
													</h3>
													<p style="color: #ffffff">Para los caballeros que buscan una cita relajada y crear esa complicidad especial que harán que tus dos horas de intimidad sean una velada única.</p>
													<h3 class="entry-title topmargin_0">
														2 horas de cena + 2 horas de intimidad + botella de champán  600€ por 4 horas
													</h3>
													<p style="text-align: center" class="entry-excerpt bottommargin_30">
													<a href="javascript:reservar_5()" class="theme_button color1 topmargin_20"><i class="rt-icon2-whatsapp"> </i>Reservar</a></p>
													<p class="item-meta grey">
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-12 bottommargin_40">
									<div class="side-item event-item content-padding with_background">
										<div class="row">
											<div class="col-md-8">
												<div class="item-content">
													<h3 class="entry-title topmargin_0">
														Promociones semanales
													</h3>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-12 bottommargin_40">
									<div class="side-item event-item content-padding with_background">
										<div class="row">
											<div class="col-md-4">
												<div class="item-media">
													<?php
													if ($arreglosSeo["promociones"]["video7"]==""){
														echo "<img src=".$arreglosSeo["promociones"]["imagen7"]." alt='$strTitle'>";
													}else{
														echo "<video width='100%' controls controlsList='nodownload'>
															<source src=".$arreglosSeo['promociones']['video7']." type='video/mp4'>
														</video>";
													}
												?>
													<div class="media-links">
													<!--	<a class="abs-link" title="" href="event-single-left.html"></a>-->
													</div>
												</div>
											</div>
											<div class="col-md-8">
												<div class="item-content">
													<h3 class="entry-title topmargin_0">
														<?php echo $arreglosSeo["promociones"]["titulo7"]; ?>
													</h3>
													<p style="color: #ffffff"><?php echo $arreglosSeo["promociones"]["desc7"]; ?></p>
													<h3 class="entry-title topmargin_0">
														<?php echo $arreglosSeo["promociones"]["precio7"];  ?>
													</h3>
													<p style="text-align: center" class="entry-excerpt bottommargin_30">
													<a href="javascript:reservar_12()" class="theme_button color1 topmargin_20"><i class="rt-icon2-whatsapp"> </i>Reservar</a></p>
													<p class="item-meta grey">
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
</section>
<!-------    VENTANA RESERVAR 1    --->
<div class="modal fade" id="reservar1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Reservar Promoción de la Semana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva1" name="formulario_reserva1">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff;margin-bottom:0px">
    	Reina de	<span class="highlight">La semana</span>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Reina de la semana" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
       <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 30px;text-align: center"><?php echo $desc1;?> 1 hora  150€</textarea>
			 <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>		
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">

			
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_1()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<style>
.blanco{
	color: #ffffff;font-size: 18px;line-height: 40px;text-align: center
}
</style>





<!-------    VENTANA RESERVAR 2    --->
<div class="modal fade" id="reservar2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Reservar Promoción de la Semana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva2" name="formulario_reserva2">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
    	Escort	<span class="highlight">Favorita</span>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Escort favorita 2 horas 300€" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
			 <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center">Escoje tu escort favorita por 300€</textarea>
			 <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha2" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora2" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario2" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>	
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_2()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="reservar3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Premio a la Fidelidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva3" name="formulario_reserva3">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
    	Premio	<span class="highlight">a tu fidelidad</span>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Premio a tu fidelidad" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
			 <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center">Te informaremos que premio te ganaste por tu fidelidad</textarea>
			 
			 <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha3" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora3" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario3" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>	
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_3()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="reservar4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Insaciables</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva4" name="formulario_reserva4">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
    	Promoción	<span class="highlight">para insaciables</span>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Promoción para insaciables" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
			 <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center">Prepara dos citas consecutivas. Dos escorts y dos horas continuas</textarea>
			 <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha4" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora4" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario4" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>	
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_4()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="reservar5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Insaciables</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva5" name="formulario_reserva5">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
    	Promoción	<span class="highlight">para Románticos</span>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Promoción para románticos" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
			 <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center">2 horas de Cena + 2 horas de intimidad + botella de champagne 600€. 4 horas</textarea>
			 <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha5" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora5" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario5" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>	
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_5()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="reservar6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Insaciables</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva6" name="formulario_reserva6">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
    	Promoción	<span class="highlight">Semanal</span>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Promoción Semanal <?php echo $precio;  ?>" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
			 <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center"><?php echo $desc2;?></textarea>
			 <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha6" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora6" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario6" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>	
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_6()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="reservar7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Reservar Promoción de la Semana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva7" name="formulario_reserva7">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
    	Reina de	<span class="highlight">La semana</span>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Reina de la semana" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
			 <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center"><?php echo $arreglosSeo["promociones"]["desc2"];?> 1 hora  150€</textarea>
			 <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha7" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora7" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario7" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>	
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_7()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="reservar8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Reservar Promoción de la Semana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva8" name="formulario_reserva8">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
    	Reina de	<span class="highlight">La semana</span>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Reina de la semana" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
			 <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center"><?php echo $arreglosSeo["promociones"]["desc3"];?> 1 hora  150€</textarea>
			 <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha8" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora8" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario8" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>	
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_8()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="reservar9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Reservar Promoción de la Semana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva9" name="formulario_reserva9">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
    	Reina de	<span class="highlight">La semana</span>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Reina de la semana" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
			 <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center"><?php echo $arreglosSeo["promociones"]["desc4"];?> 1 hora  150€</textarea>
			 <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha9" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora9" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario9" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>	
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_9()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="reservar10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Reservar Promoción de la Semana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva10" name="formulario_reserva10">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
    	Reina de	<span class="highlight">La semana</span>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Reina de la semana" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
			 <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center"><?php echo $arreglosSeo["promociones"]["desc5"];?> 1 hora  150€</textarea>
			 <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha10" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora10" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario10" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>	
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_10()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="reservar11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Reservar Promoción de la Semana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva11" name="formulario_reserva11">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
			 <?php echo $arreglosSeo["promociones"]["titulo6"];?>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Reina de la semana" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
			 <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center"><?php echo $arreglosSeo["promociones"]["desc6"]; 
			 echo $arreglosSeo["promociones"]["precio6"];?></textarea>
			  <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha11" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora11" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario11" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>	
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_11()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="reservar12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Reservar Promoción de la Semana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva12" name="formulario_reserva12">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
			 <?php echo $arreglosSeo["promociones"]["titulo7"];?>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Reina de la semana" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
			 <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center"><?php echo $arreglosSeo["promociones"]["desc7"]; 
			 echo $arreglosSeo["promociones"]["precio7"];?></textarea>
			  <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha12" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora12" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario12" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>	
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_12()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="reservar13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Reservar Promoción de la Semana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva13" name="formulario_reserva13">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
			 <?php echo $arreglosSeo["promociones"]["titulo8"];?>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Reina de la semana" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
			 <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center"><?php echo $arreglosSeo["promociones"]["desc8"]; 
			 echo $arreglosSeo["promociones"]["precio8"];?></textarea>
			  <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha13" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora13" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario13" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>	
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_13()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="reservar14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Reservar Promoción de la Semana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva14" name="formulario_reserva14">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
			 <?php echo $arreglosSeo["promociones"]["titulo9"];?>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Reina de la semana" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
			 <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center"><?php echo $arreglosSeo["promociones"]["desc9"]; 
			 echo $arreglosSeo["promociones"]["precio9"];?></textarea>
			  <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha14" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora14" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario14" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>	
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_14()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="reservar15" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Reservar Promoción de la Semana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva15" name="formulario_reserva15">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
			 <?php echo $arreglosSeo["promociones"]["titulo10"];?>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Reina de la semana" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
			 <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center"><?php echo $arreglosSeo["promociones"]["desc10"]; 
			 echo $arreglosSeo["promociones"]["precio10"];?></textarea>
			  <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha15" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora15" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario15" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>	
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_15()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="reservar16" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Reservar Promoción de la Semana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000;text-align: center;">
       <form id="formulario_reserva16" name="formulario_reserva16">
       	<input style="background:#000000;color: #ffffff;font-size: 22px;text-align: center" type="text" name="user1" id="user1" readonly value="<?php echo $nombrecliente; ?>">
       <p style="color: #ffffff;font-size: 18px;line-height: 40px;text-align: center"> Estas reservando </p>
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
			 <?php echo $arreglosSeo["promociones"]["titulo11"];?>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Reina de la semana" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
			 <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center"><?php echo $arreglosSeo["promociones"]["desc11"]; 
			 echo $arreglosSeo["promociones"]["precio11"];?></textarea>
			  <div class="col-md-6">
			 <p class="blanco">Seleccione Fecha:  </p><input type="date" id="fecha16" name="fecha" >	
			 </div>
		   <div class="col-md-6">
		   <p class="blanco">Seleccione Hora:  </p><input type="time" id="hora16" name="hora" >

		   </div>
		<p class="blanco">Ingrese un Comentario:  </p>
		<textarea id="comentario16" name="comentario" size="160" style="width:80%;background:#ffffff;color: #000000;font-size: 15px;line-height: 30px;text-align: center"></textarea>	
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_16()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-------  FIN  VENTANA MODAL    --->
<section class="ds parallax calltoaction section_pad1ding_100" style="background-image:url(/images/background.jpg)">
				<div class="container">
					<div class="row topmargin_60 bottommargin_60">
						<div class="col-sm-12 text-center">

						</div>
					</div>
				</div>
</section>

<?php } ?>






<div style="padding-top: 5px;background: #000000;">

<?php include("slider.php"); ?>
</div>

</div>

<div style="padding-top: 30px;background: #000000;">
</div>

<div style="padding-top: 30px;background: #000000;">
</div>


<?php include("blog-slide.php"); ?>

<style type="text/css">
	.mfp-hide {
    display: none!important;
}

video::-internal-media-controls-download-button {
    display:none;
}

video::-webkit-media-controls-enclosure {
    overflow:hidden;
}

video::-webkit-media-controls-panel {
    width: calc(100% + 25px);
}

</style>

<?php include("footer.html"); ?>


<script type="text/javascript">
function reservar_1(){
	$('#reservar1').modal('show');
}

function reservar_2(){
	$('#reservar2').modal('show');
}

function reservar_3(){
	$('#reservar3').modal('show');
}

function reservar_4(){
	$('#reservar4').modal('show');
}

function reservar_5(){
	$('#reservar5').modal('show');
}
function reservar_6(){
	$('#reservar6').modal('show');
}
function reservar_7(){
	$('#reservar7').modal('show');
}
function reservar_8(){
	$('#reservar8').modal('show');
}
function reservar_9(){
	$('#reservar9').modal('show');
}
function reservar_10(){
	$('#reservar10').modal('show');
}
function reservar_11(){
	$('#reservar11').modal('show');
}
function reservar_12(){
	$('#reservar12').modal('show');
}
function reservar_13(){
	$('#reservar13').modal('show');
}
function reservar_14(){
	$('#reservar14').modal('show');
}
function reservar_15(){
	$('#reservar15').modal('show');
}
function reservar_16(){
	$('#reservar16').modal('show');
}

function correo_reserva_1()
{
			var fecha = document.getElementById("fecha").value;
			var hora = document.getElementById("hora").value;
			var comentario = document.getElementById("comentario").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){

				var datastring = $("#formulario_reserva1").serialize();
				$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
							
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar1').modal('hide');
		        	}
		        }
			});	



			}else{alert("Debe completar todos los campos")}



	
		}

function correo_reserva_2()
{
			var fecha = document.getElementById("fecha2").value;
			var hora = document.getElementById("hora2").value;
			var comentario = document.getElementById("comentario2").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){


			var datastring = $("#formulario_reserva2").serialize();
			$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar2').modal('hide');
		        	}
		        }
			});
		}else{alert("Debe completar todos los campos")}
		}
function correo_reserva_3()
{
			var fecha = document.getElementById("fecha3").value;
			var hora = document.getElementById("hora3").value;
			var comentario = document.getElementById("comentario3").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){
			var datastring = $("#formulario_reserva3").serialize();
			$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar3').modal('hide');
		        	}
		        }
			});
		}else{alert("Debe completar todos los campos")}
		}

function correo_reserva_4()
{
			var fecha = document.getElementById("fecha4").value;
			var hora = document.getElementById("hora4").value;
			var comentario = document.getElementById("comentario4").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){
			var datastring = $("#formulario_reserva4").serialize();
			$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar4').modal('hide');
		        	}
		        }
			});
		}else{alert("Debe completar todos los campos")}
		}

function correo_reserva_5()
{
			var fecha = document.getElementById("fecha5").value;
			var hora = document.getElementById("hora5").value;
			var comentario = document.getElementById("comentario5").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){
			var datastring = $("#formulario_reserva5").serialize();
			$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar5').modal('hide');
		        	}
		        }
			});
		}else{alert("Debe completar todos los campos")}
		}

function correo_reserva_6()
{
			var fecha = document.getElementById("fecha6").value;
			var hora = document.getElementById("hora6").value;
			var comentario = document.getElementById("comentario6").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){
	
			var datastring = $("#formulario_reserva6").serialize();
			$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar6').modal('hide');
		        	}
		        }
			});
		}else{alert("Debe completar todos los campos")}
		}

function correo_reserva_7()
{
			var fecha = document.getElementById("fecha7").value;
			var hora = document.getElementById("hora7").value;
			var comentario = document.getElementById("comentario7").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){
	
			var datastring = $("#formulario_reserva7").serialize();
			$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar7').modal('hide');
		        	}
		        }
			});
		}else{alert("Debe completar todos los campos")}
		}
		function correo_reserva_8()
{

			var fecha = document.getElementById("fecha8").value;
			var hora = document.getElementById("hora8").value;
			var comentario = document.getElementById("comentario8").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){
			var datastring = $("#formulario_reserva8").serialize();
			$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar8').modal('hide');
		        	}
		        }
			});
		}else{alert("Debe completar todos los campos")}
		}

			function correo_reserva_9()
{
			var fecha = document.getElementById("fecha9").value;
			var hora = document.getElementById("hora9").value;
			var comentario = document.getElementById("comentario9").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){
			var datastring = $("#formulario_reserva9").serialize();
			$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar9').modal('hide');
		        	}
		        }
			});
		}else{alert("Debe completar todos los campos")}
		}

				function correo_reserva_10()
{
			var fecha = document.getElementById("fecha10").value;
			var hora = document.getElementById("hora10").value;
			var comentario = document.getElementById("comentario10").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){

			var datastring = $("#formulario_reserva10").serialize();
			$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar10').modal('hide');
		        	}
		        }
			});
		}else{alert("Debe completar todos los campos")}
		}

						function correo_reserva_11()
{
			var fecha = document.getElementById("fecha11").value;
			var hora = document.getElementById("hora11").value;
			var comentario = document.getElementById("comentario11").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){

			var datastring = $("#formulario_reserva11").serialize();
			$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar11').modal('hide');
		        	}
		        }
			});
		}else{alert("Debe completar todos los campos")}
		}

								function correo_reserva_12()
{

			var fecha = document.getElementById("fecha12").value;
			var hora = document.getElementById("hora12").value;
			var comentario = document.getElementById("comentario12").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){
			var datastring = $("#formulario_reserva12").serialize();
			$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar12').modal('hide');
		        	}
		        }
			});
		}else{alert("Debe completar todos los campos")}
		}

								function correo_reserva_13()
{
			var fecha = document.getElementById("fecha13").value;
			var hora = document.getElementById("hora13").value;
			var comentario = document.getElementById("comentario13").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){
			var datastring = $("#formulario_reserva13").serialize();
			$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar13').modal('hide');
		        	}
		        }
			});
		}else{alert("Debe completar todos los campos")}
		}

						function correo_reserva_14()
{
			var fecha = document.getElementById("fecha14").value;
			var hora = document.getElementById("hora14").value;
			var comentario = document.getElementById("comentario14").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){
			var datastring = $("#formulario_reserva14").serialize();
			$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar14').modal('hide');
		        	}
		        }
			});
		}else{alert("Debe completar todos los campos")}
		}
		function correo_reserva_15()
{
			var fecha = document.getElementById("fecha15").value;
			var hora = document.getElementById("hora15").value;
			var comentario = document.getElementById("comentario15").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){
			var datastring = $("#formulario_reserva15").serialize();
			$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar15').modal('hide');
		        	}
		        }
			});
		}else{alert("Debe completar todos los campos")}
		}

						function correo_reserva_16()
{
			var fecha = document.getElementById("fecha16").value;
			var hora = document.getElementById("hora16").value;
			var comentario = document.getElementById("comentario16").value; 
			if(fecha !=="" && hora  !=="" && comentario !=="" ){
			var datastring = $("#formulario_reserva16").serialize();
			$.ajax({
				url: "../reservar.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('Se produjo un error');
		        	}
		        	else
		        	{
		        		alert('Notificación de reserva enviada');

		        		$('#reservar16').modal('hide');
		        	}
		        }
			});
		}else{alert("Debe completar todos los campos")}
		}
</script>




