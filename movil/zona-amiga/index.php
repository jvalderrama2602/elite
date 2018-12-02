<?php
require_once '../../conex.php';
/*zona amiga movil*/
$nombre1="zona";
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
<html class="no-js">
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
													<h2 class="extra-big topmargin_0 bottommargin_30">Zona
								<span class="highlight">Amiga</span>
												</div>
											<div class="intro-layer" data-animation="slideExpandUp">
													<p class="entry-excerpt bottommargin_30">
													Zona amiga ha sido creada para agradecer y premiar la confianza y el cariño que habéis depositado en el equipo de Elite Escort Madrid, y por el vínculo especial que yo misma he establecido con los caballeros que tengo la suerte de tratar. A todos vosotros os ofrezco la posibilidad de inscribiros y convertiros en amigos vip de Elite Escort Madrid para poder sorprenderos con magnificas promociones, increíbles descuentos y fantásticos regalos que junto al cariño de nuestras de escorts os esperan para cómo siempre cumplir las fantasías que os gusta realizar, daros el cariño que os merecéis y convertiros en reyes del placer, para vivir esos momentos de relajación y desconexión por los que merece la pena vivir y que Elite Escort Madrid está encantada de ofreceros.</p>
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

<section class="ds parallax calltoaction section_pad1ding_100" style="background-image:url(https://eliteescortmadrid.com/wp-content/uploads/2018/04/02-min.jpg)">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">

						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<article class="post format-small-image with_background">
								<h2 class="big topmargin_10 bottommargin_30">
													Registrate
												</h2>
								<form style="padding-bottom: 30px;" role="form" name="formulario_zona" id="formulario_zona" method="POST">
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
								<input type="text" class="form-control" id="nombre_zona" name="nombre" />
							</div>

						</div>
						<div class="col-md-6">

							<div class="form-group">
								<label for="exampleInputPassword1">Email</label>
								<input type="email" class="form-control" id="email_zona" name="email" />
							</div>

						</div>

						<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
								<label for="exampleInputEmail1">Usuario</label>
								<input type="text" class="form-control" id="usuario_zona" name="usuario" maxlength="15" />
							</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
								<label for="exampleInputPassword1">Contraseña</label>
								<input type="text" class="form-control" id="pass1_zona" name="pass1" />
							</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
								<label for="exampleInputPassword1">Repetir Contraseña</label>
								<input type="text" class="form-control" id="pass2_zona" name="pass2" />
							</div>
		</div>
	</div>
</div>

						<div style="text-align: center;margin-top: 30px;margin-bottom: 30px">
			<button type="button" class="theme_button color1" id="btn_entrar">Registrar</button>
			</form>
			<div id="x11" style="display: none;">
				<span style="color: white;">Complete todos los campos</span>
			</div>
			<div id="x12" style="display: none;">
				<span style="color: white;">El Usuario y/o Email ya existe</span>
			</div>
			<div id="x13" style="display: none;">
				<span style="color: white;">El Email no esta bien escrito</span>
			</div>
			<div id="x14" style="display: none;">
				<span style="color: white;">El Formulario fue Registrado Correctamente, espere el email de aceptación como MIEMBRO VIP</span>
			</div>
			<div id="x15" style="display: none;">
				<span style="color: white;">Los password no coinciden</span>
			</div>

			<div id="esperar">
				<span style="color: white;"></span>
			</div>
		</div>
			<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
									<!--	<h3 class="topmargin_0 bottommargin_30">Fotografías</h3>-->
						<p style="text-align: center;">Elite Escorts Madrid garantiza que la información recibida será gestionada únicamente para ofrecer nuestras ofertas, de forma confidencial y discreta.</p>
									</div>
								</div>
							</div>



		<div id="loading"></div>
		<div id="result"></div>

							</article>
						</div>
					</div>
				</div>

			</section>


<?php include("../bienvenida.php"); ?>
<?php include("../cita.php"); ?>
<?php include("../zona.php"); ?>
<?php include("../blog-slide.php"); ?>
<?php include("../footer.html"); ?>


<!--------  ZONA AMIGA       ---->
<script type="text/javascript">
$( "#btn_entrar" ).on( "click", function() {

	var nombre = $("#nombre_zona").val();
	var email = $("#email_zona").val();
	var usuario = $("#usuario_zona").val();
	var pass1 = $("#pass1_zona").val();
	var pass2 = $("#pass2_zona").val();

	if(nombre == "" || email == "" || usuario == "" || pass1 == "" || pass2 == "")
	{
		$('#x11').css("display","");
		$('#x12').css("display","none");
		$('#x14').css("display","none");
		$('#x15').css("display","none");
    }
    else
    {

    	if(pass1 != pass2)
    	{
			$('#x11').css("display","none");
			$('#x12').css("display","none");
			$('#x14').css("display","none");
			$('#x15').css("display","");
    	}
    	else
    	{
    		var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

    		if (caract.test(email) == true){

        		$('#x11').css("display","none");
				$('#x12').css("display","none");
				$('#x14').css("display","none");
				$('#x15').css("display","none");

	    		
				var datastring = $("#formulario_zona").serialize();

				$.ajax({

					url: "../../registrar_clientes.php",
			        type: "post",
			        data: datastring ,
			        async: false,
			        beforeSend: function () {
                        $("#esperar").html("Procesando, espere por favor...");
                },
			        success: function(data)
			        {
						if(data == 1){ $('#x12').css("display",""); }
						if(data == 2)
						{
							$('#x14').css("display","");

							$("#nombre_zona").val("");
							$("#email_zona").val("");
							$("#usuario_zona").val("");
							$("#pass1_zona").val("");
							$("#pass2_zona").val("");
							$("#esperar").html("");
						}
			        }
				});

    		} else {
        		alert('La direccón de correo no es válida');
    		}

    	}
    }

});
</script>


<!--------  FIN ZONA AMIGA   ---->
