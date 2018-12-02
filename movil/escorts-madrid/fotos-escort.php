
<style>
	.texto-blanco{color:#ffffff;}
	.texto-blanco:hover{color:#D5BD53;}

	.imgborder2{
		width:430px;
		border: 1px solid #D1A254;
			}
</style>


		<?php foreach ($resultado as $row ):	?>

		<div class="container-fluid ds" style="background-image:url(/images/fondo-chicas-o.jpg);background-position: 50% -30px;">
		<div class="row">

		<div class="col-md-12" ><a href=<?php echo "'/movil/escorts-madrid/";?><?= $row['nombre']; ?><?php echo "'";?>>
		<p style='padding-top: 6px;margin-bottom: 0px' ><img class="imgborder2" style="width:430px" src=<?= $row['imagenppal']; ?> alt=<?= $row['alt']; $i=$i+1;echo '$row' ?>></p>
		<div class="model-parameters">
		<h3 style="text-align: center;font-family: Garamond;margin-top: 0px"  class="texto-blanco">
				<?= $row['nombre']; ?>
		</h3></div></a>
		</div>
		</div>
		</div>





<?php endforeach; ?>


<!-- cita a ciegas -->
		<section class="ds parallax calltoaction section_pad1ding_100" style="background-image:url(https://eliteescortmadrid.com/wp-content/uploads/2018/04/02-min.jpg)">
		<div class="container-fluid">
		<div class="row">
		<div class="col-md-4" ><a href="/movil/servicios-cita-ciegas-elite-escorts-madrid/">
		<p style='padding-top:1px;text-align: center;' ><img class="imgborder2" src="/images/citaaciega.png" alt="Cita a ciegas"></p>
		<div class="model-parameters">
		<h3 style="text-align: center;font-family: Garamond;margin-top: 0px" class="texto-blanco">
			Cita a ciegas
									</h3></div></a>
		</div>

	</div>
</div>
</section>
