<?php include('header.php') ?>

	<!-- main body - start
	================================================== -->
	<main>

		<!-- cart_sidebar - start
		================================================== -->
		<div class="sidebar-menu-wrapper">
			<div class="cart_sidebar">
				<button type="button" class="close_btn"><i class="fal fa-times"></i></button>
				<h2 class="heading_title text-uppercase">Cart Items - <span>4</span></h2>

				<div class="cart_items_list">
					<div class="cart_item">
						<div class="item_image">
							<img src="assets/images/recent_post/img_03.jpg" alt="image_not_found">
						</div>
						<div class="item_content">
							<h4 class="item_title">
								Rorem ipsum dolor sit amet, sectetur adipisi cingey.
							</h4>
							<span class="item_price">$19.00</span>
							<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
						</div>
					</div>

					<div class="cart_item">
						<div class="item_image">
							<img src="assets/images/recent_post/img_04.jpg" alt="image_not_found">
						</div>
						<div class="item_content">
							<h4 class="item_title">
								Rorem ipsum dolor sit amet, sectetur adipisi cingey.
							</h4>
							<span class="item_price">$19.00</span>
							<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
						</div>
					</div>

					<div class="cart_item">
						<div class="item_image">
							<img src="assets/images/recent_post/img_05.jpg" alt="image_not_found">
						</div>
						<div class="item_content">
							<h4 class="item_title">
								Rorem ipsum dolor sit amet, sectetur adipisi cingey.
							</h4>
							<span class="item_price">$19.00</span>
							<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
						</div>
					</div>

					<div class="cart_item">
						<div class="item_image">
							<img src="assets/images/recent_post/img_06.jpg" alt="image_not_found">
						</div>
						<div class="item_content">
							<h4 class="item_title">
								Rorem ipsum dolor sit amet, sectetur adipisi cingey.
							</h4>
							<span class="item_price">$19.00</span>
							<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
						</div>
					</div>
				</div>
				<div class="total_price text-uppercase">
					<span>Sub Total:</span>
					<span>$76.00</span>
				</div>
				<ul class="btns_group ul_li">
					<li><a href="cart.html" class="btn btn_primary text-uppercase">View Cart</a></li>
					<li><a href="checkout.html" class="btn btn_border border_black text-uppercase">Checkout</a></li>
				</ul>
			</div>
			<div class="cart_sidebar_overlay"></div>
		</div>
		<!-- cart_sidebar - end
		================================================== -->

		<!-- breadcrumb_section - start
		================================================== -->
		<section class="breadcrumb_section text-uppercase" style="background-image: url(assets/images/breadcrumb/breadcrumb_bg_01.jpg);">
			<div class="container">
				<h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">Shoping Cart</h1>
				<ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
					<li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
					<li>Shoping Cart</li>
				</ul>
			</div>
			<div class="breadcrumb_icon_wrap">
				<div class="container">
					<div class="breadcrumb_icon wow fadeInUp" data-wow-delay=".1s">
						<img src="assets/images/feature/icon_01.png" alt="icon_not_found">
						<span class="bg_shape"></span>
					</div>
				</div>
			</div>
		</section>
		<!-- breadcrumb_section - end
		================================================== -->

		<!-- cart_section - start
		================================================== -->
		<section class="cart_section sec_ptb_120 bg_default_gray">
			<div class="container">
				<div class="cart_table">
					<table class="table">
						<thead class="text-uppercase wow fadeInUp" data-wow-delay=".1s">
							<tr>
								<th>Product</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>subtotal</th>
							</tr>
						</thead>
						<tbody>
							<tr class="wow fadeInUp" data-wow-delay=".1s">
								<td>
									<div class="carttable_product_item">
										<div class="item_image">
											<img src="assets/images/shop/img_01.png" alt="image_not_found">
										</div>
										<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
										<h3 class="item_title">Americano coffee beans</h3>
									</div>
								</td>
								<td><span class="price_text1">$19,00</span></td>
								<td>
									<div class="quantity_input">
										<form action="#">
											<button type="button" class="input_number_decrement">–</button>
											<input class="input_number" type="text" value="2">
											<button type="button" class="input_number_increment">+</button>
										</form>
									</div>
								</td>
								<td><span class="price_text2">$19,00</span></td>
							</tr>
							
							<tr class="wow fadeInUp" data-wow-delay=".1s">
								<td>
									<div class="carttable_product_item">
										<div class="item_image">
											<img src="assets/images/shop/img_02.png" alt="image_not_found">
										</div>
										<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
										<h3 class="item_title">Americano coffee beans</h3>
									</div>
								</td>
								<td><span class="price_text1">$19,00</span></td>
								<td>
									<div class="quantity_input">
										<form action="#">
											<button type="button" class="input_number_decrement">–</button>
											<input class="input_number" type="text" value="2">
											<button type="button" class="input_number_increment">+</button>
										</form>
									</div>
								</td>
								<td><span class="price_text2">$19,00</span></td>
							</tr>

							<tr class="wow fadeInUp" data-wow-delay=".1s">
								<td>
									<div class="carttable_product_item">
										<div class="item_image">
											<img src="assets/images/shop/img_03.png" alt="image_not_found">
										</div>
										<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
										<h3 class="item_title">Americano coffee beans</h3>
									</div>
								</td>
								<td><span class="price_text1">$19,00</span></td>
								<td>
									<div class="quantity_input">
										<form action="#">
											<button type="button" class="input_number_decrement">–</button>
											<input class="input_number" type="text" value="2">
											<button type="button" class="input_number_increment">+</button>
										</form>
									</div>
								</td>
								<td><span class="price_text2">$19,00</span></td>
							</tr>

							<tr class="wow fadeInUp" data-wow-delay=".1s">
								<td>
									<div class="carttable_product_item">
										<div class="item_image">
											<img src="assets/images/shop/img_04.png" alt="image_not_found">
										</div>
										<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
										<h3 class="item_title">Americano coffee beans</h3>
									</div>
								</td>
								<td><span class="price_text1">$19,00</span></td>
								<td>
									<div class="quantity_input">
										<form action="#">
											<button type="button" class="input_number_decrement">–</button>
											<input class="input_number" type="text" value="2">
											<button type="button" class="input_number_increment">+</button>
										</form>
									</div>
								</td>
								<td><span class="price_text2">$19,00</span></td>
							</tr>

							<tr class="wow fadeInUp" data-wow-delay=".1s">
								<td>
									<div class="carttable_product_item">
										<div class="item_image">
											<img src="assets/images/shop/img_05.png" alt="image_not_found">
										</div>
										<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
										<h3 class="item_title">Americano coffee beans</h3>
									</div>
								</td>
								<td><span class="price_text1">$19,00</span></td>
								<td>
									<div class="quantity_input">
										<form action="#">
											<button type="button" class="input_number_decrement">–</button>
											<input class="input_number" type="text" value="2">
											<button type="button" class="input_number_increment">+</button>
										</form>
									</div>
								</td>
								<td><span class="price_text2">$19,00</span></td>
							</tr>

							<tr>
								<td>
									<div class="carttable_product_item">
										<div class="item_image">
											<img src="assets/images/shop/img_06.png" alt="image_not_found">
										</div>
										<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
										<h3 class="item_title">Americano coffee beans</h3>
									</div>
								</td>
								<td><span class="price_text1">$19,00</span></td>
								<td>
									<div class="quantity_input">
										<form action="#">
											<button type="button" class="input_number_decrement">–</button>
											<input class="input_number" type="text" value="2">
											<button type="button" class="input_number_increment">+</button>
										</form>
									</div>
								</td>
								<td><span class="price_text2">$19,00</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<ul class="carttable_footer ul_li_right wow fadeInUp" data-wow-delay=".1s">
					<li>
						<div class="total_price text-uppercase">
							<span>Subtotal</span>
							<span>$45,00</span>
						</div>
					</li>
					<li>
						<div class="total_price text-uppercase">
							<span>total</span>
							<span>$45,00</span>
						</div>
					</li>
					<li>
						<a class="btn btn_primary text-uppercase" href="shop_checkout.html">procced to checkout</a>
					</li>
				</ul>
			</div>
		</section>
		<!-- cart_section - end
		================================================== -->

	</main>
	<!-- main body - end
	================================================== -->

<?php include('footer.php') ?>