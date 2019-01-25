<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>
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
							<?php 
							if(!$row['video']=="" ){ ?>

							<p style="text-align: center;">
							<a href="#videoStory" class="theme_button color1 topmargin_20" id="videoLink">Ver Video  <i class="fa fa-play-circle" aria-hidden="true">&nbsp;</i></a></p>
							<div id="videoStory" class="mfp-hide" style="max-width: 75%; margin: 0 auto;">
							<!--<iframe width="100%" height="600px" src="https://eliteescortmadrid.com/images/Carla/CARLA.mp4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
							<video width="100%" controls controlsList="nodownload">
  							<source src="<?= $row['video'] ?>" type="video/mp4">
							</video>
							</div>
							<script type="text/javascript">
							$('#videoLink')
							.magnificPopup({
								type:'inline',
								midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
							})
							</script>
						<?php } ?>

						</div>
					</div>
				</div>
</section>
<?php endforeach; ?>