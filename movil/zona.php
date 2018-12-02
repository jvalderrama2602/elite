<?php
$consul_zona = 'SELECT * FROM zona';
$resul_zona= $conex->query($consul_zona);
$fila = $resul_zona -> fetch_array();
?>
<!--movil-->

<section class="ds par1allax calltoaction section_padding_1" style="background-image: url(/movil/images/zonaamigaopaca.jpg);">
				<div class="container">
					<div class="row topmargin_610 bottommargin_610">
						<div class="col-sm-12 text-center">
							<?php echo $fila['titulo'];  ?>
							<div class="row">
								<div class="col-md-offset-2 col-md-8 text-center">
									<?php echo $fila['texto'];  ?>
								</div>
							</div>
							<h2 style="font-family: 'Herr Von Muellerhoff', cursive;
	font-weight: 400;" class="muellerhoff topmargin_5 bottommargin_50 highlight">Julia Rey</h2>
<p style="text-align: center" class="entry-excerpt bottommargin_30"><a href="/movil/zona-amiga/" class="theme_button color1 topmar1gin_20"><i class="rt-icon2-whatsapp"> </i>Ir a Zona Amiga</a>
													</p>


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
