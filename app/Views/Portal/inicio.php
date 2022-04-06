<?= $this->extend("Plantillas_base/Portal_base") ?>

<!-- CSS-->
<?= $this->section("css")?>
<?= $this->endSection();?>   

<!-- CONTENIDO-->
<?= $this->section("contenido")?>

<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Lo más <span>Nuevo</span></h3>
						<p>Celulares Enero 2022</p>
						<a class="hvr-outline-out button2" href="<?= route_to ('Samsung');?>">Compra ahora </a>
					</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Las mejores <span>Marcas</span></h3>
						<p>Los mejores modelos</p>
						<a class="hvr-outline-out button2" href="<?= route_to ('Samsung');?>">Compra a hora </a>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Siguiente</span>
		</a>
		<!-- The Modal -->
    </div> 
	<!-- //banner -->
    <div class="banner_bottom_agile_info">
	    <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
    	           <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'bottom1.jpg');?>" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>amsung</h3>
								<p>Nuevos modelos</p>
							</figcaption>			
						</figure>
					</div>
					 <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'bottom2.jpg');?>" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>A</span>pple</h3>
								<p>Nuevos modelos</p>
							</figcaption>			
						</figure>
					</div>
					<div class="clearfix"></div>
		    </div> 
		 </div> 
    </div>

<!-- /new_arrivals --> 
	<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">Nuevos<span>Modelos</span></h3>		
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li> Samsung</li>
							<li> Apple</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'SA52.jpeg');?>" alt="" class="pro-image-front">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'SA52.jpeg');?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?= route_to('Producto');?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">Nuevo</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="<?= route_to('Producto');?>">Samsung Galaxy A52 </a></h4>
										<div class="info-product-price">
											<span class="item_price">$7,380.00</span>
											<del>$7,980.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Formal Blue Shirt" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Agregar a carrito" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<!--//tab_one-->
						<!--/tab_two-->
						<div class="tab2">
							 <div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'IA8.jpeg');?>" alt="" class="pro-image-front">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'IA8.jpeg');?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?= route_to('Producto');?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">Nuevo</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="<?= route_to('Producto');?>">IPhone Apple 8</a></h4>
										<div class="info-product-price">
											<span class="item_price">$4,498.97</span>
											<del>$5,498.97</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="A-line Black Skirt" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Agregar al carrito" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	<!-- //new_arrivals --> 
	<!-- /we-offer -->
		<div class="sale-w3ls">
			<div class="container">
				<h6>Ofrecemos hasta <span>20%</span> de descuento en compras mayores a $30,000.00</h6>
 
				<a class="hvr-outline-out button2" href="<?= route_to('Samsung');?>">Compra a hora </a>
			</div>
		</div>
	<!-- //we-offer -->
<?= $this->endSection();?>  

<!-- JS-->
<?= $this->section("js")?>
<?= $this->endSection();?> 



