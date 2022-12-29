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
            <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">Our Menu</h1>
            <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
              <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
              <li>Our Menu</li>
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

        <!-- recipe_menu_section - start
        ================================================== -->
        <section class="recipe_menu_section sec_ptb_120 bg_gray deco_wrap">
          <div class="container">
            <ul class="filters-button-group style_3 ul_li_center wow fadeInUp" data-wow-delay=".1s">
              <li><button class="button text-uppercase active" data-filter="*">all</button></li>
              <li><button class="button text-uppercase" data-filter=".chocolate">chocolate</button></li>
              <li><button class="button text-uppercase" data-filter=".coffee">coffee</button></li>
              <li><button class="button text-uppercase" data-filter=".sandwiches">sandwiches</button></li>
              <li><button class="button text-uppercase" data-filter=".sweets">sweets</button></li>
              <li><button class="button text-uppercase" data-filter=".blacktea">black tea</button></li>
              <li><button class="button text-uppercase" data-filter=".greantea">grean tea</button></li>
            </ul>

            <div class="recipe_item_grid grid wow fadeInUp" data-wow-delay=".2s">
              <div class="element-item chocolate greantea " data-category="chocolate">
                <div class="recipe_item">
                  <div class="content_col">
                    <a class="item_image" href="shop_details.html">
                      <img src="assets/images/menu/img_01.png" alt="image_not_found">
                    </a>
                    <div class="item_content">
                      <h3 class="item_title text-uppercase">
                        <a href="shop_details.html">americano Super hot coffee</a>
                      </h3>
                      <p class="mb-0">
                        The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier. Once the beans are roasted each participant is given an 
                      </p>
                    </div>
                  </div>
                  <div class="content_col">
                    <strong class="item_price">
                      <sub>$</sub>3.5
                    </strong>
                  </div>
                </div>
              </div>

              <div class="element-item coffee blacktea " data-category="coffee">
                <div class="recipe_item">
                  <div class="content_col">
                    <a class="item_image" href="shop_details.html">
                      <img src="assets/images/menu/img_02.png" alt="image_not_found">
                    </a>
                    <div class="item_content">
                      <h3 class="item_title text-uppercase">
                        <a href="shop_details.html">special raw coffee</a>
                      </h3>
                      <p class="mb-0">
                        The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier. Once the beans are roasted each participant is given an 
                      </p>
                    </div>
                  </div>
                  <div class="content_col">
                    <strong class="item_price">
                      <sub>$</sub>4.8
                    </strong>
                  </div>
                </div>
              </div>

              <div class="element-item sandwiches sweets " data-category="sandwiches">
                <div class="recipe_item">
                  <div class="content_col">
                    <a class="item_image" href="shop_details.html">
                      <img src="assets/images/menu/img_03.png" alt="image_not_found">
                    </a>
                    <div class="item_content">
                      <h3 class="item_title text-uppercase">
                        <a href="shop_details.html">indian pure tea</a>
                      </h3>
                      <p class="mb-0">
                        The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier. Once the beans are roasted each participant is given an 
                      </p>
                    </div>
                  </div>
                  <div class="content_col">
                    <strong class="item_price">
                      <sub>$</sub>1.6
                    </strong>
                  </div>
                </div>
              </div>

              <div class="element-item sweets sandwiches " data-category="sweets">
                <div class="recipe_item">
                  <div class="content_col">
                    <a class="item_image" href="shop_details.html">
                      <img src="assets/images/menu/img_04.png" alt="image_not_found">
                    </a>
                    <div class="item_content">
                      <h3 class="item_title text-uppercase">
                        <a href="shop_details.html">Bangladeshi green tea</a>
                      </h3>
                      <p class="mb-0">
                        The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier. Once the beans are roasted each participant is given an 
                      </p>
                    </div>
                  </div>
                  <div class="content_col">
                    <strong class="item_price">
                      <sub>$</sub>9.3
                    </strong>
                  </div>
                </div>
              </div>

              <div class="element-item blacktea coffee " data-category="blacktea">
                <div class="recipe_item">
                  <div class="content_col">
                    <a class="item_image" href="shop_details.html">
                      <img src="assets/images/menu/img_05.png" alt="image_not_found">
                    </a>
                    <div class="item_content">
                      <h3 class="item_title text-uppercase">
                        <a href="shop_details.html">Rolatina Sweets cafe house</a>
                      </h3>
                      <p class="mb-0">
                        The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier. Once the beans are roasted each participant is given an 
                      </p>
                    </div>
                  </div>
                  <div class="content_col">
                    <strong class="item_price">
                      <sub>$</sub>0.8
                    </strong>
                  </div>
                </div>
              </div>

              <div class="element-item greantea chocolate " data-category="greantea">
                <div class="recipe_item">
                  <div class="content_col">
                    <a class="item_image" href="shop_details.html">
                      <img src="assets/images/menu/img_02.png" alt="image_not_found">
                    </a>
                    <div class="item_content">
                      <h3 class="item_title text-uppercase">
                        <a href="shop_details.html">special raw coffee</a>
                      </h3>
                      <p class="mb-0">
                        The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier. Once the beans are roasted each participant is given an 
                      </p>
                    </div>
                  </div>
                  <div class="content_col">
                    <strong class="item_price">
                      <sub>$</sub>4.8
                    </strong>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="deco_item shape_1">
            <img src="assets/images/menu/shape_01.png" alt="image_not_found">
          </div>
          <div class="deco_item shape_2">
            <img src="assets/images/menu/shape_02.png" alt="image_not_found">
          </div>
        </section>
        <!-- recipe_menu_section - end
        ================================================== -->
      </main>
      <!-- main body - end
      ================================================== -->

      <?php include('footer.php') ?>