
<?php foreach ($resultado as $row ): ?>
<?php $texto=str_replace('"','',$row['imagenmovil']); ?>
<section class="ds parallax calltoaction section_padding_100" style="background-image: url(<?php echo $texto; ?>)">
				<div class="container">
					<div class="row topmargin_60 bottommargin_60">
						<div class="col-sm-12 text-center">
							<h2 class="extra-big2 topmargin_0 bottommargin_30">
								<span class="highlight"><?= $row['nombre']; ?></span>

							</h2>
								<h1 style="font-family: 'Herr Von Muellerhoff', cursive; font-size: 30px" class="muellerhoff topmargin_5 bottommargin_50 highlight"><?= $row['titulo']; ?></h1>


							<div class="row">
								<div class="col-md-offset-2 col-md-8 text-center">
									<?= $row['contenido']; ?>
								</div>
							</div>
							<p style="text-align: center" class="entry-excerpt bottommargin_30">
							<strong style="color:#ffdf9c">Reserva la cita cómo mínimo con una hora de antelación.</strong><br>
							<strong style="color:#ffdf9c"><?= $row['horario']; ?></strong><br>
							<a href="https://api.whatsapp.com/send?phone=34693608861" class="theme_button color1 topmargin_20"><i class="rt-icon2-whatsapp"> </i>Contáctame</a></p>
						</div>
					</div>
				</div>
</section>
<?php endforeach; ?>