
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
		foreach ($resultado as $row ):							?>
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


		<div class='col-md-4' >
		<p style='padding-top:1px;text-align: center;' ><img class='imgborder2' src='/images/proximamente01.png' alt='Cita a ciegas'></p>
		<div class='model-parameters'>
		<h3 style='text-align: center;font-family: Garamond;margin-top: 0px' class='texto-blanco'>
			Próximamente
		</h3></div>
		</div>

		<!--<div class='col-md-4' >
		<p style='padding-top:1px;text-align: center;' ><img class='imgborder2' src='/images/proximamente02.png' alt='Cita a ciegas'></p>
		<div class='model-parameters'>
		<h3 style='text-align: center;font-family: Garamond;margin-top: 0px' class='texto-blanco'>
			Próximamente
		</h3></div>
		</div>-->
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
