<?php
require_once '../conex.php';
$nombre1="fantasia";
$nombre2="activo";
if (empty ($strTitle)) {
	$strTitle = $arreglosSeo[$nombre1]["tituloseo"];
}
if (empty ($strCaption)) {
	$strCaption = $arreglosSeo[$nombre1]["metadescripcion"]; }
if (empty ($canonical)) {$canonical = $arreglosSeo[$nombre1]["canopc"];}
if (empty ($canomovil)) {$canomovil = $arreglosSeo[$nombre1]["canomovil"];}	

$consultaS = 'SELECT * FROM escorts WHERE fantasias=1 ORDER BY RAND()';
$resultadoS= $conex->query($consultaS);


?>

<!DOCTYPE html>
<html class="no-js" lang="es-ES">
<!--<![endif]-->
<?php include("../head.php"); ?>


<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
<?php include("../cabecera.html"); ?>

<section class="ds parallax calltoaction section_padding_100" style="background-image: url(/images/fantasia.jpg)">
				<div class="container">
					<div class="row topmargin_60 bottommargin_60">
						<div class="col-sm-12 text-center">
							<h1 class="extra-big topmargin_0 bottommargin_30">Servicio
								<span class="highlight">Fantasías Eróticas</span>
							</h1>
							<div class="row">
								<div class="col-md-offset-2 col-md-8 text-center">



				<p style="text-align: center" class="entry-excerpt bottommargin_30">
													<strong style="color:#ffdf9c;font-size:36px">Tus sueños eróticos hechos realidad.</strong><br>
													<a href="https://api.whatsapp.com/send?phone=34693608861" class="theme_button color1 topmargin_20"><i class="rt-icon2-whatsapp"> </i>Contáctame</a></p>
<!--<p class="entry-excerpt bottommargin_30">Quizás desatendidas, y la monotonía se ha instalado en sus relaciones, muestran gran interés por mis vivencias y me han confesado que les gustaría en ocasiones la experiencia de tener encuentros privados, discretos y sin compromiso.</p>
<p class="entry-excerpt bottommargin_30">Y pensé… ¿Por qué no?</p>
<p class="entry-excerpt bottommargin_30">Os presento la sección de señoras casadas, por razones obvias no disponemos de fotografías, pero indicame tus gustos y te organizaré una velada perfecta, recuerda reservar tu cita con la suficiente antelación.</p>
<p class="entry-excerpt bottommargin_30">Será nuestro secreto…</p>-->

								</div>
							</div>
							<div class="widget widget_mailchimp topmargin_20">
								<form class="signup form-inline" action="/" method="get">
									<!--<div class="form-group">
										<input name="email" type="email" class="mailchimp_email form-control" placeholder="Email address">
									</div>-->
									<!--<button type="submit" class="theme_button input_button">Send</button>-->
									<div class="response"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
</section>
<section class="ds parallax calltoaction section_pad1ding_100" style="background-image:url(https://eliteescortmadrid.com/wp-content/uploads/2018/04/02-min.jpg)">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<article class="post format-small-image with_background">

								<div class="side-item content-padding">

									<div class="row">

										<div class="col-md-6">
											<div class="item-content .about-content">
												<h2 class="big topmargin_0 bottommargin_30">
Cumplimos tus sueños
												</h2>

<p>En Elite Escorts Madrid perseguimos constantemente satisfacer tus necesidades eróticas más intimas. Convertimos en realidad todos sus deseos. Es por ello que nos encantaría que dejaras volar su imaginación y explorar desde lo más profundo de tu mente todas sus fantasías, esas <strong>fantasías eróticas</strong> que nunca te has atrevido nunca a llevar a cabo. Te invitamos a dejarlo en nuestras manos y llegarás a alcanzar tus más altos niveles de placer.</p>
<p>Las <strong>fantasías eróticas</strong> aparecen durante el día o durante el acto sexual y se forman en función de la personalidad de cada uno. Las fantasías más recurrentes son las que se tienen con una persona concreta (un famoso, un desconocido, un compañero de trabajo o un amigo o con algún accesorio (manos atadas, ojos vendados, juguetes, etc. ). Abajo te dejo las chicas dispuestas a complacer tus fantasias eróticas.</p>

<h2 style="font-family: 'Herr Von Muellerhoff', cursive;font-weight: 400;" class="muellerhoff topmargin_5 bottommargin_50 highlight">Julia Rey</h2>
											</div>
										</div>

										<div class="col-md-6">
											<div class="item-media entry-thumbnail">
												<p style="text-align: center;padding-left: 40px;padding-top: 40px;"><img src="/images/Fantasia-erotica.jpg" alt=""></p>
											</div>
										</div>



									</div>
								</div>

							</article>

						</div>
					</div>
				</div>
			</section>
<section class="ds parallax calltoaction section_pad1ding_100" style="background-image:url(/images/background.jpg)">			
			<style>
	.texto-blanco{color:#ffffff;}
	.texto-blanco:hover{color:#D5BD53;}


	.imgborder2{
		width:430px;
		border: 1px solid #D1A254;
			}

</style>

<div class="container-fluid">
	<div class="row" >

		<?php
		$cont=0;
		foreach ($resultadoS as $row ):							?>
		<div class="col-md-4" ><a href=<?php echo "'/escorts-madrid/";?><?= strtolower($row['nombre']); ?><?php echo "'";?>>
		<p style='padding-top:1px;text-align: center;' ><img class="imgborder2" src=<?= $row['imagenppal']; ?> alt=<?= $row['alt']; $i=$i+1;echo '$row' ?>></p>
		<div class="model-parameters">
		<h3 style="text-align: center;font-family: Garamond;margin-top: 0px" class="texto-blanco">
				<?= strtolower($row['nombre']); ?></h3>
		</div></a>
		</div>
		<?php
		$cont=$cont+1;
		switch ($cont) {
    case 3:
        echo "</div>
</div><div class='container-fluid'>
	<div class='row'>";
        break;
    case 6:
        echo "</div>
</div><div class='container-fluid'>
	<div class='row'>";
        break;
    case 9:
        echo "</div>
</div><div class='container-fluid'>
	<div class='row'>";
        break;
    case 12:
     echo "</div>
		</div><div class='container-fluid'>
		<div class='row'>";
        break;
    case 15:
     echo "</div>
		</div><div class='container-fluid'>
		<div class='row'>";
        break;

}		?>



		<?php endforeach; ?>


		<div class='col-md-4' ><a href='/servicios-cita-ciegas-elite-escorts-madrid/'>
		<p style='padding-top:1px;text-align: center;' ><img class='imgborder2' src='/images/citaaciega.png' alt='Cita a ciegas'></p>
		<div class='model-parameters'>
		<h3 style='text-align: center;font-family: Garamond;margin-top: 0px' class='texto-blanco'>
			Cita a ciegas
		</h3></div></a>
		</div>

	</div>
</div>
<!--<div class="container-fluid">
	<div class="row" >

		<!- - cita a ciegas - ->
		<div class="col-md-4" ><a href="/servicios-cita-ciegas-elite-escorts-madrid/">
		<p style='padding-top:1px;text-align: center;' ><img class="imgborder2" src="/images/citaaciega.png" alt="Cita a ciegas"></p>
		<div class="model-parameters">
		<h3 style="text-align: center;font-family: Garamond;margin-top: 0px" class="texto-blanco">
			Cita a ciegas
		</h3></div></a>
		</div>


		<div class="col-md-4" >
		<p style='padding-top:1px;text-align: center;' ><img class="imgborder2" src="/images/proximamente01.png" alt="Cita a ciegas"></p>
		<div class="model-parameters">
		<h3 style="text-align: center;font-family: Garamond;margin-top: 0px" class="texto-blanco">
			Próximamente
		</h3></div>
		</div>

		<div class="col-md-4" >
		<p style='padding-top:1px;text-align: center;' ><img class="imgborder2" src="/images/proximamente02.png" alt="Cita a ciegas"></p>
		<div class="model-parameters">
		<h3 style="text-align: center;font-family: Garamond;margin-top: 0px" class="texto-blanco">
			Próximamente
		</h3></div>
		</div>



	</div>
</div>-->
</section>
<?php /* include("../bienvenida.php"); */?>
<!--<div style="padding-top: 30px;background: #000000;">
</div>-->

<?php /* include("../zona.php"); */?>
<!--<div style="padding-top: 30px;background: #000000;">
</div>-->
<?php /* include("../blog-slide.php");*/ ?>
<?php include("../footer.html"); ?>
