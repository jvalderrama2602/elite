<?php
$consul_bellas = 'SELECT * FROM bellas';
$resul_bellas= $conex->query($consul_bellas);
$filabellas = $resul_bellas -> fetch_array();
?>
<section class="ds parallax calltoaction section_padding_100" style="background-image: url(<?php echo $filabellas['background'];  ?>)">
				<div class="container">
					<div class="row topmargin_60 bottommargin_60">
						<div class="col-sm-12 text-center">
							<?php echo $filabellas['titulo'];  ?>
							<div class="row">
								<div class="col-md-offset-2 col-md-8 text-center">
									<?php echo $filabellas['texto'];  ?>
								</div>
							</div>
							<div class="widget widget_mailchimp topmargin_20">
								<form class="signup form-inline" action="/" method="get">
									<!--<div class="form-group">
										<input name="email" type="email" class="mailchimp_email form-control" placeholder="Email address">
									</div>-->
									<!--<button type="submit" class="theme_button input_button">Send</button>-->
									<div class="response"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
</section>