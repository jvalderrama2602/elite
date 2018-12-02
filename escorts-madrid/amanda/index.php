<?php
require_once '../../conex.php';

$ruta= dirname(__FILE__);
$arregloruta= explode('/',$ruta);
$cantidad= sizeof($arregloruta);
$nombre1=$arregloruta[$cantidad-1];
$nombre2 = ucwords($nombre1);

if (empty ($strTitle)) {
	$strTitle = $arreglosSeo[$nombre1]["tituloseo"];}
if (empty ($strCaption)) {
	$strCaption = $arreglosSeo[$nombre1]["metadescripcion"]; }
if (empty ($canonical)) {$canonical = $arreglosSeo[$nombre1]["canopc"];}
if (empty ($canomovil)) {$canomovil = $arreglosSeo[$nombre1]["canomovil"];}	

$consulta = "SELECT * FROM escorts WHERE nombre='".$nombre2."'";
$resultado = $conex->query($consulta);
?>

<!DOCTYPE html>
<html class="no-js" lang="es-ES">
<!--<![endif]-->
<?php include("../../head.php"); ?>

<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
<script type="text/javascript">
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
  var delay = $('#p').text().length * speed + speed;
  typeEffect($('#p'), speed);
  /*setTimeout(function(){
    $('#p2').css('display', 'inline-block');
    typeEffect($('#p'), speed);
  }, delay);*/
});
</script>
<?php include("../../cabecera.html"); ?>
<?php foreach ($resultado as $row ): ?>

	<section class="ds intro_section">
				<div class="flexslider vertical-nav">
					<ul class="slides">

						<li>
							<img src=<?= $row['imagenwide']; ?> alt="<?= $row['titulo']; ?>">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">

												<h2 class="big margin_0"><?= $row['nombre']; ?>  </h2>
													<h1 id="type" class="muellerhoff topmargin_5 bottommargin_50 highlight"><?= $row['titulo']; ?></h1>
												</div>
												<div class="intro-layer" data-animation="slideExpandUp">
													<p id="p" class="entry-excerpt bottommargin_30">
														<?= $row['contenido']; ?>
													</p>
													<p style="text-align: center" class="entry-excerpt bottommargin_30">
													<strong style="color:#ffdf9c">Reserva la cita cómo mínimo con una hora de antelación.</strong><br>
													<strong style="color:#ffdf9c"><?= $row['horario']; ?></strong><br>
													<a href="https://api.whatsapp.com/send?phone=34693608861" class="theme_button color1 topmargin_20"><i class="rt-icon2-whatsapp"> </i>Contáctame</a></p>
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
<?php endforeach; ?>
					</ul>
				</div>
				<!-- eof flexslider -->
			</section>

<?php include("../fotos.php"); ?>

<div style="padding-top: 30px;background: #000000;">

</div>

<div class="container-fluid negro">
	<div class="row">
		<div class="col-md-3 borde">
			<div class="with_background2 page-meta topmargin_1">

								<div class="widget widget_tag_cloud2">

									<h3 class="widget-title">Información</h3>


								</div>
								<div class="media small-teaser">
									<li class="list-item">
									<strong>Estatura: </strong><?= $row['estatura']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Medidas: </strong><?= $row['busto']; ?>/<?= $row['cintura']; ?>/<?= $row['cadera']; ?>
									</li>
								</div>

								<div class="media small-teaser">
								<li>
									<strong>Edad: </strong><?= $row['edad']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Ojos: </strong><?= $row['ojos']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Talla: </strong><?= $row['talla']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Calzado: </strong><?= $row['calzado']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Idioma: </strong><?= $row['idioma']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Nacionalidad: </strong><?= $row['nacionalidad']; ?>
									</li>
								</div>
			</div>
		</div>
		<div class="col-md-3 borde">
			<div class="with_background2 page-meta topmargin_1">
								<div class="widget widget_tag_cloud2">
									<h3 class="widget-title">Tarifas</h3>
								</div>
								<?php
										$tarifa= explode(',',$row['tarifas']);
										$cantidad= sizeof($tarifa);
										for($i = 0; $i < $cantidad;$i++)
										{
											echo "<div class='media small-teaser'>
									<li class='list-item'>
									$tarifa[$i]<strong>€</strong>
									</li>
								</div>";
										}
										  ?>
			</div>
		</div>
		<div class="col-md-3 borde">
			<div class="with_background2 page-meta topmargin_1">
								<div class="widget widget_tag_cloud2">
									<h3 class="widget-title">Servicios</h3>
								</div>
								<?php
										$serv= explode(',',$row['Servicios']);
										$cantidad= sizeof($serv);

										for($i = 0; $i < $cantidad;$i++)
										{
											echo "<div class='media small-teaser'>
									<li class='list-item'>
									 $serv[$i]
									</li>
								</div>"
								;
										}
										  ?>
								<div class='media small-teaser'>
									<li class='list-item'>
									Otros servicios consultar
									</li>
									<img src="/images/PEGATINA.png">
								</div>"
			</div>
		</div>
		<div class="col-md-3 borde">
			<div class="with_background2 page-meta topmargin_1">
								<div class="widget widget_tag_cloud2">
									<h3 class="widget-title">Me gusta</h3>
								</div>

<?php
										$gusto= explode(',',$row['megusta']);
										$cantidad= sizeof($gusto);

										for($i = 0; $i < $cantidad;$i++)
										{
											echo "<div class='media small-teaser'>
									<li class='list-item'>
									 $gusto[$i]
									</li>
								</div>";
										}

										  ?>
			</div>
		</div>
	</div>
</div>



<div style="padding-top: 30px;background: #000000;">
</div>

<?php include("../../slider.php"); ?>


<?php include("../../bienvenida.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>
<?php include("../../cita.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>
<?php include("../../zona.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>
<?php include("../../blog-slide.php"); ?>
<?php include("../../footer.html"); ?>

<style type="text/css">
	
	#type {
	font-family: 'Herr Von Muellerhoff', cursive;
    font-weight: 400;
	color:#ffdf9c;
	font-size: 50px;
    text-align: center;
}
</style>