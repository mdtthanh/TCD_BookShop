<main>
  <!-- slider -->
  <div class="slider-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="slider-active dot-style">
            <div class="
                    single-slider
                    slider-height slider-bg1
                    d-flex
                    align-items-center
                  ">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                    <div class="hero-caption text-center">
                      <span data-animation="fadeInUp" data-delay=".2s">TCD Book</span>
                      <h1 data-animation="fadeInUp" data-delay=".4s">
                        Welcome<br />
                        to Website
                      </h1>
                      <a href="categories.php" class="btn hero-btn" data-animation="bounceIn" data-delay=".3s">Browse Store</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="
                    single-slider
                    slider-height slider-bg3
                    d-flex
                    align-items-center
                  ">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                    <div class="hero-caption text-center">
                      <span data-animation="fadeInUp" data-delay=".2s">TCD Book</span>
                      <h1 data-animation="fadeInUp" data-delay=".4s">
                        Welcome<br />
                        to Website
                      </h1>
                      <a href="categories.php" class="btn hero-btn" data-animation="bounceIn" data-delay=".3s">Browse Store</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="
                    single-slider
                    slider-height slider-bg2
                    d-flex
                    align-items-center
                  ">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                    <div class="hero-caption text-center">
                      <span data-animation="fadeInUp" data-delay=".2s">TCD Book</span>
                      <h1 data-animation="fadeInUp" data-delay=".4s">
                        Welcome<br />
                        to Website
                      </h1>
                      <a href="categories.php" class="btn hero-btn" data-animation="bounceIn" data-delay=".3s">Browse Store</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->

  <div class="best-selling section-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8">
          <div class="section-tittle text-center mb-55">
            <h2>Sách mới nhất</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <!-- sách bán chạy -->
          <div class="selling-active">
            <?php
            $sql_products_hot = get_products_hot($con) or die(mysqli_error($con));
            ?>
            <?php
            while ($row_products_hot = mysqli_fetch_array($sql_products_hot)) {
            ?>
              <div class="properties pb-20">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.php?id='<?php echo $row_products_hot['id'] ?>'"><img src="<?php echo $row_products_hot['thumbnail'] ?>" alt="" width="198px" height="288px" data-pagespeed-url-hash="1552297109" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></a>
                  </div>
                  <div class="properties-caption">
                    <h3><a href="book-details.php?id=<?= $row_products_hot['id'] ?>"><?php echo $row_products_hot['title'] ?></a></h3>

                    <div class="
                          properties-footer
                          justify-content-between
                          align-items-center
                        ">

                      <div class="price">
                        <span><?php echo number_format($row_products_hot['discount']) . 'đ' ?></span>
                      </div>
                      <div class="price">
                        <?php if (isset($row_products_hot['price'])) { ?>
                          <del><?php echo number_format($row_products_hot['price']) . 'đ' ?></span>
                          <?php } else {
                          echo ".<br>";
                        } ?>
                      </div>
                    </div>
                    <p><button class="white-btn" onclick="addCart(<?= $row_products_hot['id'] ?>) ">Add to Cart</button></p>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services-area2 top-padding">
    <div class="container">
      <div class="row">
      <?php
                $sql_products_hot_inweek = get_products_hot_inweek($con) or die(mysqli_error($con));
                $row_products_hot_inweek = mysqli_fetch_array($sql_products_hot_inweek);
                if ($row_products_hot_inweek != null) {
                  echo '<div class="col-xl-9 col-lg-9 col-md-8">

                    <div class="row">
                      <div class="col-xl-12">
                        <div class="
                                section-tittle
                                d-flex
                                justify-content-between
                                align-items-center
                                mb-40
                              ">
                          <h2 class="mb-0">Nổi bật trong tuần</h2>
                          <a href="categories.php" class="browse-btn">View All</a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-xl-12">
                        <div class="services-active">
                          <div class="single-services d-flex align-items-center">
                            <div class="features-img" style="width: 200px">
                              <a href="book-details.php?id='.$row_products_hot_inweek['id'].'">
                                <img src="./'.$row_products_hot_inweek['thumbnail'].'" style="width: 100%" data-pagespeed-url-hash="4146589661" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                              </a>
                            </div>
                            <div class="features-caption">
                              <h3><a href="book-details.php?id='.$row_products_hot_inweek['id'].'">'.$row_products_hot_inweek['title'] .'</a></h3>
                              <p>'.$row_products_hot_inweek['author'] .'</p>
                              <div class="price">
                                <span>'.number_format($row_products_hot_inweek['discount']).'đ</span>
                              </div>
                              <div class="review">
                                <p>'. $row_products_hot_inweek['BSL'].' lượt mua trong tuần</p>
                              </div>
                              <a href="book-details.php?id='. $row_products_hot_inweek['id'].'" class="border-btn">View Details</a>
                            </div>
                          </div>
                
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-9">
                    <div class="google-add">
                      <a href="book-details.php?id='. $row_products_hot_inweek['id'] .'">
                        <img src="./'.$row_products_hot_inweek['thumbnail'].'" alt="" class="w-100" data-pagespeed-url-hash="833297940" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                      </a>
                    </div>
                  </div>';
                }
      ?>
      </div>
    </div>
  </div>

  <section class="our-client section-padding best-selling">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-xl-5 col-lg-5 col-md-12">
          <div class="section-tittle mb-40">
            <h2>Sách xuất bản mới nhất</h2>
          </div>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-12">
          <div class="nav-button mb-40">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" role="tab" aria-controls="nav-one" aria-selected="true">Tất cả</a>
                <a class="nav-link" id="nav-two-tab">Kinh dị</a>
                <a class="nav-link" id="nav-three-tab">Giật gân</a>
                <a class="nav-link" id="nav-four-tab">Khoa học viễn tưởng</a>
                <a class="nav-link" id="nav-five-tab">Lịch sử</a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
          <div class="row">
            <!-- sách bán chạy -->
            <div class="col-xl-12">
              <div class="selling-active">
                <?php
                $sql_products_new = get_products_new($con) or die(mysqli_error($con));
                ?>
                <?php
                while ($row_products_new = mysqli_fetch_array($sql_products_new)) {
                ?>
                  <div class="properties pb-20">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php?id=<?= $row_products_new['id'] ?>"><img src="<?php echo $row_products_new['thumbnail'] ?>" alt="" width="198px" height="288px" data-pagespeed-url-hash="1552297109" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></a>
                      </div>
                      <div class="properties-caption">
                        <h3><a href="book-details.php?id=<?= $row_products_new['id'] ?>"><?php echo $row_products_new['title']  ?></a></h3>

                        <div class="
                          properties-footer
                          justify-content-between
                          align-items-center
                        ">
                          <div class="price">
                            <span><?php echo number_format($row_products_new['discount']) . 'đ' ?></span>
                          </div>
                          <div class="price">
                            <?php if (isset($row_products_new['price'])) { ?>
                              <del><?php echo number_format($row_products_new['price']) . 'đ' ?></span>
                              <?php } else {
                              echo ".<br>";
                            } ?>
                          </div>
                        </div>
                        <p><button class="white-btn" onclick="addCart(<?= $row_products_new['id'] ?>) ">Add to Cart</button></p>

                      </div>
                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
              <!-- end -->
            </div>
            <div>
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.php">
                      <!-- <img
                            src="./assets/img/"
                            alt=""
                            data-pagespeed-url-hash="3319296635"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /> -->
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
          <div class="row">
            <!-- sách bán chạy -->
            <div class="col-xl-12">
              <div class="selling-active">
                <?php
                $sql_products_hot = get_products_hot($con) or die(mysqli_error($con));
                ?>
                <?php
                while ($row_products_hot = mysqli_fetch_array($sql_products_hot)) {
                ?>
                  <div class="properties pb-20">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"><img src="<?php echo $row_products_hot['thumbnail'] ?>" alt="" data-pagespeed-url-hash="1552297109" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></a>
                      </div>
                      <div class="properties-caption">
                        <h3><a href="book-details.php"><?php echo $row_products_hot['title']  ?></a></h3>
                        <p>J. R Rain</p>
                        <div class="
                          properties-footer
                          justify-content-between
                          align-items-center
                        ">
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                          </div>
                          <div class="price">
                            <span><?php echo number_format($row_products_hot['discount']) . 'đ' ?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
            </div>
            <!-- end -->
          </div>
        </div>


        <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">
          <div class="row">
            <!-- sách bán chạy -->
            <div class="col-xl-12">
              <div class="selling-active">
                <?php
                $sql_products_hot = get_products_hot($con) or die(mysqli_error($con));
                ?>
                <?php
                while ($row_products_hot = mysqli_fetch_array($sql_products_hot)) {
                ?>
                  <div class="properties pb-20">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"><img src="<?php echo $row_products_hot['thumbnail'] ?>" alt="" data-pagespeed-url-hash="1552297109" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></a>
                      </div>
                      <div class="properties-caption">
                        <h3><a href="book-details.php"><?php echo $row_products_hot['title']  ?></a></h3>
                        <p>J. R Rain</p>
                        <div class="
                          properties-footer
                          justify-content-between
                          align-items-center
                        ">
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                          </div>
                          <div class="price">
                            <span><?php echo number_format($row_products_hot['discount']) . 'đ' ?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
            </div>
            <!-- end -->
          </div>
        </div>


        <div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab">
          <div class="row">
            <!-- sách bán chạy -->
            <div class="col-xl-12">
              <div class="selling-active">
                <?php
                $sql_products_hot = get_products_hot($con) or die(mysqli_error($con));
                ?>
                <?php
                while ($row_products_hot = mysqli_fetch_array($sql_products_hot)) {
                ?>
                  <div class="properties pb-20">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"><img src="<?php echo $row_products_hot['thumbnail'] ?>" width="198px" height="288px" alt="" data-pagespeed-url-hash="1552297109" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></a>
                      </div>
                      <div class="properties-caption">
                        <h3><a href="book-details.php"><?php echo $row_products_hot['title']  ?></a></h3>
                        <p>J. R Rain</p>
                        <div class="
                          properties-footer
                          justify-content-between
                          align-items-center
                        ">
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                          </div>
                          <div class="price">
                            <span><?php echo number_format($row_products_hot['discount']) . 'đ' ?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
            </div>
            <!-- end -->
            <div class="properties-card">
              <div class="properties-img">
                <a href="book-details.php"><img src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.wJjzQ8gcEX.webp" alt="" data-pagespeed-url-hash="1846797030" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="more-btn text-center mt-15">
          <a href="categories.php" class="border-btn border-btn2 more-btn2">Browse More</a>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-xl-6 col-lg-6">
        <div class="wantToWork-area w-padding2 mb-30" data-background="assets/img/gallery/wants-bg1.jpg">
          <h2>
            The History<br />
            of Phipino
          </h2>
          <div class="linking">
            <a href="#" class="btn wantToWork-btn">View Details</a>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6">
        <div class="wantToWork-area w-padding2 mb-30" data-background="assets/img/gallery/wants-bg2.jpg">
          <h2>Wilma Mumduya</h2>
          <div class="linking">
            <a href="#" class="btn wantToWork-btn">View Details</a>
          </div>
        </div>
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