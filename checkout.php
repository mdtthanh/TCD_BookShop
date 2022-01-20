<head>
    <title>Checkout</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.png"/>
</head>
<?php include('./inc/header.php') ?>

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
                <h2>Check Out</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- checkout -->
    <section class="checkout_area section-padding">
      <div class="container">
        <div class="billing_details">
          <?php
          // $total = 0;
          // $subtotal = 0;
          // $number = 0;
          // if (isset($_SESSION["cart"])) {
          //   $cart = $_SESSION["cart"];
          //   foreach ($cart as $key => $value) {
          //     $total = (int)$value["number"] * (int)$value["price"];
          //     $subtotal += $total;
          ?>
          <?php
          ?>

          <form method="post" action="checkout.php?complete.php" >
            <div class="row">
              <div class="col-lg-8">
                <h3 style="font-weight: 500; font-size: 22px">Billing Details</h3>
                <div class="row contact_form" action="#" method="post" novalidate>
                  <div class="col-md-12 form-group p_star">
                    <input required="true" type="text" class="form-control" id="urs" name="fullname" placeholder="Full name" style="border-radius: 15px"/>
                  </div>
                  <div class="col-md-6 form-group p_star">
                    <input required="true" type="email" class="form-control" id="email" name="email" placeholder="Email Address" style="border-radius: 15px"/>
                  </div>
                  <div class="col-md-6 form-group p_star">
                    <input required="true" type="tel" class="form-control" id="phone" name="phone" placeholder="Phone number" style="border-radius: 15px"/>
                  </div>
                  <div class="col-md-12 form-group">
                    <input required="true" type="text" class="form-control" id="address" name="address" placeholder="Address" style="border-radius: 15px"/>
                  </div>
                  <div class="col-md-12 form-group">
                    <label for="pwd">Nội dung:</label>
                    <textarea class="form-control" rows="3" name="note" style="border-radius: 15px"></textarea>
                  </div>
                  <!-- <div class="checkout_btn_inner float-right">
                  <a class="btn" href="categories.php">Continue Shopping</a>
                  <button class="btn checkout_btn" type="submit" value="Proceed to checkout" name="order_click">Proceed to checkout</button>
                  </div> -->
                </div>
              </div>
              <div class="col-lg-4">
                <div class="order_box" style="border-radius: 25px">
                  <h2>Your Order</h2>
                  <table style="width: auto">
                  <thead>
                      <tr>
                        <th style="width: 215px; font-size: 14px; color: #797979; padding: 10px 0px;">Book</th>
                        <th style="width:40px; text-align: right"></th>
                        <th style="width: 100px; font-size: 14px; color: #797979; text-align: right">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $total = 0;
                    $subtotal = 0;
                    $number = 0;
                    if (isset($_SESSION["cart"])) {
                      $cart = $_SESSION["cart"];
                      foreach ($cart as $key => $value) {
                        $total = (int)$value["number"] * (int)$value["price"];
                        $subtotal += $total;
                    ?>
                      <tr>
                        <td style="font-size: 14px; color: #797979; padding: 10px 0px;"><?= $value["name"] ?></td>
                        <td style="font-size: 14px; color: #797979; text-align: right;"><a href="cart.php" style="font-size: 14px; color: #797979; text-align: center;">x<?= $value["number"] ?></a></td>
                        <td style="width: 100px; font-size: 14px; color: #797979; padding: 10px 0px; text-align: right"><?= number_format($total) . 'đ<br>' ?></td>
                      </tr>

                    <?php }
                    }

                    ?>
                    </tbody>
                  </table>
                  <br>
                  </ul>
                  <ul class="list list_2">
                    <li>
                      <a>Subtotal <span><?= number_format($subtotal) . 'đ' ?></span></a>
                    </li>
                    <li>
                      <a>Shipping
                        <span>Free</span>
                      </a>
                    </li>
                    <li>
                      <a>Total<span><?= number_format($subtotal) . 'đ' ?></span> </a>
                    </li>
                  </ul>
                  <!-- <div class="creat_account checkout-cap">
                    <input type="checkbox" id="f-option8" name="selector" />
                    <label for="f-option8">I’ve read and accept the
                      <a href="#">terms & conditions*</a>
                    </label>
                  </div> -->
                  <?php
                  if($subtotal != 0) {
                      echo '<button class="btn w-100" type="submit" name="addNew">Order</button>';
                  } 
                  ?>
          
                </div>
              </div>
            </div>
          </form>
          <?php
          if (isset($_SESSION["cart"])) {
            if (isset($_POST["addNew"])) {
              date_default_timezone_set("Asia/Ho_Chi_Minh");
              $order_date = date('Y-m-d H:i:s');

              // include('./models/checkOut.php');
              // var_dump($_POST);
              $sql = "INSERT INTO `orders`(`fullname`, `email`, `phone`, `address`, `note`, `order_date`, `total_money`, `status`) VALUES ('" . $_POST["fullname"] . "','" . $_POST["email"] . "','" . $_POST["phone"] . "','" . $_POST["address"] . "','" . $_POST["note"] . "','$order_date','$subtotal', 0)";
              $result = mysqli_query($con, $sql);
              $id = mysqli_insert_id($con);
              // echo "New id insert: ".$id;
              // var_dump($id);
              // $cart = $_SESSION["cart"];

              foreach ($_SESSION["cart"] as $key => $value) {
                $book_id = $key;
                $total = (int)$value["number"] * (int)$value["price"];
                $sql_order = "INSERT INTO `orderdetail`(`order_id`, `book_id`, `price`, `num`, `total_money`) VALUES ('$id','$book_id','" . $value["price"] . "','" . $value["number"] . "','$total')";
                $result_order = mysqli_query($con, $sql_order);
                // var_dump($result_order);

              }
              unset($_SESSION['cart']);
              header('Location: complete.php');
              die();
            }
          }
          ?>
        </div>
      </div>
    </section>
    <!-- checkout -->

  </main>
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
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6ae19dd8f8646e2e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>


</body>

</html>