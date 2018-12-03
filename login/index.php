<?php
require_once '../conex.php';
/*pc*/
$nombre1="login";
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
<body>
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

<?php include("../cabecera.html"); ?>



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
								<h1 class="big topmargin_10 bottommargin_30">
													Login
												</h1>
								<form style="padding-bottom: 30px;" role="form" name="loginform" id="loginform" method="POST" action="../promociones.php">
								<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
										<h3 class="topmargin_0 bottommargin_30">Ingresar</h3>
									</div>
								</div>
							</div>

						<div class="col-md-6">

							<div class="form-group">
								<label for="exampleInputEmail1">Usuario</label>
								<input type="text" class="form-control" id="usuario_login" name="usuario" />
							</div>

						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Password</label>
								<input type="password" class="form-control" id="password_login" name="password" maxlength="15" />
							</div>

						</div>
						<div class="col-md-12">
							<p>No puedes acceder a tu cuenta, <a href="javascript:void(0)" onclick="olvido_pass()">Olvido su clave</a></p>
						</div>

						<div style="text-align: center;margin-top: 30px;margin-bottom: 30px">
			<button style="margin-top: 50px" type="button" class="theme_button color1" id="btn-login">Ingresar</button>
			</form>

			<div id="x1" style="display: none;">
				<span style="color: white;">Complete todos los campos</span>
			</div>
			<div id="x2" style="display: none;">
				<span style="color: white;">Usuario no se encuentra</span>
			</div>
			<div id="x3" style="display: none;">
				<span style="color: white;">El Usuario no se encuentra autorizado</span>
			</div>
			<div id="x4" style="display: none;">
				<span style="color: white;">El Password no coincide con el de nuestra Base de Datos</span>
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


<!-------    VENTANA MODAL    --->
<div class="modal fade" id="cambioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Recupera tu Clave</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000">
        <form name="formulario_cambio_cambio" id="formulario_cambio_cambio">
          <div class="form-group">
            <label for="exampleInputPassword1" style="color: #ffffff">Email <span style="color: #C2A143">*</span></label>
			<input type="email" class="form-control" id="cambio_pass_email" name="cambio_pass_email" />
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" style="color: #ffffff">Contraseña <span style="color: #C2A143">*</span></label>
			<input type="password" class="form-control" id="cambio_pass_1" name="cambio_pass_1" />
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" style="color: #ffffff">Repetir Contraseña <span style="color: #C2A143">*</span></label>
			<input type="password" class="form-control" id="cambio_pass_2" name="cambio_pass_2" />
          </div>
        </form>
      </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" id="btn_olvido_pass">Grabar Cambio</button>
      </div>
    </div>
  </div>
</div>
<div style="padding-top: 5px;background: #000000;">
<!-------  FIN  VENTANA MODAL    --->


<!-------    VENTANA MODAL CAMBIO DE PASSWORD    --->
<div class="modal fade" id="modal_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 15px;border-bottom: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);  color: #FFDF9C; ">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">Cambio de Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #000000">
        <form name="formulario_cambio_pass" id="formulario_cambio_pass">
          <div class="form-group">
            <label for="exampleInputPassword1" style="color: #ffffff">Email <span style="color: #C2A143">*</span></label>
			<input type="email" class="form-control" id="cambio_pass2_email" name="cambio_pas2s_email" />
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" style="color: #ffffff">Contraseña <span style="color: #C2A143">*</span></label>
			<input type="text" class="form-control" id="cambio_pass2_1" name="cambio_pass2_1" />
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" style="color: #ffffff">Repetir Contraseña <span style="color: #C2A143">*</span></label>
			<input type="text" class="form-control" id="cambio_pass2_2" name="cambio_pass2_2" />
          </div>
        </form>
      </div>
      <div class="modal-footer" style="border-top: 1px solid #332D1F;background-image: url(/images/otrofondoemparejado.jpg);color: #FFDF9C; ">
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0; color: #000;background-color: #FFDF9C;" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary" style="margin: 0 0px 0px 0;color: #000;background-color: #FFDF9C;" onclick="btn_cambio_pass()">Grabar Cambio</button>
      </div>
    </div>
  </div>
</div>
<div style="padding-top: 5px;background: #000000;">
<!-------  FIN  VENTANA MODAL CAMBIO DE PASSWORD  --->


<?php include("../slider.php"); ?>
</div>

<?php include("../bienvenidos.php"); ?>
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


<!--------  GRABAR PASS       ---->
<script type="text/javascript">
function btn_cambio_pass() {

	var email = $("#cambio_pass2_email").val();
	var pass1 = $("#cambio_pass2_1").val();
	var pass2 = $("#cambio_pass2_2").val();


	if(email == "" || pass1 == "" || pass2 == "")
	{
		alert('complete todos los campos');
    }
    else
    {
    	if(pass1!=pass2)
    	{
			alert('Los Password son diferentes');
	    }
	    else
	    {
			var datastring = $("#formulario_cambio_pass").serialize();

			$.ajax({

				url: "../cambio_pass2.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	if(data==1)
		        	{
		        		alert('El Email no exite');
		        	}
		        	else
		        	{
		        		$("#cambio_pass2_email").val("");
						$("#cambio_pass2_1").val("");
						$("#cambio_pass2_2").val("");

		        		alert('El cambio de Password a sido exitoso');

		        		$('#Modal_password').modal('hide');
		        	}
		        }
			});
		}
    }
}
</script>
<!--------  FIN GRABAR PASS       ---->

<!--------  OLVIDO PASSWORD       ---->
<script type="text/javascript">
function olvido_pass()
{

	$('#modal_password').modal('show');
}
</script>
<!--------  FIN OLVIDO PASSWORD       ---->

<!--------  CAMBIOD PASS       ---->
<script type="text/javascript">
$( "#btn_cambio_pass" ).on( "click", function() {

	var email = $("#cambio_pass_email").val();
	var pass1 = $("#cambio_pass_1").val();
	var pass2 = $("#cambio_pass_2").val();


	if(email == "" || pass1 == "" || pass2 == "")
	{
		alert('complete todos los campos');
    }
    else
    {
    	if(pass1!=pass2)
    	{
			alert('Los Password son diferentes');
	    }
	    else
	    {
			var datastring = $("#formulario_cambio_cambio").serialize();

			$.ajax({

				url: "../cambio_pass.php",
		        type: "post",
		        data: datastring ,
		        async: false,
		        success: function(data)
		        {
		        	alert(data);
		        	if(data==1)
		        	{
		        		alert('El Email no exite');
		        	}
		        	else
		        	{
		        		$("#cambio_pass_email").val("");
						$("#cambio_pass_1").val("");
						$("#cambio_pass_2").val("");

		        		alert('El cambio de Password a sido exitoso');

		        		$('#cambioModal').modal('hide');
		        	}
		        }
			});
		}
    }
});
</script>
<!--------  FIN CAMBIOD PASS       ---->
<!--------  LOGIN       ---->
<script type="text/javascript">
$( "#btn-login" ).on( "click", function() {

	var nombre = $("#usuario_login").val();
	var password = $("#password_login").val();

	if(nombre == "" || password == "" )
	{
		$('#x1').css("display","");
		$('#x2').css("display","none");
		$('#x3').css("display","none");
		$('#x4').css("display","none");
    }
    else
    {
		$('#x1').css("display","none");
		$('#x2').css("display","none");
		$('#x3').css("display","none");
		$('#x4').css("display","none");

		var datastring = $("#loginform").serialize();

		$.ajax({

			url: "verificar_clientes.php",
	        type: "post",
	        data: datastring ,
	        async: false,
	        success: function(data)
	        {

				if(data==2){ $('#x2').css("display",""); }
				if(data==3){ $('#x3').css("display",""); }
				if(data==4){ $('#x4').css("display",""); }
				if(data==5)
				{
					$("#usuario_login").val("");
					$("#password_login").val("");

					$('#loginform').submit();
				}
				if(data==6)
				{
					$('#cambioModal').modal('show');
				}

	        }
		});
    }
});
</script>
<!--------  FIN LOGIN       ---->