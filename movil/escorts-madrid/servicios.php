<section class="ds parallax calltoaction section_pad1ding_100" style="background-image:url(https://eliteescortmadrid.com/wp-content/uploads/2018/04/02-min.jpg)">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 borde">
			<div class="with_background2 page-meta topmargin_1">

								<div class="widget widget_tag_cloud2">

									<h3 class="widget-title">Información</h3>


								</div>
								<div class="media small-teaser">
									<li class="list-item">
									<strong>Estatura: </strong><?= $row['estatura']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Medidas: </strong><?= $row['busto']; ?>/<?= $row['cintura']; ?>/<?= $row['cadera']; ?>
									</li>
								</div>

								<div class="media small-teaser">
								<li>
									<strong>Edad: </strong><?= $row['edad']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Ojos: </strong><?= $row['ojos']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Talla: </strong><?= $row['talla']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Calzado: </strong><?= $row['calzado']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Idioma: </strong><?= $row['idioma']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Nacionalidad: </strong><?= $row['nacionalidad']; ?>
									</li>
								</div>
			</div>
		</div>
		<div class="col-md-3 borde">
			<div class="with_background2 page-meta topmargin_1">
								<div class="widget widget_tag_cloud2">
									<h3 class="widget-title">Tarifas</h3>
								</div>
								<?php
										$tarifa= explode(',',$row['tarifas']);
										$cantidad= sizeof($tarifa);
										for($i = 0; $i < $cantidad;$i++)
										{
											echo "<div class='media small-teaser'>
									<li class='list-item'>
									$tarifa[$i]<strong>€</strong>
									</li>
								</div>";
										}
										  ?>
									<div class='media small-teaser'>
									<li class='list-item'>
									<h3 class="widget-title">Puedes pagar con:</h3><br>
									<a style="color:#000000;background:#ffdf9c;border: 1px solid #ffdf9c " href="https://eventosejecutivosmadrid.com/producto/servicio-de-evento/" target="_blank" class="theme_button color1 topmar1gin_20"><i style="font-size:24px" class="fa fa-cc-visa"></i>
									<i style="font-size:24px" class="fa fa-cc-mastercard"></i></a>
									</li>

								</div>
			</div>
		</div>
		<div class="col-md-3 borde">
			<div class="with_background2 page-meta topmargin_1">
								<div class="widget widget_tag_cloud2">
									<h3 class="widget-title">Servicios</h3>
								</div>
								<?php
										$serv= explode(',',$row['Servicios']);
										$cantidad= sizeof($serv);

										for($i = 0; $i < $cantidad;$i++)
										{
											echo "<div class='media small-teaser'>
									<li class='list-item'>
									 $serv[$i]
									</li>
								</div>"
								;
										}
										  ?>

										  <div class='media small-teaser'>
									<li class='list-item'>
									Otros servicios consultar
									</li>

								</div>"
			</div>
		</div>
		<div class="col-md-3 borde">
			<div class="with_background2 page-meta topmargin_1">
								<div class="widget widget_tag_cloud2">
									<h3 class="widget-title">Me gusta</h3>
								</div>

<?php
										$gusto= explode(',',$row['megusta']);
										$cantidad= sizeof($gusto);

										for($i = 0; $i < $cantidad;$i++)
										{
											echo "<div class='media small-teaser'>
									<li class='list-item'>
									 $gusto[$i]
									</li>
								</div>";
										}

										  ?>
<p style="text-align: center;padding-top: 20px;">


									<img src="/images/PEGATINA.png">
								</p>
			</div>
		</div>
	</div>
</div>
</section>
