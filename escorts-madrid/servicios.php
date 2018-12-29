<div class="container-fluid negro">
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
									Puedes pagar con: <i style="font-size:24px" class="fa fa-cc-visa"></i>
									<i style="font-size:24px" class="fa fa-cc-mastercard"></i>
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
									<img src="/images/PEGATINA.png">
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
			</div>
		</div>
	</div>
</div>