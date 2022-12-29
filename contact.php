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
            <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">Contact Us</h1>
            <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
              <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
              <li>Contact Us</li>
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

        <!-- contact_section - start
        ================================================== -->
        <section class="contact_section sec_ptb_120 bg_default_gray">
          <div class="container">
            <div class="contact_form bg_white wow fadeInUp" data-wow-delay=".1s">
              <div class="main_contact_info_wrap">
                <div class="contact_info_item">
                  <div class="item_icon"><i class="fal fa-envelope"></i></div>
                  <div class="item_content">
                    <h3 class="item_title text-uppercase">Email Adress</h3>
                    <p>Israfilsupol836@gmail.com</p>
                    <p>Info@webmail@gmail.com</p>
                  </div>
                </div>
                <div class="contact_info_item">
                  <div class="item_icon"><i class="fal fa-map-marker-alt"></i></div>
                  <div class="item_content">
                    <h3 class="item_title text-uppercase">Our Location</h3>
                    <p>Hera Road 2344-78 Australia</p>
                    <p>897- South Side Melbon</p>
                  </div>
                </div>
                <div class="contact_info_item">
                  <div class="item_icon"><i class="fal fa-phone"></i></div>
                  <div class="item_content">
                    <h3 class="item_title text-uppercase">Phone Number</h3>
                    <p>088 - 01869018907</p>
                    <p>(88) 908 675 43667</p>
                  </div>
                </div>
              </div>
              <form action="#">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form_item">
                      <input type="text" name="name" placeholder="Your name:">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form_item">
                      <input type="email" name="email" placeholder="Your Mail:">
                    </div>
                  </div>
                </div>
                <div class="form_item">
                  <input type="text" name="subject" placeholder="Enter Your Subject:">
                </div>
                <div class="form_item">
                  <textarea name="message" placeholder="Your Massage:"></textarea>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn_primary text-uppercase">Send massage</button>
                </div>
              </form>
            </div>
          </div>
        </section>
        <!-- contact_section - end
        ================================================== -->

        <!-- google map - start
        ================================================== -->
        <div class="map_section">
          <div id="mapBox" class="wow fadeInUp" data-wow-delay=".1s" data-lat="40.701083" data-lon="-74.1522848" data-zoom="12" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848">
          </div>
        </div>
        <!-- google map - end
        ================================================== -->

      </main>
      <!-- main body - end
      ================================================== -->

      <?php include('footer.php') ?>