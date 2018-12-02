<?php
require_once '../conex.php';
$nombre1="reino";
$nombre2="activo";
if (empty ($strTitle)) {
	$strTitle = $arreglosSeo[$nombre1]["tituloseo"];
}
if (empty ($strCaption)) {
	$strCaption = $arreglosSeo[$nombre1]["metadescripcion"]; }
if (empty ($canonical)) {$canonical = $arreglosSeo[$nombre1]["canopc"];}
if (empty ($canomovil)) {$canomovil = $arreglosSeo[$nombre1]["canomovil"];}	
?>

<!DOCTYPE html>
<html class="no-js" lang="es-ES">
<!--<![endif]-->
<?php include("../head.php"); ?>


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


<script>
    /**
     * Array con las imagenes y enlaces que se iran mostrando en la web
     */
    var imagenes=new Array(
        ['/images/sliderreino01.png'],
        ['/images/sliderreino02.png'],
        ['/images/sliderreino03.png'],
        ['/images/sliderreino04.png'],
        ['/images/sliderreino05.png']
    );

    /**
     * Funcion para cambiar la imagen y link
     */
    function rotarImagenes()
    {
        var index=Math.floor((Math.random()*imagenes.length));

		//var index=Math.floor((Math.random()*imagenes.length));
        document.getElementById("cambio").src=imagenes[index][0];
       /* document.getElementById("link").href=imagenes[index][1];*/

   	}


    /**
     * Función que se ejecuta una vez cargada la página
     */
    onload=function()
    {
        // Cargamos una imagen aleatoria
       rotarImagenes();
        var cont=0;
       // Indicamos que cada 5 segundos cambie la imagen
        setInterval(rotarImagenes,3000);

    }
</script>
<style type="text/css">
	#p{
		font-size: 18px;
		color: #ffffff;
	}
	#cambio{
		animation-delay: -1s;
		max-width: :800px;
		 opacity: 1;
   display: block;
    background: rgba(0, 0, 0, .6);
}


}


</style>

<?php include("../cabecera.html"); ?>

	<section class="ds intro_section">
				<div class="flexslider vertical-nav">
					<ul class="slides">
						<li  id="overlay">
							<div><img id="cambio" src="/images/sliderreino01.png" alt=""></div>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h1 class="big margin_0">Nuestro Reino</h1>
													<h2 class="muellerhoff topmargin_5 bottommargin_50 highlight">by Julia Rey</h2>
												</div>
												<p style="" id="p">En élite escort Madrid sabemos lo importante que es para ti no solo la compañía de una dama especial sino también qué el lugar de encuentro sea un sitio confortable, moderno y con gusto, en el que te encuentres cómodo y relajado con todas las comodidades que puedas necesitar. Dispones de una amplia gama de bebidas para refrescarte cuando desees, además de todo tipo de accesorios que te harán sentir como en casa. Esponjas, zapatillas, productos de aseo están a tu disposición, cuidamos hasta el más mínimo detalle.
Podrás encontrar a 5 min de Cuzco apartamentos individuales para garantizarte la máxima intimidad y discreción, en una calle discreta y con acceso privado al edificio.
Disfruta de todas las comodidades y discreción necesarias para que tú encuentro sea perfecto en la compañía y la estancia.</p>


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



<?php include("../slider.php"); ?>

<?php include("../bienvenida.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>
<?php include("../cita.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>
<?php include("../zona.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>
<?php include("../blog-slide.php"); ?>
<?php include("../footer.html"); ?>

