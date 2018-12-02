<?php
require_once 'conex.php';
/*pc*/
$consulta = 'SELECT * FROM escorts WHERE status="activo" ORDER BY RAND()';
$resultado= $conex->query($consulta);
 ?>


<section class="ds ms intro_section page_mainslider">
				<div id="slider-6" class="owl-carousel page_maincarousel" data-margin="0" data-nav="true" data-loop="true" data-items="4">
				<?php foreach ($resultado as $row ): ?>
					<div>
						<div class="vertical-item maincarousel-item content-absolute cs">
							<div class="item-media">
								<img src=<?= $row['imagenppal']; ?> alt=<?= $row['alt']; ?>>
								<div class="media-links">
									<a class="abs-link" title=<?php echo "'";?><?= $row['titulo']; ?><?php echo "'";?> href=<?php echo "'/movil/escorts-madrid/";?><?= strtolower($row['nombre']); ?><?php echo "'";?>></a>
								</div>
							</div>
							<div class="item-content text-center grey gradient_bg_goriz">
								<div class="bg_overlay"></div>
								<div class="model-parameters">
									<h2>
									<a href=<?php echo "'/movil/escorts-madrid/";?><?= strtolower($row['nombre']); ?><?php echo "'";?>><?= $row['nombre']; ?></a>
									</h2>

								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
</section>
