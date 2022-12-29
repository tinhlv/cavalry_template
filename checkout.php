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
						<h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">check Out</h1>
						<ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
							<li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
							<li>check Out</li>
						</ul>
					</div>
					<div class="breadcrumb_icon_wrap">
						<div class="container">
							<div class="breadcrumb_icon wow fadeInUp" data-wow-delay=".3s">
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
        	<div class="container container_boxed">
        		<div class="checkout_form">
        			<h2 class="form_title text-uppercase wow fadeInUp" data-wow-delay=".1s">Select payment Method</h2>
        			<form action="#">
        				<ul class="checkout_steps_nav ul_li wow fadeInUp" data-wow-delay=".2s">
        					<li class="active"><a href="checkout.html">Derect Bank Transfer</a></li>
        					<li><a href="checkout_step2.html">Check Payments</a></li>
        					<li><a href="checkout_step3.html">Cash on Delivery</a></li>
        				</ul>

        				<h3 class="form_title text-uppercase wow fadeInUp">personal Info !</h3>
        				<div class="row wow fadeInUp" data-wow-delay=".3s">
        					<div class="col-lg-4">
        						<div class="form_item">
        							<h4 class="form_field_title">First Name<sup>*</sup></h4>
        							<input type="text" name="firstname" placeholder="First Name">
        						</div>
        					</div>

        					<div class="col-lg-4">
        						<div class="form_item">
        							<h4 class="form_field_title">Last Name<sup>*</sup></h4>
        							<input type="text" name="lastname" placeholder="Last Name">
        						</div>
        					</div>

        					<div class="col-lg-4">
        						<div class="form_item">
        							<h4 class="form_field_title">Number<sup>*</sup></h4>
        							<input type="tel" name="telephone" placeholder="Number">
        						</div>
        					</div>

        					<div class="col-lg-6">
        						<div class="form_item">
        							<h4 class="form_field_title">Own Adress<sup>*</sup></h4>
        							<input type="text" name="adress" placeholder="Own Adress">
        						</div>
        					</div>

        					<div class="col-lg-6">
        						<div class="form_item">
        							<h4 class="form_field_title">Mail Address<sup>*</sup></h4>
        							<input type="email" name="email" placeholder="Mail Address">
        						</div>
        					</div>
        				</div>

        				<div class="form_item wow fadeInUp" data-wow-delay=".4s">
        					<h4 class="form_field_title">Additional Information*<sup>*</sup></h4>
        					<textarea name="message" placeholder="Note about your order, Special note for delevery !"></textarea>
        				</div>
        			</form>
        			<div class="checkout_form_footer wow fadeInUp" data-wow-delay=".5s">
        				<span class="total_price"><strong>Total</strong> $255</span>
        				<a class="btn btn_primary text-uppercase" href="checkout_step2.html">Place Order</a>
        			</div>
        		</div>
        	</div>
        </section>
        <!-- cart_section - end
        ================================================== -->

			</main>
			<!-- main body - end
			================================================== -->

			<?php include('footer.php') ?>