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
if (empty ($video)) {$video = $arreglosSeo["promociones"]["video"];}
if (empty ($imagen)) {$imagen = $arreglosSeo["promociones"]["imagen"];}
if (empty ($desc2)) {$desc2 = $arreglosSeo["promociones"]["desc2"];}
if (empty ($precio)) {$precio = $arreglosSeo["promociones"]["precio"];}
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
												if ($video==""){

													echo "<img src='$imagen' alt='$strTitle'>";
												}else{

													echo "<video width='100%' controls controlsList='nodownload'>
													  <source src='$video' type='video/mp4'>
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
														Reina de <span class="highlight">La semana</span>
													</h3>
													<p style="color:#ffffff">
														<?php echo $desc1; ?>
												    </p>
													<h3 class="entry-title topmargin_0">
														1 Hora 150€
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
											<div class="col-md-4">
												<div class="item-media">
												<?php
												if ($video==""){

													echo "<img src='$imagen2' alt='$strTitle'>";
												}else{

													echo "<video width='100%' controls controlsList='nodownload'>
													  <source src='$video2' type='video/mp4'>
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
														Promoción semanal
													</h3>
													<p style="color: #ffffff"><?php echo $desc2; ?></p>
													<h3 class="entry-title topmargin_0">
														<?php echo $precio;  ?>
													</h3>
													<p style="text-align: center" class="entry-excerpt bottommargin_30">
													<a href="javascript:reservar_6()" class="theme_button color1 topmargin_20"><i class="rt-icon2-whatsapp"> </i>Reservar</a></p>
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
       <h3 class="big topmargin_0 bottommargin_30" style="color: #ffffff">
    	Reina de	<span class="highlight">La semana</span>
	   </h3>
	   <input type="text" name="promo" id="promo" value="Reina de la semana" style="display: none">
	   <input type="text" name="correocliente" id="correocliente" value="<?php echo $correocliente; ?>" style="display: none">
	   <input type="text" name="iduser" id="iduser" value="<?php echo $idclientes; ?>" style="display: none">
       <textarea readonly size="160" style="width:100%;background:#000000;color: #ffffff;font-size: 15px;line-height: 40px;text-align: center"><?php echo $desc1;?> 1 hora  150€</textarea>
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_1()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div style="padding-top: 5px;background: #000000;">

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
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_2()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div style="padding-top: 5px;background: #000000;">

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
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_3()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div style="padding-top: 5px;background: #000000;">

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
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_4()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div style="padding-top: 5px;background: #000000;">

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
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_5()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div style="padding-top: 5px;background: #000000;">

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
     </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="correo_reserva_6()">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div style="padding-top: 5px;background: #000000;">


<!-------  FIN  VENTANA MODAL    --->
<?php } ?>

								<div class="side-item content-padding" style="background: #000000;">

									<div class="row">

								<div class="col-md-12">
											<div class="item-content .about-content">
												<h2 class="big topmargin_0 bottommargin_30" style="font-size: 40px;line-height: 1;	" >
													<span class="highlight">Condiciones Zona Amiga</span>
												</h2>


							<ul>

	<li style="font-weight: 400; font-size: 14px;text-align: left;color:#ffffff">Solo se contabilizarán las citas reservadas por zona amiga y desde el momento de inscripción nunca con carácter retroactivo</li>
 	<li style="font-weight: 400; font-size: 14px;text-align: left;color:#ffffff">Las ofertas citadas son exclusivamente para la sección de escort, estando excluidas la sección de mujeres casadas y cita a ciegas</li>
 	<li style="font-weight: 400; font-size: 14px;text-align: left;color:#ffffff">la acumulación de citas tendrá la duración de 6 meses desde el día de la inscripción. Las ofertas no son acumulables entre sí.</li>
 	<li style="font-weight: 400; font-size: 14px;text-align: left;color:#ffffff">Elite Escort Madrid se reserva el derecho de cancelar y eliminar la inscripción junto con la pérdida de acumulación de citas si detecta alguna actitud deshonesta.</li>
 	<li style="font-weight: 400; font-size: 14px;text-align: left;color:#ffffff">La tarifa del taxi en el caso de desplazamiento seguirá teniéndose que abonar.</li>
 	<li style="font-weight: 400; font-size: 14px;text-align: left;color:#ffffff">Las promociones de premio a tu fidelidad serán contabilizadas por cita, no por el tiempo de la cita.</li>
 	<li style="font-weight: 400; font-size: 14px;text-align: left;color:#ffffff">Condiciones de la novena y tercera cita: los servicios ofrecidos los realizaran las escorts que ofrezcan dichos servicios. La cita con prolongación de 20 min de cita o 15 min más de masaje sensitivo queda sujeta a disponibilidad de los apartamentos</li>
</ul>
											</div>
										</div>
									</div>
								</div>

	<?php include("slider.php"); ?>

	<?php include("video.php"); ?>

	<?php include("cita.php"); ?>

	<?php include("zona.php"); ?>

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

function correo_reserva_1()
{
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
		}

function correo_reserva_2()
{
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
		}
function correo_reserva_3()
{
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
		}

function correo_reserva_4()
{
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
		}

function correo_reserva_5()
{
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
		}

function correo_reserva_6()
{
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
		}
</script>



