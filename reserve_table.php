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
            <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">Reserve Table</h1>
            <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
              <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
              <li>Reserve Table</li>
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

        <!-- reserve_table_section - start
        ================================================== -->
        <section class="reserve_table_section sec_ptb_120">
        	<div class="container">
        		<div class="reserve_table_form wow fadeInUp" data-wow-delay=".1s">
        			<h2 class="form_title text-center text-uppercase">reserve your table</h2>
        			<form action="#">
        				<div class="row justify-content-center">
        					<div class="col-lg-7">
        						<div class="form_item">
        							<input id="person-value" type="text" name="person-quantity" placeholder="How Many Preson?" value="4 Person">
        							<label class="form_icon" for="person-value"><i class="fal fa-user"></i></label>
        						</div>
        						<div class="form_item">
        							<input type="date" name="reserve-date">
        						</div>
        						<div class="form_item">
        							<input type="time" name="reserve-time" min="09:00" max="18:00">
        						</div>
        						<div class="text-center">
        							<button type="submit" class="btn btn_primary text-uppercase">Book a table</button>
        						</div>
        					</div>
        				</div>
        			</form>
        			<div class="decoration_icon">
        				<img src="assets/images/feature/icon_01.png" alt="icon_not_found">
        				<span class="bg_shape"></span>
        			</div>
        		</div>
        		<div class="reserve_banner_image">
        			<img src="assets/images/reserve/img_01.jpg" alt="image_not_found">
        		</div>
        	</div>
        </section>
        <!-- reserve_table_section - end
        ================================================== -->
      </main>
      <!-- main body - end
      ================================================== -->

<?php include('footer.php') ?>