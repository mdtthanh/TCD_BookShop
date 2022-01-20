<head>
  <title>Category</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.png" />
</head>

<?php
// ob_start();
// session_start();
include('./inc/header.php');

$param = "";
$orderCondition = "";
$sortParam = "";

// lọc giá và tên sp
$search = isset($_GET['name']) ? $_GET['name'] : "";
if ($search) {
  $where = "WHERE title LIKE N'%" . $search . "%' ";
  $param .= "name=" . $search . "&";
  $sortParam = "name=" . $search . "&"; // vừa lọc vừa giữ dự liệu search

}

$orderField = isset($_GET['field']) ? $_GET['field'] : "";
$orderSort = isset($_GET['sort']) ? $_GET['sort'] : "";
if (!empty($orderField) && !empty($orderSort)) {
  $orderCondition = "ORDER BY book . " . $orderField . " ". $orderSort;
  $param .= "field=" . $orderField . "&sort=" . $orderSort . "&";
  // print_r($orderCondition); exit;

}

$item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 12; // 12 sản phẩm trên 1 trang
$current_page = !empty($_GET['page']) ? $_GET['page'] : 1; // trang số 1
$offset = ($current_page - 1) * $item_per_page; // id sản phẩm bắt đầu từ ...

if ($search) { // nếu search được thì chui vào đây
  $sql = "SELECT * FROM book WHERE deleted = '0' AND title LIKE N'%" . $search . "%'  " . $orderCondition . " LIMIT " . $item_per_page . " OFFSET " . $offset . " ";
  $totalRecords = mysqli_query($con, "SELECT * FROM book WHERE deleted = '0' AND title LIKE N'%" . $search . "%'"); // lấy tổng số sản phẩm
}

else {
  // print_r("SELECT * FROM book WHERE deleted = '0'  ".$orderCondition." LIMIT " . $item_per_page . " OFFSET " . $offset .""); exit;
  $sql = "SELECT * FROM book WHERE deleted = '0'  " . $orderCondition . " LIMIT " . $item_per_page . " OFFSET " . $offset . " ";
  $totalRecords = mysqli_query($con, "SELECT * FROM book WHERE deleted = '0'"); // lấy tổng số sản phẩm
}
$totalRecords = $totalRecords->num_rows; // lấy tổng số sản phẩm
$totalPages = ceil($totalRecords / $item_per_page); // tính tổng số trang -- làm tròn lên
?>



<body>

  <main>
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="slider-area">
            <div class="
                  slider-height2 slider-bg4
                  d-flex
                  align-items-center
                  justify-content-center
                ">
              <div class="hero-caption hero-caption2">
                <h2>Danh Mục Sách</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    $sql_category_book = mysqli_query($con, 'SELECT * FROM category ORDER BY id') or die(mysqli_error($con));
    ?>
    <div class="listing-area pt-50 pb-50">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="category-listing mb-50">
              <div class="single-listing">
                <form action="" method="GET">
                  <button type="submit" class="search-category">Search</button>
                  <div class="select-Categories pb-30">
                    <div class="small-tittle mb-20">
                      <h4>Thể loại</h4>
                    </div>
                    <!-- <a href="categories.php?id=''"></a> -->
                    <?php 
                    if(mysqli_num_rows($sql_category_book) > 0) {
                    while ($row_category_book = mysqli_fetch_array($sql_category_book)) { ?>
                      <?php
                      $checked = [];
                      if (isset($_GET['cate_id'])) {
                        $checked = $_GET['cate_id'];
                        // $param = "cate_id['id']=".$row_category_book['id']."&"; 
                      }
                      ?>
                      <div class="container">
                        <input type="checkbox" name="cate_id[]" value="<?= $row_category_book['id']; ?>" <?php if (in_array($row_category_book['id'], $checked)) { echo "checked"; } ?> />
                        <?php echo $row_category_book['name'] ?>
                      </div>
                    <?php } 
                      
                  } ?>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-xl-8 col-lg-8 col-md-6">
            <div class="row justify-content-end">
              <div class="col-xl-4">
                <div class="product_page_tittle">
                  <div class="short_by">
                    <select name="#" id="product_short_list" ONCHANGE="location = this.options[this.selectedIndex].value;">
                      <option value="categories.php">Sắp xếp</option>
                      <option <?php if (isset($_GET['sort']) && $_GET['sort'] == "desc" && isset($_GET['field']) && $_GET['field'] == "discount") { ?> selected <?php  } ?> value="?<?= $sortParam ?>field=discount&sort=desc">Giá Cao - Thấp</option>
                      <option <?php if (isset($_GET['sort']) && $_GET['sort'] == "asc" && isset($_GET['field']) && $_GET['field'] == "discount") { ?> selected <?php  } ?> value="?<?= $sortParam ?>field=discount&sort=asc">Giá Thấp - Cao</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="best-selling p-0">
              <div class="row">
                <!-- Danh mục sách -->
                <!-- Tính số trang và phân trang  -->
                <?php
                if (isset($_GET['cate_id'])) {
                  $cate_check = [];
                  $cate_check = $_GET['cate_id'];
                  // print_r($cate_check);
                  foreach ($cate_check as $row_cate) :
                    $product = "SELECT * FROM book WHERE category_id IN ($row_cate) AND deleted = '0'";
                    $sql_products_type = mysqli_query($con, $product) or die(mysqli_error($con));
                    if (mysqli_num_rows($sql_products_type) > 0) {
                      while ($row_products_type = mysqli_fetch_array($sql_products_type)) {
                ?>
                        <!-- Tính số trang và phân trang  -->
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
                          <div class="properties pb-30">
                            <div class="properties-card">
                              <div class="properties-img">
                                <a href="book-details.php?id='<?php echo $row_products_type['id'] ?>'"><img src="<?php echo $row_products_type['thumbnail'] ?>" alt="" width="198px" height="288px" /></a>
                              </div>
                              <div class="properties-caption properties-caption2">
                                <a href=""></a>
                                <h3><a href="book-details.php?id='<?php echo $row_products_type['id'] ?>'"><?php echo $row_products_type['title'] ?></a></h3>
                                <div class="
                                    properties-footer
                                    justify-content-between
                                    align-items-center
                                  ">
                                  <div class="price">
                                    <span><?php echo number_format($row_products_type['discount']) . 'đ' ?></span>
                                  </div>
                                  <div class="price">
                                    <?php if (isset($row_products_type['price'])) { ?>
                                      <del><?php echo number_format($row_products_type['price']) . 'đ' ?></span>
                                      <?php } else {
                                      echo ".<br>";
                                    } ?>
                                  </div>
                                </div>
                                <a href="cart.php" class="white-btn">Add to Cart</a>
                              </div>
                            </div>
                          </div>
                        </div>

                    <?php
                      }
                    }
                  endforeach;
                } 
                
                else {
                  $sql_products_list = mysqli_query($con, $sql) or die(mysqli_error($con));
                  while ($row_products_list = mysqli_fetch_array($sql_products_list)) {
                    ?>
                    <!-- Tính số trang và phân trang  -->

                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
                      <div class="properties pb-30">
                        <div class="properties-card">
                          <div class="properties-img">
                            <a href="book-details.php?id='<?php echo $row_products_list['id'] ?>'"><img src="<?php echo $row_products_list['thumbnail'] ?>" alt="" width="198px" height="288px" /></a>
                          </div>
                          <div class="properties-caption properties-caption2">
                            <a href=""></a>
                            <h3><a href="book-details.php?id='<?php echo $row_products_list['id'] ?>'"><?php echo $row_products_list['title'] ?></a></h3>
                            <div class="
                                properties-footer
                                justify-content-between
                                align-items-center
                              ">
                              <div class="price">
                                <span><?php echo number_format($row_products_list['discount']) . 'đ' ?></span>
                              </div>
                              <div class="price">
                                <?php if (isset($row_products_list['price'])) { ?>
                                  <del><?php echo number_format($row_products_list['price']) . 'đ' ?></span>
                                  <?php } else {
                                  echo ".<br>";
                                } ?>
                              </div>
                            </div>
                            <button class="white-btn" onclick="addCart(<?= $row_products_list['id'] ?>)">Add to Cart</button>

                            <!-- <a href="cart.php" class="white-btn" onclick="addCart('.$row_products_list['id'].', 1 )">Add to Cart</a> -->
                          </div>
                        </div>
                      </div>
                    </div>
                <?php
                  }
                }
                ?>
                <!-- end -->
              </div>
            </div>
            <?php include('./inc/pagination.php'); ?>
            <!-- <div class="row">
                <div class="col-xl-12">
                  <div class="more-btn text-center mt-15">
                    <a href="#" class="border-btn border-btn2 more-btn2"
                      >Browse More</a
                    >
                  </div>
                </div>
              </div> -->
          </div>
        </div>
      </div>
    </div>

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
                You can contact us by entering your email below, but this feature is lazy so we haven't done it yet. Sorry! :))
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
  <!-- <script>
    function addCart(id) {
      $.post("api/ajax.php", {
        'id': id
      }, function(data, status) {
        location.reload();
        item = str.split("-");
        $("#qty").text(item[0]);
        $("#total").text(item[1]);
      }
      );
    }
  </script> -->
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6ae198744e38196f","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>