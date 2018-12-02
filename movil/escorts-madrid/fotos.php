<?php
$consulta = "SELECT * FROM escorts WHERE nombre='".$nombre2."'";
$resultado= $conex->query($consulta);
 ?>
<style type="text/css">
	.imgborder{
		width:430px;
		border: 1px solid #D1A254;
			}
</style>




		<?php
foreach ($resultado as $row ):	?>
<div class="container-fluid" style="background-image:url(/images/fondo-chicas-o.jpg);background-position: 50% -30px;">
	<div class="row">
		<div class="col-md-12">
		<p style='padding-top: 6px;margin-bottom: 0px' ><img class="imgborder" src=<?= $row['imagen1']; ?> alt=<?= $row['alt']; ?>></p>
		</div>
	</div>
</div>
<div class="container-fluid" style="background-image:url(/images/fondo-chicas-o.jpg);background-position: 50% -30px;">
	<div class="row">
		<div class="col-md-12">
		<p style='padding-top: 6px;margin-bottom: 0px' ><img class="imgborder" src=<?= $row['imagen2']; ?> alt=<?= $row['alt']; ?>></p>
		</div>
	</div>
</div>
<div class="container-fluid" style="background-image:url(/images/fondo-chicas-o.jpg);background-position: 50% -30px;">
	<div class="row">
		<div class="col-md-12">
		<p style='padding-top: 6px;margin-bottom: 0px' ><img class="imgborder" src=<?= $row['imagen3']; ?> alt=<?= $row['alt']; ?>></p>
		</div>
	</div>
</div>
<div class="container-fluid" style="background-image:url(/images/fondo-chicas-o.jpg);background-position: 50% -30px;">
	<div class="row">
		<div class="col-md-12">
		<p style='padding-top: 6px;margin-bottom: 0px' ><img class="imgborder" src=<?= $row['imagen4']; ?> alt=<?= $row['alt']; ?>></p>
		</div>
	</div>
</div>
<div class="container-fluid" style="background-image:url(/images/fondo-chicas-o.jpg);background-position: 50% -30px;">
	<div class="row">
		<div class="col-md-12">
		<p style='padding-top: 6px;margin-bottom: 0px' ><img class="imgborder" src=<?= $row['imagen5']; ?> alt=<?= $row['alt']; ?>></p>
		</div>
	</div>
</div>
<div class="container-fluid" style="background-image:url(/images/fondo-chicas-o.jpg);background-position: 50% -30px;">
	<div class="row">
		<div class="col-md-12">
		<p style='padding-top: 6px;margin-bottom: 0px' ><img class="imgborder" src=<?= $row['imagen6']; ?> alt=<?= $row['alt']; ?>></p>
		</div>
	</div>
</div>
<div class="container-fluid" style="background-image:url(/images/fondo-chicas-o.jpg);background-position: 50% -30px;">
	<div class="row">
		<div class="col-md-12">
		<p style='padding-top: 6px;margin-bottom: 0px' ><img class="imgborder" src=<?= $row['imagen7']; ?> alt=<?= $row['alt']; ?>></p>
		</div>
	</div>
</div>
<div class="container-fluid" style="background-image:url(/images/fondo-chicas-o.jpg);background-position: 50% -30px;">
	<div class="row">
		<div class="col-md-12">
		<p style='padding-top: 6px;margin-bottom: 0px' ><img class="imgborder" src=<?= $row['imagen8']; ?> alt=<?= $row['alt']; ?>></p>
		</div>
	</div>
</div>
<div class="container-fluid" style="background-image:url(/images/fondo-chicas-o.jpg);background-position: 50% -30px;">
	<div class="row">
		<div class="col-md-12">
		<p style='padding-top: 6px;margin-bottom: 0px' ><img class="imgborder" src=<?= $row['imagen9']; ?> alt=<?= $row['alt']; ?>></p>
		</div>
	</div>
</div>

<?php endforeach; ?>
