<?php
require_once 'conex.php';
if (empty ($strTitle)) {$strTitle = $arreglosSeo["inicio"]["tituloseo"];}
if (empty ($strCaption)) {$strCaption = $arreglosSeo["inicio"]["metadescripcion"]; }
if (empty ($canonical)) {$canonical = $arreglosSeo["inicio"]["canopc"];}
if (empty ($canomovil)) {$canomovil = $arreglosSeo["inicio"]["canomovil"];}
?>
<!DOCTYPE html>
<html class="no-js" lang="es-ES">
<!--<![endif]-->
<?php include("head.php"); ?>
<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div style="background: #000000;border: 1px solid #F3D494;" class="modal-content">
      <div class="modal-header" style="border-bottom: 1px solid #F3D494;background: url(/images/otrofondoemparejado.jpg)">
       <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
        <h4 class="modal-title" style="text-align: center;color:#F3D494;    font-family: 'EB Garamond', serif;" >CONTENIDO ADULTO!</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12">
          	<p style="color: #fff; text-align: justify;">Está a punto de ingresar a un sitio web que puede contener contenido de naturaleza adulta. Estas páginas están diseñadas solo para ADULTOS y pueden incluir imágenes y materiales que algunos espectadores pueden considerar ofensivos. Si tiene menos de 18 años (o 21 en algunos países), si se trata de un delito tan grave, si es ilegal verlo en su comunidad, no continúe. Entrar al sitio constituirá su aceptación de los siguientes términos y condiciones:</p>
 				<ul style="color: #fff;">
 					<li>Soy mayor de 18 años.</li>
 					<li>Acepto toda responsabilidad por mis propias acciones.</li>
 					<li>Acepto que estoy legalmente obligado a estos Términos y Condiciones.</li>
 				</ul>

 				 	<p id="age_button_area" style="text-align: center;">
   	<p style="text-align: center" class="entry-excerpt bottommargin_30">
   	<a  data-dismiss="modal" class="theme_button color topmar1gin_20">ENTRAR AL SITIO</a>
	<a href="https://www.google.com" class="theme_button color topmar1gin_20">SALIR</a>
	</p>

	</p>

          </div>
        </div>
        <div class="row">
          <div class="col-xs-4 col-xs-offset-2"></div>
          <div class="col-xs-4"></div>
        </div>


		<div class="modal-header" style="border-bottom: 1px solid #F3D494;background: url(/images/otrofondoemparejado.jpg)">
       <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
        <h4 class="modal-title" style="text-align: center;color:#F3D494;    font-family: 'EB Garamond', serif;" >HORARIO ESPECIAL NAVIDEÑO!</h4>
		<p style="color:#fff;font-size:16px;text-align:center">
		Dias 24 y 31 de diciembre disponibles hasta las 19:00.<br>
		Dias 25 de diciembre y 1 de enero estaremos cerrados. 
		
		
		</p>

      </div>


      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>


<script>

function typeEffect(element, speed) {
	var text = $(element).text();
	$(element).html('');
	var i = 0;
	var timer = setInterval(function() {
					if (i < text.length) {
						$(element).append(text.charAt(i));
						i++;
					} else {
						clearInterval(timer);
					}
				}, speed);
}
$( document ).ready(function() {
  var speed = 75;
  var delay = $('#h21').text().length * speed + speed;
  typeEffect($('#h21'), speed);
var delay = $('#h22').text().length * speed + speed;
  typeEffect($('#h22'), speed);

  /*setTimeout(function(){
    $('#p2').css('display', 'inline-block');
    typeEffect($('#p'), speed);
  }, delay);*/
});
</script>

<?php include("cabecera.html"); ?>
	<section class="ds intro_section">
				<div class="flexslider">
					<ul class="slides">
						<li data-duration="1500">
							<img src="/images/slider01.png" alt=<?php print $strCaption ?>>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h1 id="h21" class="big margin_0">Escorts en Madrid, Agencia Elite Escort Madrid</h1>
													<h4 id="h22" class="muellerhoff topmargin_5 bottommargin_50 highlight">by Julia Rey</h4>
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

						<li data-duration="2550">
							<img src="/images/slider02.png" alt=<?php print $strCaption ?>>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<script>
														setTimeout(segundo, 7500);
														function segundo() {
															var speed = 75;
  														 var delay = $('#h23').text().length * speed + speed;
														  typeEffect($('#h23'), speed);
														}

													</script>
													<h2 id="h23" class="big margin_0">Las mejores acompañantes y escorts de Madrid</h2>
													<span class="muellerhoff topmargin_5 bottommargin_50 highlight"></span>
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

							<li data-duration="2700">
							<img src="/images/slider03.png" alt=<?php print $strCaption ?>>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
												<script>
														setTimeout(tercero, 11000);
														function tercero() {
															var speed = 75;
  														 var delay = $('#h24').text().length * speed + speed;
														  typeEffect($('#h24'), speed);
														}

													</script>


													<h2 id="h24" class="big margin_0">Nuestras chicas convierten tus fantasías en realidad</h2>
													<span class="muellerhoff topmargin_5 bottommargin_50 highlight"></span>
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

						<li data-duration="3800">
							<img src="/images/slider04.png" alt=<?php print $strCaption ?>>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
														<script>
														setTimeout(cuarto, 14500);
														function cuarto() {
															var speed = 75;
  														 var delay = $('#h25').text().length * speed + speed;
														  typeEffect($('#h25'), speed);
														}

													</script>
													<h2 id="h25" class="big margin_0">Agencia de señoritas referencia por seriedad y honestidad</h2>
													<span class="muellerhoff topmargin_5 bottommargin_50 highlight"></span>
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

						<li data-duration="2500">
							<img src="/images/slider05.png" alt=<?php print $strCaption ?>>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
														<script>
														setTimeout(cuarto, 13500);
														function cuarto() {
															var speed = 75;
  														 var delay = $('#h26').text().length * speed + speed;
														  typeEffect($('#h26'), speed);
														}

													</script>
													<h3 id="h26" class="big margin_0">Fotos 100% Reales y actuales</h3>
													<span class="muellerhoff topmargin_5 bottommargin_50 highlight"></span>
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
<div style="padding-top: 5px;background: #000000;">

<?php include("slider.php"); ?>
</div>

<?php include("bienvenidos.php"); ?>
<div style="padding-top: 30px;background: #000000;">


</div>
<?php include("cita.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>
<?php include("zona.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>


<?php include("blog-slide.php"); ?>

<?php include("footer.html"); ?>