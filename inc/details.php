<?php 
  include('./db/connect.php');
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  } else {
    $id = '';
  }
  $sql_details = mysqli_query($con, "SELECT * FROM book WHERE id = '$id' ") or die(mysqli_error($con));
?>
   <main>
   <?php  
   while($row_details = mysqli_fetch_array($sql_details)){
   ?>
      <div class="services-area2">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="row">
                <div class="col-xl-12">
                  <div class="single-services d-flex align-items-center mb-0">
                    <div class="features-img">
                      <img
                        src="assets/img/gallery/best_selling1.jpg"
                        alt=""
                        data-pagespeed-url-hash="4146589661"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                      />
                    </div>
                    <div class="features-caption">
                      <h3>The Rage of Dragons</h3>
                      <p>By Evan Winter</p>
                      <div class="price">
                        <span>$50.0000000000</span>
                      </div>
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <br></br>
                      </div>
                      <a href="#" class="white-btn mr-10">Add to Cart</a>
                      <a href="#" class="border-btn share-btn"
                        ><i class="fas fa-share-alt"></i
                      ></a>
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
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a
                      class="nav-link active"
                      id="nav-one-tab"
                      data-bs-toggle="tab"
                      href="#nav-one"
                      role="tab"
                      aria-controls="nav-one"
                      aria-selected="true"
                      >Chi tiết sản phẩm</a
                    >
                    <!-- <a
                      class="nav-link"
                      id="nav-two-tab"
                      data-bs-toggle="tab"
                      href="#nav-two"
                      role="tab"
                      aria-controls="nav-two"
                      aria-selected="false"
                      >Author</a
                    > -->
                    <!-- <a
                      class="nav-link"
                      id="nav-three-tab"
                      data-bs-toggle="tab"
                      href="#nav-three"
                      role="tab"
                      aria-controls="nav-three"
                      aria-selected="false"
                      >Comments</a
                    > -->
                    <!-- <a
                      class="nav-link"
                      id="nav-four-tab"
                      data-bs-toggle="tab"
                      href="#nav-four"
                      role="tab"
                      aria-controls="nav-four"
                      aria-selected="false"
                      >Review</a
                    > -->
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="tab-content" id="nav-tabContent">
            <!-- chi tiết sản phẩm  -->
            <div
              class="tab-pane fade show active"
              id="nav-one"
              role="tabpanel"
              aria-labelledby="nav-one-tab"
            >
              <div class="row">
                <div class="offset-xl-1 col-lg-9">
                  <p>
                    Cook is one of Britain’s most talented and amusing
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
            </div>
            <!-- chi tiết sản phẩm  -->


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
          <div
            class="
              subscribe-caption
              text-center
              subscribe-padding
              section-img2-bg
            "
            data-background="assets/img/gallery/section-bg1.jpg"
          >
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
      <?php 
      } 
      ?>
    </main>