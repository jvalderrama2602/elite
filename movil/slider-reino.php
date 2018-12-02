<?php
$consul_reino = 'SELECT * FROM sliderreino';
$resul_reino= $conex->query($consul_reino);
?>
<section class="ds intro_section">
				<div class="flexslider vertical-nav">
					<ul class="slides">
						<?php foreach ($resul_reino as $row ): ?>
						<li>
							<img src="<?= $row['foto']; ?>" alt="<?php print $strTitle; ?>">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h2 class="bi1g mar1gin_0"><?= $row['texto']; ?></h2>
													<!--<h2 class="muellerhoff topmargin_5 bottommargin_50 highlight"></h2>-->
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
							<?php endforeach; ?>
					</ul>
				</div>
				<!-- eof flexslider -->
			</section>