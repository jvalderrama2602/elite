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
<section class="ds parallax calltoaction section_pad1ding_100" style="background-image:url(/images/background.jpg)">

<div class="container-fluid">
	<div class="row">

		<?php
foreach ($resultado as $row ):
							?>
		<div class="col-md-4">
		<img class="imgborder" src=<?= $row['imagen1']; ?> alt=<?= $row['alt']; ?>>
		</div>
		<div class="col-md-4">
		<img class="imgborder" src=<?= $row['imagen2']; ?> alt=<?= $row['alt']; ?>>
		</div>
		<div class="col-md-4">
		<img class="imgborder" src=<?= $row['imagen3']; ?> alt=<?= $row['alt']; ?>>
		</div>
<?php endforeach; ?>
	</div>
</div>

<div style="padding-top: 30px;background:transparent;">

</div>
<div class="container-fluid">
	<div class="row">
		<?php foreach ($resultado as $row ): ?>
		<div class="col-md-4">
		<img class="imgborder" src=<?= $row['imagen4']; ?> alt=<?= $row['alt']; ?>>
		</div>
		<div class="col-md-4">
		<img  class="imgborder" src=<?= $row['imagen5']; ?> alt=<?= $row['alt']; ?>>
		</div>
		<div class="col-md-4">
		<img class="imgborder" src=<?= $row['imagen6']; ?> alt=<?= $row['alt']; ?>>
		</div>
	<?php endforeach; ?>
	</div>
</div>
<div style="padding-top: 30px;background: transparent;">

</div>

<div class="container-fluid">
	<div class="row">
		<?php foreach ($resultado as $row ): ?>
		<div class="col-md-4">
		<img class="imgborder" src=<?= $row['imagen7']; ?> alt=<?= $row['alt']; ?>>
		</div>
		<div class="col-md-4">
		<img class="imgborder" src=<?= $row['imagen8']; ?> alt=<?= $row['alt']; ?>>
		</div>
		<div class="col-md-4">
		<img class="imgborder" src=<?= $row['imagen9']; ?> alt=<?= $row['alt']; ?>>
		</div>
		<?php endforeach; ?>
	</div>
</div>
</section>