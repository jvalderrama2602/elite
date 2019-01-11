<?php
require_once '../../conex.php';
$nombre1="casting";
$nombre2="activo";
if (empty ($strTitle)) {
	$strTitle = $arreglosSeo[$nombre1]["tituloseo"];
}
if (empty ($strCaption)) {
	$strCaption = $arreglosSeo[$nombre1]["metadescripcion"]; }
if (empty ($canonical)) {$canonical = $arreglosSeo[$nombre1]["canomovil"]; }
if (empty ($canopc)) {$canopc = $arreglosSeo[$nombre1]["canopc"]; }
?>

<!DOCTYPE html>
<html class="no-js" lang="es-ES">
<!--<![endif]-->
<?php include("../head.php"); ?>


<body>
<?php include("../cabecera.html"); ?>
<style type="text/css">
	.subir{
    padding: 30px 40px;
    background: #1A1A1A;
    color:#fff;
    border:4px dotted rgba(255, 255, 255, 0.1);

}

.subir:hover{
    color:#fff;
    background: #DCC455;
}
.centrar{text-align: center;}
</style>
<script type="text/javascript">

	function cambiar(){
    var pdrs = document.getElementById('foto1').files[0].name;
    document.getElementById('info1').innerHTML = pdrs;
    var pdrs1 = document.getElementById('foto2').files[0].name;
    document.getElementById('info2').innerHTML = pdrs1;
    var pdrs2 = document.getElementById('foto3').files[0].name;
    document.getElementById('info3').innerHTML = pdrs2;
    var pdrs3 = document.getElementById('foto4').files[0].name;
    document.getElementById('info4').innerHTML = pdrs3;
    var pdrs4 = document.getElementById('foto5').files[0].name;
    document.getElementById('info5').innerHTML = pdrs4;
    var pdrs5 = document.getElementById('foto6').files[0].name;
    document.getElementById('info6').innerHTML = pdrs5;
}

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

	<section class="ds intro_section" style="height: 620px">
				<div class="flexslider vertical-nav">
					<ul class="slides">

						<li data-duration="5000" style="background: url(/movil/images/slidermovil03.jpg);background-position: 30% 0px;max-height: 600px">
							<div style="height: 150px"></div>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper" style="min-height: 600px">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h1 class="big margin_0">Casting Elite Escort Madrid</span></h1>
													<h2 class="muellerhoff topmargin_5 bottommargin_50 highlight"></h2>
												</div>
											<div class="intro-layer" data-animation="slideExpandUp">
													<p class="entry-excerpt bottommargin_30">
													Sabemos que hay mil sitios, mil dudas, mil miedos y una decisión. Entendemos que es una decisión complicada por eso queremos ayudarte a tomar la mejor decisión.</p>
													<h2 style="font-family: 'Herr Von Muellerhoff', cursive;font-weight: 400;" class="muellerhoff topmargin_5 bottommargin_50 highlight">Julia Rey</h2>
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
				<!-- eof flexslider -->
			</section>



	<section class="ds intro_section" style="height: 620px">
				<div class="flexslider vertical-nav">
					<ul class="slides">
						<li data-duration="5000" style="background: url(/movil/images/slidermovil01.jpg);background-position: 30% 0px;max-height: 600px">
							<div style="height: 100px"></div>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper" style="min-height: 600px">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h2 class="big margin_0">Presentación</h2>
													<h2 class="muellerhoff topmargin_5 bottommargin_50 highlight"></h2>
												</div>
												<div class="intro-layer" data-animation="slideExpandUp">
													<p class="entry-excerpt bottommargin_30">
														Si te decidiste por élite escort Madrid podrás  comprobar que somos mujeres normales igual que  tú, por ello lo único que queremos es tener buen un buen ambiente, trato agradable, respeto, clientes selectos y unos ingresos extras. Los caballeroses no sólo buscan en una escort una cara bonita y un cuerpo cuidado, también desean otras características.
													</p>
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

						<li data-duration="5000" style="background: url(/movil/images/slidermovil03.jpg);background-position: 30% 0px;max-height: 600px">
							<div style="height: 100px"></div>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper" style="min-height: 600px">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h2 class="big margin_0">Encuentros</h2>
													<h2 class="muellerhoff topmargin_5 bottommargin_50 highlight"></h2>
												</div>
											<div class="intro-layer" data-animation="slideExpandUp">
													<p class="entry-excerpt bottommargin_30">
													Te ofrecemos la oportunidad de conocer gentlemen de nivel selecto, que estén interesados en conocerte íntimamente con las limitaciones que tú desees, encuentros en cualquier Ciudad, cenas, viajes, hoteles, suites, etc. Tú siempre tienes la última palabra, en aceptar las propuestas de los señores.</p>

													<p  class="entry-excerpt bottommargin_30">Actualizamos tu agenda-calendario en la web siguiendo tus indicaciones, gestionamos la publicidad, hacemos todo el seguimiento con total  discreción, para la satisfacción de todas las partes, todo avalado por Julia rey con una trayectoria de más de 18 años de profesionalidad </p>

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
						<li data-duration="5000" style="background: url(/movil/images/slidermovil02.jpg);background-position: 30% 0px;max-height: 600px">
							<div style="height: 100px"></div>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper" style="min-height: 600px">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h2 class="big margin_0">Requisitos</h2>
													<h2 class="muellerhoff topmargin_5 bottommargin_50 highlight"></h2>
												</div>
											<div class="intro-layer" data-animation="slideExpandUp">
													<p class="entry-excerpt bottommargin_30">
													Si quieres anunciarte como Escort de lujo en Elite Escort Madrid de forma totalmente voluntaria, tienes que reunir una serie de requisitos básicos, por supuesto en todo momento te ofreceremos nuestro asesoramiento general.</p>
													<p class="entry-excerpt bottommargin_30">Tener entre 19 y 45 años, formación media o universitaria de carácter extrovertido y encantador, tener una cara atractiva y buen físico, ser sexualmente liberada, cuidarse y hacer deporte, ser elegante y discreta,se valora el nivel de inglés y otros idiomas y ante todo ser responsable y seria.</p>

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

							<li data-duration="5000" style="background: url(/movil/images/slidermovil04.jpg);background-position: 30% 0px;max-height: 600px">
							<div style="height: 100px"></div>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper" style="min-height: 600px">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h2 class="big margin_0">Contactar</h2>
													<h2 class="muellerhoff topmargin_5 bottommargin_50 highlight"></h2>
												</div>
											<div class="intro-layer" data-animation="slideExpandUp">
													<p class="entry-excerpt bottommargin_30">
													Si estás interesada puedes enviarnos los siguientes datos por email o rellenando el formulario que verás a continuación, tus datos y fotografías personales serán tratados con total confidencialidad.</p>
													<p class="entry-excerpt bottommargin_30">
													Nombre o seudónimo edad nacionalidad, teléfono de contacto, email, medidas, fotos recientes y naturales, si mostrarias la cara o parte de ella, nivel de estudios, profesión, horario de disponibilidad y cualquier comentario que desees exponer.</p>
													<h4 class="topmargin_0 bottommargin_30">
													casting@eliteescortmadrid.com
												</h4>

<h2 style="font-family: 'Herr Von Muellerhoff', cursive;
	font-weight: 400;" class="muellerhoff topmargin_5 bottommargin_50 highlight">Julia Rey</h2>
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
				<!-- eof flexslider -->

</section>

<section class="ds parallax calltoaction section_padding_100" style="background-image: url(https://eliteescortmadrid.com/wp-content/uploads/2017/08/pexels-photo-271897.jpeg)">

				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<article class="post format-small-image with_background">
								<h2 class="big topmargin_0 bottommargin_30">
													Rellena el siguiente formulario
												</h2>
								<form style="padding-bottom: 30px;" role="form" name="formulario_casting" id="formulario_casting" method="POST" enctype="multipart/form-data" accept-charset="ISO-8859-1" >
								<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
										<h3 class="topmargin_0 bottommargin_30">Datos Personales</h3>
									</div>
								</div>
							</div>

						<div class="col-md-6">

							<div class="form-group">
								<label for="exampleInputEmail1">Nombre o Alias</label>
								<input type="text" class="form-control" id="nombre" name="nombre" />
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Email</label>
								<input type="email" class="form-control" id="email" name="email" />
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Nacionalidad</label>
								<input type="text" class="form-control" id="nacionalidad" name="nacionalidad" />
							</div>

						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Edad</label>
								<input type="number" class="form-control" id="edad" name="edad"  />
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Teléfono</label>
								<input type="number" class="form-control" id="telefono" name="telefono" />
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Profesión</label>
								<input type="text" class="form-control" id="profesion" name="profesion" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Horario disponible</label>
								<input type="text" class="form-control" id="horario" name="horario" />
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Mostrarías tu cara?</label>
								<input type="text" class="form-control" id="cara" name="cara" />
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Posee Book fotográfico?</label>
								<input type="text" class="form-control" id="book" name="book" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Medidas </label>
								<input type="number" class="form-control" id="medidas" name="medidas" maxlength="2" />
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Tienes tatuajes o piercing?</label>
								<input type="text" class="form-control" id="piercing" name="piercing" />
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Pecho natural u operado?</label>
								<input type="text" class="form-control" id="natural" name="natural" />
							</div>
						</div>


						<div class="col-md-12">
							<div class="form-group">
								<label for="exampleInputEmail1">Idiomas</label>
								<input type="text" class="form-control" id="idiomas" name="idiomas" />
							</div>
						</div>
						<!--	<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
										<h3 class="topmargin_0 bottommargin_30">Medidas</h3>
									</div>
								</div>
							</div>-->




					<!--	<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Peso</label>
								<input type="text" class="form-control" id="peso" name="peso" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Estatura</label>
								<input type="text" class="form-control" id="estatura" name="estatura" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Pecho</label>
								<input type="text" class="form-control" id="pecho" name="pecho" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Cintura</label>
								<input type="text" class="form-control" id="cintura" name="cintura" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Cadera</label>
								<input type="text" class="form-control" id="cadera" name="cadera" />
							</div>
						</div>-->
						<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
										<h3 class="topmargin_0 bottommargin_30">Fotografías</h3>
						<p>En función de su conexión y del tamaño de las imágenes, la carga puede tardar un poco. Por favor, tenga paciencia. Gracias. </p>
									</div>
								</div>
							</div>

						<div class="col-md-2 centrar">
							<div class="form-group">
								<label for="foto1" id="info1" class="subir">Haz Click para subir una foto</label>
								<input type="file" id="foto1" name="foto1" style="display:none; " />



							</div>
						</div>
						<div class="col-md-2 centrar">
							<div class="form-group">
								<label for="foto2" id="info2" class="subir">Haz Click para subir una foto</label>
								<input type="file" id="foto2" name="foto2" style="display:none; " />


							</div>
						</div>
						<div class="col-md-2 centrar">
							<div class="form-group">
								<label for="foto3"  id="info3" class="subir">Haz Click para subir una foto</label>
								<input type="file" id="foto3" name="foto3" style="display:none; " />

							</div>
						</div>
						<div class="col-md-2 centrar">
							<div class="form-group">
								<label for="foto4" id="info4" class="subir">Haz Click para subir una foto</label>
								<input type="file" id="foto4" name="foto4" style="display:none; " />

							</div>
						</div>
						<div class="col-md-2 centrar">
							<div class="form-group">
								<label for="foto5" id="info5" class="subir">Haz Click para subir una foto</label>
								<input type="file" id="foto5" name="foto5" style="display:none; " />

							</div>
						</div>
						<div class="col-md-2 centrar">
							<div class="form-group">
								<label for="foto6" id="info6" class="subir">Haz Click para subir una foto</label>
								<input type="file" id="foto6" name="foto6" style="display:none; " />

														</div>
						</div>
						<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
										<h3 class="topmargin_0 bottommargin_30">Comentarios</h3>
										<textarea style="padding-left: 15px;padding-right: 15px;width: 100%;height: 150px" name="comentario" id="comentario" form="formulario_casting"></textarea>
									</div>

								</div>
							</div>
						<div style="text-align: center;margin-top: 30px;margin-bottom: 20px">
			<button type="button" class="theme_button color1" onclick="btn_enviar_casting()">Enviar</button>
		</div>
		<div id="completar" style="display: none; text-align: center;margin-bottom: 20px">
				<span style="color: #FFDF9C;">Complete todos los campos</span>
			</div>

			<div id="correomalo" style="display: none; text-align: center;margin-bottom: 20px">
				<span style="color: #FFDF9C;">El Email no esta bien escrito</span>
			</div>
			<div id="correcto" style="display: none; text-align: center;margin-bottom: 20px">
				<span style="color: #FFDF9C;">Sus datos han sido enviados</span>
			</div>

			<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
									<!--	<h3 class="topmargin_0 bottommargin_30">Fotografías</h3>-->
						<p style="text-align: center;">Elite Escorts Madrid garantiza que la información recibida será gestionada únicamente para responder la solicitud, de forma confidencial y discreta.</p>
									</div>
								</div>
							</div>

		</form>

		<div id="loading"></div>
		<div id="result"></div>

							</article>
						</div>
					</div>
				</div>

			</section>


<!-- Modal -->
<div id="esperar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div style="background: #000000;border: 1px solid #F3D494;" class="modal-content">
      <div class="modal-header" style="border-bottom: 1px solid #F3D494;background: url(/images/otrofondoemparejado.jpg)">
       <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
        <h4 class="modal-title" style="text-align: center;color:#F3D494;    font-family: 'EB Garamond', serif;" >Espere Por favor!</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12">
          	<p style="color: #fff; text-align: justify;">En función de su conexión y del tamaño de las imágenes, la carga puede tardar un poco. Por favor, tenga paciencia. Gracias. </p>
 			
	</p>

	</p>

          </div>
        </div>
        <div class="row">
          <div class="col-xs-4 col-xs-offset-2"></div>
          <div class="col-xs-4"></div>
        </div>

      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>


<!-- Modal -->
<div id="exito" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div style="background: #000000;border: 1px solid #F3D494;" class="modal-content">
      <div class="modal-header" style="border-bottom: 1px solid #F3D494;background: url(/images/otrofondoemparejado.jpg)">
       <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
        <h4 class="modal-title" style="text-align: center;color:#F3D494;    font-family: 'EB Garamond', serif;" >Su mensaje se envió correctamente</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12">
          	<p style="color: #fff; text-align: justify;">Te contactaremos </p>
 			
	</p>

	</p>

          </div>
        </div>
        <div class="row">
          <div class="col-xs-4 col-xs-offset-2"></div>
          <div class="col-xs-4"></div>
        </div>

      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>



<?php include("../bienvenida.php"); ?>
<?php include("../cita.php"); ?>
<?php include("../zona.php"); ?>
<?php include("../blog-slide.php"); ?>
<?php include("../footer.html"); ?>
<script type="text/javascript">
function archivo1(evt) {
      var files = evt.target.files; // FileList object

        //Obtenemos la imagen del campo "file".
      for (var i = 0, f; f = files[i]; i++) {
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
           var reader = new FileReader();
           reader.onload = (function(theFile) {
               return function(e) {
               // Creamos la imagen.
                      document.getElementById("info1").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                      document.getElementById("info1").classList.remove('subir');
                      document.getElementById("info1").classList.add('foto');
               };
           })(f);

           reader.readAsDataURL(f);
       }



}
document.getElementById('foto1').addEventListener('change', archivo1, false);

function archivo2(evt) {
      var files = evt.target.files; // FileList object

        //Obtenemos la imagen del campo "file".
      for (var i = 0, f; f = files[i]; i++) {
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
           var reader = new FileReader();
           reader.onload = (function(theFile) {
               return function(e) {
               // Creamos la imagen.
                      document.getElementById("info2").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                      document.getElementById("info2").classList.remove('subir');
                      document.getElementById("info2").classList.add('foto');
               };
           })(f);

           reader.readAsDataURL(f);
       }



}
document.getElementById('foto2').addEventListener('change', archivo2, false);

function archivo3(evt) {
      var files = evt.target.files; // FileList object

        //Obtenemos la imagen del campo "file".
      for (var i = 0, f; f = files[i]; i++) {
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
           var reader = new FileReader();
           reader.onload = (function(theFile) {
               return function(e) {
               // Creamos la imagen.
                      document.getElementById("info3").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                      document.getElementById("info3").classList.remove('subir');
                      document.getElementById("info3").classList.add('foto');
               };
           })(f);

           reader.readAsDataURL(f);
       }



}
document.getElementById('foto3').addEventListener('change', archivo3, false);

function archivo4(evt) {
      var files = evt.target.files; // FileList object

        //Obtenemos la imagen del campo "file".
      for (var i = 0, f; f = files[i]; i++) {
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
           var reader = new FileReader();
           reader.onload = (function(theFile) {
               return function(e) {
               // Creamos la imagen.
                      document.getElementById("info4").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                      document.getElementById("info4").classList.remove('subir');
                      document.getElementById("info4").classList.add('foto');
               };
           })(f);

           reader.readAsDataURL(f);
       }



}
document.getElementById('foto4').addEventListener('change', archivo4, false);

function archivo5(evt) {
      var files = evt.target.files; // FileList object

        //Obtenemos la imagen del campo "file".
      for (var i = 0, f; f = files[i]; i++) {
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
           var reader = new FileReader();
           reader.onload = (function(theFile) {
               return function(e) {
               // Creamos la imagen.
                      document.getElementById("info5").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                      document.getElementById("info5").classList.remove('subir');
                      document.getElementById("info5").classList.add('foto');
               };
           })(f);

           reader.readAsDataURL(f);
       }



}
document.getElementById('foto5').addEventListener('change', archivo5, false);

function archivo6(evt) {
      var files = evt.target.files; // FileList object

        //Obtenemos la imagen del campo "file".
      for (var i = 0, f; f = files[i]; i++) {
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
           var reader = new FileReader();
           reader.onload = (function(theFile) {
               return function(e) {
               // Creamos la imagen.
                      document.getElementById("info6").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                      document.getElementById("info6").classList.remove('subir');
                      document.getElementById("info6").classList.add('foto');
               };
           })(f);

           reader.readAsDataURL(f);
       }



}
document.getElementById('foto6').addEventListener('change', archivo6, false);
</script>


<script type="text/javascript">
function btn_enviar_casting()
{

    	$('#correcto').css("display","none");
    	$('#correomalo').css("display","none");
    	$('#completar').css("display","none");

    	var cont = 0;

    	var nombre= $("#nombre").val();
    	var email= $("#email").val();
    	var nacionalidad= $("#nacionalidad").val();
    	var edad= $("#edad").val();
    	var telefono= $("#telefono").val();
    	var profesion= $("#profesion").val();
    	var horario= $("#horario").val();
    	var cara= $("#cara").val();
    	var book= $("#book").val();
    	var medidas= $("#medidas").val();
    	var piercing= $("#piercing").val();
    	var natural= $("#natural").val();
    	var idiomas= $("#idiomas").val();


    	if( nombre=="" || email=="" || nacionalidad=="" || edad=="" || telefono=="" || profesion=="" ||  email=="" ||   horario=="" ||  cara=="" ||  book=="" ||  medidas=="" ||  piercing=="" ||  natural=="" || idiomas=="")
    	{
              $('#completar').css("display","");  
        }
		else
		{
            var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

    		if (caract.test(email) == true)
    		{
    			var url = "../../enviar_datos_casting.php";
	        	var datastring = $("#formulario_casting").serialize();

	      		var form = $('#formulario_casting')[0];
				var data = new FormData(form);
				$.ajax({
				type: "POST",
				enctype: 'multipart/form-data',
				url: url,
				data: data,
				processData: false, // Important! contentType: false, cache: false,
				contentType: false,
				cache: false,
				beforeSend: function ()
				{
                      $('#esperar').modal('show');
                },
				success: function (data)
				{
					$('#esperar').modal('hide');

					if(data == 2)
					{
						$("#formulario_casting")[0].reset();


						$('#correcto').css("display","");

						document.getElementById("info1").innerHTML = ['Haz Click para subir una foto'].join('');
                        document.getElementById("info1").classList.remove('foto');
                        document.getElementById("info1").classList.add('subir');

						document.getElementById("info2").innerHTML = ['Haz Click para subir una foto'].join('');
                        document.getElementById("info2").classList.remove('foto');
                        document.getElementById("info2").classList.add('subir');

						document.getElementById("info3").innerHTML = ['Haz Click para subir una foto'].join('');
                        document.getElementById("info3").classList.remove('foto');
                        document.getElementById("info3").classList.add('subir');

						document.getElementById("info4").innerHTML = ['Haz Click para subir una foto'].join('');
                        document.getElementById("info4").classList.remove('foto');
                        document.getElementById("info4").classList.add('subir');

						document.getElementById("info5").innerHTML = ['Haz Click para subir una foto'].join('');
                        document.getElementById("info5").classList.remove('foto');
                        document.getElementById("info5").classList.add('subir');

						document.getElementById("info6").innerHTML = ['Haz Click para subir una foto'].join('');
                        document.getElementById("info6").classList.remove('foto');
                        document.getElementById("info6").classList.add('subir');

						$('#exito').modal('show');
					}
					else
					{  alert('No se pudo enviar contacte con el administrador');  }
			 	}
				});
    		}
    		else
    		{ $('#correomalo').css("display",""); }

        }

}
</script>
