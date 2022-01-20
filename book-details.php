<?php
include_once('./db/connect.php');
include_once('./models/categories.php');
include_once('./models/slider.php');
include_once('./models/products.php');
include_once('./utils/utility.php');
$sql_detail = mysqli_query($con, "SELECT * FROM book WHERE id =  ".$_GET['id']) or die(mysqli_error($con));
$row_detail = mysqli_fetch_array($sql_detail);
?>
<head>
  <title>Book detail</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.png"/>
</head>
<?php
include('./inc/header.php');
// include('./db/connect.php');
$sql_detail = mysqli_query($con, "SELECT * FROM book WHERE id =  ".$_GET['id']) or die(mysqli_error($con));
$row_detail = mysqli_fetch_array($sql_detail);

?>

<body>

  <!-- chi tiet san pham -->
  <main>
    <div class="services-area2">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="row">
              <div class="col-xl-12">
                <div class="single-services d-flex align-items-center mb-0">
                  <div class="features-img">
                    <img src="<?php echo $row_detail['thumbnail'] ?>" width="198px" height="298px" alt="" data-pagespeed-url-hash="4146589661" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                  </div>
                  <div class="features-caption">
                    <h3><?php echo $row_detail['title'] ?></h3>
                    <p><?=$row_detail['author']?></p>
                    <div class="price">
                      <span><?php echo number_format($row_detail['discount']) . 'đ' ?></span>
                    </div>
                    <div class="review">
                      <div class="rating">
                        <div class="price">
                          <?php if (isset($row_detail['price'])) { ?>
                            <del><?php echo number_format($row_detail['price']) . 'đ' ?></span>
                            <?php } else {
                          } ?>
                        </div>
                      </div>
                      <div style="display: flex; margin-top:10px; margin-bottom:10px;">
                        <!-- <button class="btn-light" style="border: solid #e0dede 1px; border-radius: 0px; background-color:red;" onclick="addMoreCart(-1)">-</button> -->
                        <input type="number" class="form-control" step="1" value="1" id="num_<?= $row_detail['id']?>" style="max-width: 90px;border: solid #e0dede 1px; border-radius: 0px;" >
                        <!-- <button class="btn-light" style="border: solid #e0dede 1px; border-radius: 0px; background-color:red;" onclick="addMoreCart(1)">+</button> -->
                      </div>
                    </div>
                    <button class="white-btn" onclick="addCart(<?= $row_detail['id']?>)">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <section class="our-client section-padding best-selling">
      <div class="container">
        <div class="row">
          <div class="offset-xl-1 col-xl-10">
            <div class="nav-button f-left">
              <nav>
                
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="tab-content" id="nav-tabContent">
          <!-- mô tả sản phẩm  -->
          <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
            <div class="row" style="margin-left: 90px; margin-right: 10px">
              <div class="offset-xl-1 col-lg-9" style="background: #fef4f4;">
                <h3 style=" padding: 10px 15px;">Thông tin chi tiết</h3>
                <div style=" padding: 0px 16px 16px;">
                  <table style="width: 100% !important;">
                    <tbody>              
                      <?php
                        if($row_detail['author'] != NULL) {
                          echo ' <tr>
                                  <td style="background: #ffffff; padding: 10px 15px;">Tác giả</td>
                                  <td style="background: #ffffff; padding: 10px 15px;">'.$row_detail['author'].'</td>
                                </tr>';
                        }
                        if($row_detail['publish_year'] != NULL) {
                          echo ' <tr>
                                  <td style="background: #fbeee6; padding: 10px 15px;">Năm xuất bản</td>
                                  <td style="background: #fbeee6; padding: 10px 15px;">'.$row_detail['publish_year'].'</td>
                                </tr>';
                        }
                        if($row_detail['total_page'] != NULL) {
                          echo ' <tr>
                                  <td style="background: #ffffff;  padding: 10px 15px;">Số trang</td>
                                  <td style="background: #ffffff; padding: 10px 15px;">'.$row_detail['total_page'].'</td>
                                </tr>';
                        }
                        if($row_detail['publisher'] != NULL) {
                          echo ' <tr>
                                  <td style="background: #fbeee6; padding: 10px 15px;">Nhà xuất bản</td>
                                  <td style="background: #fbeee6; padding: 10px 15px;">'.$row_detail['publisher'].'</td>
                                </tr>';
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
              
              <div class="offset-xl-1 col-lg-9" style="background: #fef4f4; margin-top: 30px">
                <h3 style=" padding: 10px 15px;">Mô tả sản phẩm</h3>
                <div style=" padding: 10px 15px;">
                  <?=$row_detail['description']?>
                </div>
              </div>
            </div>
          </div>
          <!-- mô tả sản phẩm  -->

          <!-- <div
              class="tab-pane fade"
              id="nav-two"
              role="tabpanel"
              aria-labelledby="nav-two-tab"
            >
              <div class="row">
                <div class="offset-xl-1 col-lg-9">
                  <p>
                    Beryl Cook is one of Britain’s most talented and amusing
                    artists .Beryl’s pictures feature women of all shapes and
                    sizes enjoying themselves .Born between the two world wars,
                    Beryl Cook eventually left Kendrick School in Reading at the
                    age of 15, where she went to secretarial school and then
                    into an insurance office. After moving to London and then
                    Hampton, she eventually married her next door neighbour from
                    Reading, John Cook. He was an officer in the Merchant Navy
                    and after he left the sea in 1956, they bought a pub for a
                    year before John took a job in Southern Rhodesia with a
                    motor company. Beryl bought their young son a box of
                    watercolours, and when showing him how to use it, she
                    decided that she herself quite enjoyed painting. John
                    subsequently bought her a child’s painting set for her
                    birthday and it was with this that she produced her first
                    significant work, a half-length portrait of a dark-skinned
                    lady with a vacant expression and large drooping breasts. It
                    was aptly named ‘Hangover’ by Beryl’s husband and
                  </p>
                  <p>
                    It is often frustrating to attempt to plan meals that are
                    designed for one. Despite this fact, we are seeing more and
                    more recipe books and Internet websites that are dedicated
                    to the act of cooking for one. Divorce and the death of
                    spouses or grown children leaving for college are all
                    reasons that someone accustomed to cooking for more than one
                    would suddenly need to learn how to adjust all the cooking
                    practices utilized before into a streamlined plan of cooking
                    that is more efficient for one person creating less.
                  </p>
                </div>
              </div>
            </div> -->
          <!-- <div
              class="tab-pane fade"
              id="nav-three"
              role="tabpanel"
              aria-labelledby="nav-three-tab"
            >
              <div class="row">
                <div class="offset-xl-1 col-lg-9">
                  <p>
                    Britain’s most talented and amusing
                    artists .Beryl’s pictures feature women of all shapes and
                    sizes enjoying themselves .Born between the two world wars,
                    Beryl Cook eventually left Kendrick School in Reading at the
                    age of 15, where she went to secretarial school and then
                    into an insurance office. After moving to London and then
                    Hampton, she eventually married her next door neighbour from
                    Reading, John Cook. He was an officer in the Merchant Navy
                    and after he left the sea in 1956, they bought a pub for a
                    year before John took a job in Southern Rhodesia with a
                    motor company. Beryl bought their young son a box of
                    watercolours, and when showing him how to use it, she
                    decided that she herself quite enjoyed painting. John
                    subsequently bought her a child’s painting set for her
                    birthday and it was with this that she produced her first
                    significant work, a half-length portrait of a dark-skinned
                    lady with a vacant expression and large drooping breasts. It
                    was aptly named ‘Hangover’ by Beryl’s husband and
                  </p>
                  <p>
                    It is often frustrating to attempt to plan meals that are
                    designed for one. Despite this fact, we are seeing more and
                    more recipe books and Internet websites that are dedicated
                    to the act of cooking for one. Divorce and the death of
                    spouses or grown children leaving for college are all
                    reasons that someone accustomed to cooking for more than one
                    would suddenly need to learn how to adjust all the cooking
                    practices utilized before into a streamlined plan of cooking
                    that is more efficient for one person creating less.
                  </p>
                </div>
              </div>
            </div> -->
          <!-- <div
              class="tab-pane fade"
              id="nav-four"
              role="tabpanel"
              aria-labelledby="nav-four-tab"
            >
              <div class="row">
                <div class="offset-xl-1 col-lg-9">
                  <p>
                    Most talented and amusing
                    artists .Beryl’s pictures feature women of all shapes and
                    sizes enjoying themselves .Born between the two world wars,
                    Beryl Cook eventually left Kendrick School in Reading at the
                    age of 15, where she went to secretarial school and then
                    into an insurance office. After moving to London and then
                    Hampton, she eventually married her next door neighbour from
                    Reading, John Cook. He was an officer in the Merchant Navy
                    and after he left the sea in 1956, they bought a pub for a
                    year before John took a job in Southern Rhodesia with a
                    motor company. Beryl bought their young son a box of
                    watercolours, and when showing him how to use it, she
                    decided that she herself quite enjoyed painting. John
                    subsequently bought her a child’s painting set for her
                    birthday and it was with this that she produced her first
                    significant work, a half-length portrait of a dark-skinned
                    lady with a vacant expression and large drooping breasts. It
                    was aptly named ‘Hangover’ by Beryl’s husband and
                  </p>
                  <p>
                    It is often frustrating to attempt to plan meals that are
                    designed for one. Despite this fact, we are seeing more and
                    more recipe books and Internet websites that are dedicated
                    to the act of cooking for one. Divorce and the death of
                    spouses or grown children leaving for college are all
                    reasons that someone accustomed to cooking for more than one
                    would suddenly need to learn how to adjust all the cooking
                    practices utilized before into a streamlined plan of cooking
                    that is more efficient for one person creating less.
                  </p>
                </div>
              </div>
            </div> -->
          <!-- <div
              class="tab-pane fade"
              id="nav-five"
              role="tabpanel"
              aria-labelledby="nav-five-tab"
            >
              <div class="row">
                <div class="offset-xl-1 col-lg-9">
                  <p>
                    Feature women of all shapes and
                    sizes enjoying themselves .Born between the two world wars,
                    Beryl Cook eventually left Kendrick School in Reading at the
                    age of 15, where she went to secretarial school and then
                    into an insurance office. After moving to London and then
                    Hampton, she eventually married her next door neighbour from
                    Reading, John Cook. He was an officer in the Merchant Navy
                    and after he left the sea in 1956, they bought a pub for a
                    year before John took a job in Southern Rhodesia with a
                    motor company. Beryl bought their young son a box of
                    watercolours, and when showing him how to use it, she
                    decided that she herself quite enjoyed painting. John
                    subsequently bought her a child’s painting set for her
                    birthday and it was with this that she produced her first
                    significant work, a half-length portrait of a dark-skinned
                    lady with a vacant expression and large drooping breasts. It
                    was aptly named ‘Hangover’ by Beryl’s husband and
                  </p>
                  <p>
                    It is often frustrating to attempt to plan meals that are
                    designed for one. Despite this fact, we are seeing more and
                    more recipe books and Internet websites that are dedicated
                    to the act of cooking for one. Divorce and the death of
                    spouses or grown children leaving for college are all
                    reasons that someone accustomed to cooking for more than one
                    would suddenly need to learn how to adjust all the cooking
                    practices utilized before into a streamlined plan of cooking
                    that is more efficient for one person creating less.
                  </p>
                </div>
              </div>
            </div> -->
        </div>
      </div>
    </section>

    <section class="subscribe-area">
      <div class="container">
        <div class="
              subscribe-caption
              text-center
              subscribe-padding
              section-img2-bg
            " data-background="assets/img/gallery/section-bg1.jpg">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-9">
              <h3>Join Newsletter</h3>
              <p>
                Lorem started its journey with cast iron (CI) products in
                1980. The initial main objective was to ensure pure water and
                affordable irrigation.
              </p>
              <form action="#">
                <input type="text" placeholder="Enter your email" />
                <button class="subscribe-btn">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- chi tiet san pham -->
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

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-23581568-13");
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6ae19e485ff96e2e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>


  <script type="text/javascript">
    function addMoreCart(delta) {
      num = parseInt($('[name=num]').val())
      num += delta
      if (num < 1) num = 1;
      $('[name=num]').val(num)
    }
    function fixCartNum() {
      $('[name=num]').val(Math.abs($('[name=num]').val()))
    }

  </script>

</body>

</html>