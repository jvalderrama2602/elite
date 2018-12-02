<?php
require_once '../conex.php';
/*zona amiga pc*/
$nombre1="zona";
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


<section class="ds parallax calltoaction section_padding_100" style="background-image: url(/images/estudio.jpg)">
				<div class="container">
					<div class="row topmargin_60 bottommargin_60">
						<div class="col-sm-12 text-center">
							<h1 class="extra-big topmargin_0 bottommargin_30">Zona
								<span class="highlight">Amiga</span>
							</h1>
							<div class="row">
								<div class="col-md-offset-2 col-md-8 text-center">

			<p id="p" class="entry-excerpt bottommargin_30">Zona amiga ha sido creada para agradecer y premiar la confianza y el cariño que habéis depositado en el equipo de Elite Escort Madrid, y por el vínculo especial que yo misma he establecido con los caballeros que tengo la suerte de tratar. A todos vosotros os ofrezco la posibilidad de inscribiros y convertiros en amigos vip de Elite Escort Madrid para poder sorprenderos con magnificas promociones, increíbles descuentos y fantásticos regalos que junto al cariño de nuestras de escorts os esperan para cómo siempre cumplir las fantasías que os gusta realizar, daros el cariño que os merecéis y convertiros en reyes del placer, para vivir esos momentos de relajación y desconexión por los que merece la pena vivir y que Elite Escort Madrid está encantada de ofreceros.</p>

								</div>
							</div>
							<h2 style="font-family: 'Herr Von Muellerhoff', cursive;font-weight: 400;" class="muellerhoff topmargin_5 bottommargin_50 highlight">Julia Rey</h2>
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

<section class="ds parallax calltoaction section_pad1ding_100" style="background-image:url(/images/background.jpg)">
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
								<label for="exampleInputEmail1">Nombre o Alias <span style="color: #C2A143">*</span></label>
								<input type="text" class="form-control" id="nombre_zona" name="nombre" />
							</div>

						</div>
						<div class="col-md-6">

							<div class="form-group">
								<label for="exampleInputPassword1">Email <span style="color: #C2A143">*</span></label>
								<input type="email" class="form-control" id="email_zona" name="email" />
							</div>

						</div>

						<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
								<label for="exampleInputEmail1">Usuario <span style="color: #C2A143">*</span></label>
								<input type="text" class="form-control" id="usuario_zona" name="usuario" maxlength="15" />
							</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
								<label for="exampleInputPassword1">Contraseña <span style="color: #C2A143">*</span></label>
								<input type="password" class="form-control" id="pass1_zona" name="pass1" />
							</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
								<label for="exampleInputPassword1">Repetir Contraseña <span style="color: #C2A143">*</span></label>
								<input type="password" class="form-control" id="pass2_zona" name="pass2" />
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


<?php include("../slider.php"); ?>
<?php include("../bienvenida.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>

<?php include("../zona.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>
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

					url: "../registrar_clientes.php",
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


