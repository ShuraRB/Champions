<?= $this->extend("Plantillas_base/Portal_base") ?>

<!-- CSS-->
<?= $this->section("css")?>
<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSOS_PORTAL_CSS. 'jquery-ui.css');?>">
<?= $this->endSection();?>   

<!-- CONTENIDO-->
<?= $this->section("contenido")?>

<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>SAMSUNG</h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Inicio</a><i>|</i></li>
								<li>Categorias<i>|</i>Samsung</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
         <!-- mens -->
		 <div class="col-md-4 products-left">
			<div class="filter-price">
				<h3>Filtrar por <span>Precio</span></h3>
					<ul class="dropdown-menu6">
						<li>                
							<div id="slider-range"></div>							
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>			
					</ul>
			</div>
			<div class="css-treeview">
				<h4>Categoriías</h4>
				<ul class="tree-list-pad">
					<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Samsung</label>
						<ul>
							<li><input type="checkbox" id="item-0-0" /><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Modelos 2022</label>
								<ul>
									<li><a href="<?= route_to('Producto');?>">Samsung Galaxy A12</a></li>
	
								</ul>
							</li>
							<li><input type="checkbox"  id="item-0-1" /><label for="item-0-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Modelos 2021</label>
								<ul>
									<li><a href="<?= route_to('Producto');?>">Samsung Galaxy A32</a></li>

								</ul>
							</li>
							<li><input type="checkbox"  id="item-0-2" /><label for="item-0-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Otros años</label>
								<ul>
									<li><a href="<?= route_to('Producto');?>">Samsung Galaxy S9</a></li>
							
								</ul>
							</li>
						</ul>
					</li>
					<li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Apple</label>
						<ul>
							<li><input type="checkbox" checked="checked" id="item-1-0" /><label for="item-1-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Modelos 2022</label>
								<ul>
									<li><a href="<?= route_to('Producto');?>">Iphone 11</a></li>
						
								</ul>
							</li>
							
						</ul>
					</li>
					
						</ul>
					</li>
				</ul>
			</div>
			
		</div>
		<div class="col-md-8 products-right">
			<h5>Productos</h5>
			<div class="sort-grid">
				<div class="sorting">
					<h6>Organizar por:</h6>
					<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">Default</option>
						<option value="null">Nombre(A - Z)</option> 
						<option value="null">Nombre(Z - A)</option>
						<option value="null">Precio(Alto - Bajo)</option>
						<option value="null">Precio(Bajo - Alto)</option>					
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="sorting">
					<h6>Mostrar por año</h6>
					<select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">2022</option>
						<option value="null">2021</option> 
						<option value="null">2020</option>					
						<option value="null">Otros años</option>								
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>


				<div class="col-md-4 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'm8.jpg');?>" alt="" class="pro-image-front">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'm8.jpg');?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?= route_to('Producto');?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="<?= route_to('Producto');?>">SAMSUNG Galaxy A12 </a></h4>
										<div class="info-product-price">
											<span class="item_price">$3,999.00</span>
											<del>$4,500.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="SAMSUNG Galaxy A12">
																	<input type="hidden" name="amount" value="$3,999.00">
																	<input type="hidden" name="discount_amount" value="$501.00">
																	<input type="hidden" name="currency_code" value="MX">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="submit" name="submit" value="Add to cart" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
			<div class="col-md-4 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'm7.jpg');?>" alt="" class="pro-image-front">
										<img src="<?= base_url(RECURSOS_PORTAL_IMAGES. 'm7.jpg');?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?= route_to('Producto');?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">Smartphone Samsung Galaxy A32 </a></h4>
										<div class="info-product-price">
											<span class="item_price">$5,839.00</span>
											<del>$6,239.00</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Smartphone Samsung Galaxy A32">
																	<input type="hidden" name="amount" value="$5,839.00">
																	<input type="hidden" name="discount_amount" value="$400.00">
																	<input type="hidden" name="currency_code" value="">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="submit" name="submit" value="Add to cart" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
	
		</div>
		<div class="clearfix"></div>
		
					</div>
							</div>
		<!-- Más productos-->
								</div>
							</div>
								
								</div>
							</div>
							<div class="clearfix"></div>
		</div>
	</div>
</div>	
<!-- //mens -->

<?= $this->endSection();?> 

<!-- JS-->
<?= $this->section("js")?>
	<!-- //cart-js --> 
	<!---->
	<script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 1000, 7000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>  

							</script>
						<script type="text/javascript" src="<?= base_url(RECURSOS_PORTAL_JS. 'jquery-ui.js');?>"></script>
					 <!---->
<?= $this->endSection();?> 



