<?php
require_once '../conex.php';
/*movil*/
$consulta30 = 'SELECT * FROM escorts WHERE status="activo" ORDER BY RAND()';
$resultado30= $conex->query($consulta30);
 ?>


<section class="ds ms intro_section page_mainslider">
	<div style="margin-top: 1px" id="slider-7"  class="owl-carousel page_maincarousel" data-margin="0" data-nav="false" data-loop="true" data-items="4">
				<?php	foreach ($resultado30 as $row ):	?>
					<div>
						<div class="vertical-item maincarousel-item content-absolute cs">
							<div class="item-media">
								<img src=<?= $row['imagenppal']; ?> alt=<?= $row['alt']; ?>>
								<div class="media-links">
									<a class="abs-link" title=<?php echo "'";?><?= $row['titulo']; ?><?php echo "'";?> href=<?php echo "'/movil/escorts-madrid/";?><?= $row['nombre']; ?><?php echo "'";?>></a>
								</div>
							</div>
							<div class="item-content text-center grey gradient_bg_goriz">
								<div class="bg_overlay"></div>
								<div class="model-parameters">
									<p style="font-size: 16px;margin-bottom: 0px;"><a href=<?php echo "'/movil/escorts-madrid/";?><?= $row['nombre']; ?><?php echo "'";?>><?= $row['nombre']; ?></a></p>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
</section>
