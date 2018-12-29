<?php
require_once '../conex.php';
if (empty ($strTitle)) {$strTitle = $arreglosSeo["inicio"]["tituloseo"];}
if (empty ($strCaption)) {$strCaption = $arreglosSeo["inicio"]["metadescripcion"]; }
if (empty ($canonical)) {$canonical = $arreglosSeo["inicio"]["canomovil"]; }
if (empty ($canopc)) {$canopc = $arreglosSeo["inicio"]["canopc"]; }
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

	<?php include("cabecera.html"); ?>

	<?php include("bienvenidos.php"); ?>

	<?php include("slider.php"); ?>

	<?php include("video.php"); ?>

	<?php include("cita.php"); ?>

	<?php include("zona.php"); ?>

	<?php include("blog-slide.php"); ?>

	<?php include("footer.html"); ?>