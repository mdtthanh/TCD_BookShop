<head>
    <title>Cart</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.png"/>
</head>
<!-- header -->
    <?php include('./inc/header.php') ?>
    <!-- header -->

    <body>
      <main>
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="slider-area">
                <div class="
                  slider-height2 slider-bg5
                  d-flex
                  align-items-center
                  justify-content-center
                ">
                  <div class="hero-caption hero-caption2">
                    <h2>Cart</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        if (isset($_SESSION["cart"])) { ?>
          <section class="cart_area section-padding">
            <div class="container">
              <div class="cart_inner">
                <div class="table-responsive">
                  <table class="table" id="listCart">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center" style="width:60px; height: auto">No</th>
                        <th scope="col" class="text-center">Product</th>
                        <th scope="col" class="text-center">Price</th>
                        <th scope="col" class="text-center">Quantity</th>
                        <th scope="col" class="text-center">Total</th>
                        <th scope="col" class="text-center" style="width:60px; height: auto"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- sản phẩm  -->
                      <?php
                      $number = 0;
                      $total = 0;
                      $subtotal = 0;
                      $stt = 1;

                      if (isset($_SESSION["cart"])) {
                        $cart = $_SESSION["cart"];

                        foreach ($cart as $key => $value) {
                          $number += (int)$value["number"];
                      ?>
                          <tr>
                            <td>
                              <h5 style="text-align:center; width:60px; height: auto"><?= $stt ?></h5>
                            </td>
                            <td>
                              <div class="media">
                                <div class="d-flex">
                                  <a href="book-details.php?id='<?=$key?>'" class="">
                                  <img src="<?=$value["image"] ?>" alt="" width="148px" height="225px" />
                                  </a>
                                </div>
                                <div class="media-body">
                                  <a href="book-details.php?id='<?= $key?>'">
                                  <p style="color: blue"><?= $value["name"] ?></p>
                                  </a>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h5><?=number_format($value["price"]) . "đ" ?></h5>
                            </td>
                            <td>
                              <div style="display: flex;">
                                <!-- <button class="btn-light" style="border-radius: 0px;" onclick="addMoreCart($item['id'], -1)">-</button> -->
                                <input type="number" id="num_<?= $key ?>" value="<?= $value["number"] ?>" class="form-control" style="width: 90px; border-radius: 0px" onclick="updateCart(<?= $key ?>)" />
                                <!-- <button class="btn-light" style="border-radius: 0px;" onclick="addMoreCart($item['id'], 1)">+</button> -->
                              </div>
                            </td>
                            <td>
                              <?php
                              $total = (int)$value["number"] * (int)$value["price"];
                              $subtotal += $total;
                              ?>
                              <h5><?= number_format($total) . "đ" ?></h5>
                            </td>

                            <td style="text-align:center" style="width:60px; height: auto">
                              <a href="javascript:void(0)" onclick="deleteCart(<?= $key ?>)">
                                <div class="set-Del" style="border-radius: 30px">
                                  <span>x</span>
                                </div>
                              </a>
                            </td>
                          </tr>
                          <?php $stt += 1; ?>
                      <?php }
                      } ?>
                      <!-- sản phẩm  -->
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <h5></h5>
                        </td>
                        <td>
                          <h5>Subtotal</h5>
                        </td>
                        <td>
                          <h5><?= number_format($subtotal) . "đ" ?></h5>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <?php if ($number != 0) { ?>
                <a class="checkout_btn_inner" style="float: right;" href="checkout.php">
                  <button class="btn checkout_btn" name="order_click">Proceed to checkout</button>
                </a>
              <?php } else { ?>
                <!-- <a class="checkout_btn_inner" style="float: right;" href="categories.php">
                  <button class="btn checkout_btn" name="order_click">Chọn sách</button>
                </a> -->
                <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
                  <div class="row">
                    <div class="col-md-12" style="text-align: center;">
                      <h3 style="color: red;  margin-bottom: 30px">BẠN CHƯA CHỌN SẢN PHẨM NÀO, XIN MỜI QUAY LẠI MUA HÀNG!!!</h3>
                      <a href="categories.php"><button class="btn checkout_btn" name="order_click">Chọn sách</button></a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </section>


      </main>
    <?php } ?>
    <!-- footer -->
    <?php include('./inc/footer.php') ?>
    <!-- footer -->

    <div id="back-top">
      <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js+bootstrap.min.js.pagespeed.jc.RMqsw48A_a.js"></script>
    <script>
      eval(mod_pagespeed_usVz_HYIFh);
    </script>
    <script>
      eval(mod_pagespeed_64J4x1U9Lt);
    </script>

    <script src="assets/js/owl.carousel.min.js+slick.min.js.pagespeed.jc.8p3VYxlcxb.js"></script>
    <script>
      eval(mod_pagespeed_2b_kILWYuf);
    </script>
    <script>
      eval(mod_pagespeed_YcgqpOO3k2);
    </script>
    <script src="assets/js/jquery.slicknav.min.js+wow.min.js+jquery.magnific-popup.js+jquery.nice-select.min.js+jquery.counterup.min.js+waypoints.min.js.pagespeed.jc.gxrxPo5MLt.js"></script>
    <script>
      eval(mod_pagespeed_W070UA44Fy);
    </script>

    <script>
      eval(mod_pagespeed_HHFEHFyfva);
    </script>
    <script>
      eval(mod_pagespeed_He4JmNoJSL);
    </script>
    <script>
      eval(mod_pagespeed_Vq55GYBaD4);
    </script>
    <script>
      eval(mod_pagespeed_urzCQ$ljEK);
    </script>
    <script>
      eval(mod_pagespeed_yBL9chaY8Z);
    </script>
    <script src="assets/js/price_rangs.js+contact.js.pagespeed.jc.JVG_0UpWoX.js"></script>
    <script>
      eval(mod_pagespeed_6gHvth7EP8);
    </script>

    <script>
      eval(mod_pagespeed_gVyWNPnP1a);
    </script>
    <script src="assets/js/jquery.form.js+jquery.validate.min.js+mail-script.js+jquery.ajaxchimp.min.js+plugins.js+main.js.pagespeed.jc.FlL1_wvPXx.js"></script>
    <script>
      eval(mod_pagespeed_WxueWYkioV);
    </script>
    <script>
      eval(mod_pagespeed_JeTX5oy9W7);
    </script>
    <script>
      eval(mod_pagespeed_Dfx$DMKuSV);
    </script>
    <script>
      eval(mod_pagespeed_In2a_xtXil);
    </script>

    <script>
      eval(mod_pagespeed_ADDajFRwXo);
    </script>
    <script>
      eval(mod_pagespeed_R473QNJAOB);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6ae19cbffe406e2e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>
    </body>

    </html>