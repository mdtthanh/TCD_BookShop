<?php 
  include_once('./db/connect.php');
  include_once('./models/categories.php');
  include_once('./models/slider.php');
  include_once('./models/products.php');

?>
<!DOCTYPE php>
<php class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Book Shop</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/icon/xfavicon.png.pagespeed.ic.OYy94fDeJN.webp"
    />

    <link rel="stylesheet" href="assets/css/A.bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="assets/css/A.style.css.pagespeed.cf.Fnn8ltgmZk.css"
    />
  </head>
  <body>
    <header>
      <div class="header-area">
        <div class="main-header">
          <div class="header-top">
            <div class="container">
              <div class="row">
                <div class="col-xl-12">
                  <div
                    class="
                      d-flex
                      justify-content-between
                      align-items-center
                      flex-sm
                    "
                  >
                    <div class="header-info-left d-flex align-items-center">
                      <div class="logo">
                        <a href="index.php"
                          ><script data-pagespeed-no-defer>
                            //<![CDATA[
                            (function () {
                              for (
                                var g =
                                    "function" == typeof Object.defineProperties
                                      ? Object.defineProperty
                                      : function (b, c, a) {
                                          if (a.get || a.set)
                                            throw new TypeError(
                                              "ES3 does not support getters and setters."
                                            );
                                          b != Array.prototype &&
                                            b != Object.prototype &&
                                            (b[c] = a.value);
                                        },
                                  h =
                                    "undefined" != typeof window &&
                                    window === this
                                      ? this
                                      : "undefined" != typeof global &&
                                        null != global
                                      ? global
                                      : this,
                                  k = ["String", "prototype", "repeat"],
                                  l = 0;
                                l < k.length - 1;
                                l++
                              ) {
                                var m = k[l];
                                m in h || (h[m] = {});
                                h = h[m];
                              }
                              var n = k[k.length - 1],
                                p = h[n],
                                q = p
                                  ? p
                                  : function (b) {
                                      var c;
                                      if (null == this)
                                        throw new TypeError(
                                          "The 'this' value for String.prototype.repeat must not be null or undefined"
                                        );
                                      c = this + "";
                                      if (0 > b || 1342177279 < b)
                                        throw new RangeError(
                                          "Invalid count value"
                                        );
                                      b |= 0;
                                      for (var a = ""; b; )
                                        if ((b & 1 && (a += c), (b >>>= 1)))
                                          c += c;
                                      return a;
                                    };
                              q != p &&
                                null != q &&
                                g(h, n, {
                                  configurable: !0,
                                  writable: !0,
                                  value: q,
                                });
                              var t = this;
                              function u(b, c) {
                                var a = b.split("."),
                                  d = t;
                                a[0] in d ||
                                  !d.execScript ||
                                  d.execScript("var " + a[0]);
                                for (var e; a.length && (e = a.shift()); )
                                  a.length || void 0 === c
                                    ? d[e]
                                      ? (d = d[e])
                                      : (d = d[e] = {})
                                    : (d[e] = c);
                              }
                              function v(b) {
                                var c = b.length;
                                if (0 < c) {
                                  for (var a = Array(c), d = 0; d < c; d++)
                                    a[d] = b[d];
                                  return a;
                                }
                                return [];
                              }
                              function w(b) {
                                var c = window;
                                if (c.addEventListener)
                                  c.addEventListener("load", b, !1);
                                else if (c.attachEvent)
                                  c.attachEvent("onload", b);
                                else {
                                  var a = c.onload;
                                  c.onload = function () {
                                    b.call(this);
                                    a && a.call(this);
                                  };
                                }
                              }
                              var x;
                              function y(b, c, a, d, e) {
                                this.h = b;
                                this.j = c;
                                this.l = a;
                                this.f = e;
                                this.g = {
                                  height:
                                    window.innerHeight ||
                                    document.documentElement.clientHeight ||
                                    document.body.clientHeight,
                                  width:
                                    window.innerWidth ||
                                    document.documentElement.clientWidth ||
                                    document.body.clientWidth,
                                };
                                this.i = d;
                                this.b = {};
                                this.a = [];
                                this.c = {};
                              }
                              function z(b, c) {
                                var a,
                                  d,
                                  e = c.getAttribute("data-pagespeed-url-hash");
                                if ((a = e && !(e in b.c)))
                                  if (0 >= c.offsetWidth && 0 >= c.offsetHeight)
                                    a = !1;
                                  else {
                                    d = c.getBoundingClientRect();
                                    var f = document.body;
                                    a =
                                      d.top +
                                      ("pageYOffset" in window
                                        ? window.pageYOffset
                                        : (
                                            document.documentElement ||
                                            f.parentNode ||
                                            f
                                          ).scrollTop);
                                    d =
                                      d.left +
                                      ("pageXOffset" in window
                                        ? window.pageXOffset
                                        : (
                                            document.documentElement ||
                                            f.parentNode ||
                                            f
                                          ).scrollLeft);
                                    f = a.toString() + "," + d;
                                    b.b.hasOwnProperty(f)
                                      ? (a = !1)
                                      : ((b.b[f] = !0),
                                        (a =
                                          a <= b.g.height && d <= b.g.width));
                                  }
                                a && (b.a.push(e), (b.c[e] = !0));
                              }
                              y.prototype.checkImageForCriticality = function (
                                b
                              ) {
                                b.getBoundingClientRect && z(this, b);
                              };
                              u(
                                "pagespeed.CriticalImages.checkImageForCriticality",
                                function (b) {
                                  x.checkImageForCriticality(b);
                                }
                              );
                              u(
                                "pagespeed.CriticalImages.checkCriticalImages",
                                function () {
                                  A(x);
                                }
                              );
                              function A(b) {
                                b.b = {};
                                for (
                                  var c = ["IMG", "INPUT"], a = [], d = 0;
                                  d < c.length;
                                  ++d
                                )
                                  a = a.concat(
                                    v(document.getElementsByTagName(c[d]))
                                  );
                                if (a.length && a[0].getBoundingClientRect) {
                                  for (d = 0; (c = a[d]); ++d) z(b, c);
                                  a = "oh=" + b.l;
                                  b.f && (a += "&n=" + b.f);
                                  if ((c = !!b.a.length))
                                    for (
                                      a += "&ci=" + encodeURIComponent(b.a[0]),
                                        d = 1;
                                      d < b.a.length;
                                      ++d
                                    ) {
                                      var e = "," + encodeURIComponent(b.a[d]);
                                      131072 >= a.length + e.length && (a += e);
                                    }
                                  b.i &&
                                    ((e =
                                      "&rd=" +
                                      encodeURIComponent(JSON.stringify(B()))),
                                    131072 >= a.length + e.length && (a += e),
                                    (c = !0));
                                  C = a;
                                  if (c) {
                                    d = b.h;
                                    b = b.j;
                                    var f;
                                    if (window.XMLHttpRequest)
                                      f = new XMLHttpRequest();
                                    else if (window.ActiveXObject)
                                      try {
                                        f = new ActiveXObject("Msxml2.XMLHTTP");
                                      } catch (r) {
                                        try {
                                          f = new ActiveXObject(
                                            "Microsoft.XMLHTTP"
                                          );
                                        } catch (D) {}
                                      }
                                    f &&
                                      (f.open(
                                        "POST",
                                        d +
                                          (-1 == d.indexOf("?") ? "?" : "&") +
                                          "url=" +
                                          encodeURIComponent(b)
                                      ),
                                      f.setRequestHeader(
                                        "Content-Type",
                                        "application/x-www-form-urlencoded"
                                      ),
                                      f.send(a));
                                  }
                                }
                              }
                              function B() {
                                var b = {},
                                  c;
                                c = document.getElementsByTagName("IMG");
                                if (!c.length) return {};
                                var a = c[0];
                                if (
                                  !("naturalWidth" in a && "naturalHeight" in a)
                                )
                                  return {};
                                for (var d = 0; (a = c[d]); ++d) {
                                  var e = a.getAttribute(
                                    "data-pagespeed-url-hash"
                                  );
                                  e &&
                                    ((!(e in b) &&
                                      0 < a.width &&
                                      0 < a.height &&
                                      0 < a.naturalWidth &&
                                      0 < a.naturalHeight) ||
                                      (e in b &&
                                        a.width >= b[e].o &&
                                        a.height >= b[e].m)) &&
                                    (b[e] = {
                                      rw: a.width,
                                      rh: a.height,
                                      ow: a.naturalWidth,
                                      oh: a.naturalHeight,
                                    });
                                }
                                return b;
                              }
                              var C = "";
                              u(
                                "pagespeed.CriticalImages.getBeaconData",
                                function () {
                                  return C;
                                }
                              );
                              u(
                                "pagespeed.CriticalImages.Run",
                                function (b, c, a, d, e, f) {
                                  var r = new y(b, c, a, e, f);
                                  x = r;
                                  d &&
                                    w(function () {
                                      window.setTimeout(function () {
                                        A(r);
                                      }, 0);
                                    });
                                }
                              );
                            })();

                            pagespeed.CriticalImages.Run(
                              "/mod_pagespeed_beacon",
                              "https://preview.colorlib.com/theme/abcbook/",
                              "-ilGEe-FWC",
                              true,
                              false,
                              "d-5BFhb81m0"
                            );
                            //]]>
                          </script>
                          <img
                             src="./assets/img/logo/logo3_footer.png"
                            alt=""
                            data-pagespeed-url-hash="3800066785"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>

                      <form action="#" class="form-box">
                        <input
                          type="text"
                          name="Search"
                          placeholder="Search"
                        />
                        <div class="search-icon">
                          <i class="ti-search"></i>
                        </div>
                      </form>
                    </div>
                    <div class="header-info-right d-flex align-items-center">
                      <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li class="shopping-card">
                          <a href="cart.php"
                            ><img
                              src="assets/img/icon/cart.svg"
                              alt=""
                              data-pagespeed-url-hash="605441959"
                              onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                          /></a>
                        </li>
                        <li>
                          <a href="login.php" class="btn header-btn"
                            >Đăng nhập</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="header-bottom header-sticky">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-xl-12">
                  <div class="logo2">
                    <a href="index.php"
                      ><img
                        src="data:image/webp;base64,UklGRlgHAABXRUJQVlA4TEwHAAAvpgAJEPWKgbRtuvq3vf0SImICgFT1Q7iRJCm2zoC3ODOfpO+/l4+2P57ctnySmVF7Jjz5MzNjQGgkyZHEH+X5ysyz/wiWYdtIimOzDIcPUGzbWt6ESTEzW2b6VWzGEIsWip/rDJj03zeCqj4dVcXcCTDTJZC0uQX2GnBb26or0X/Zw70X5lWwEyQyOrFIKIAm5mOJ7LoChGMBSQrDFLRtI8fYbfdfjaa2lQRgZicAuwHcLUAAC5jgNzDC60AMO8lAkiQZ5T6WMrOGN0i2bdu0nXX22vecffDw/3+bg72ih+KoxinZtq2ybTu5au0htdQct20kSfkHuM+rLLm6gQ1iGEaS01aSS8CZnJEACY+hatu+Ppm7b0nQA3CoMO1Ud8iLvr0d5wS8zaVhH9LHGTjU/yL+snHbRpLZ7alqHsFapS/kLHqxCBb9WnRl0YHGa/ZEd+QB0xiSOCjKJq9YvG9hZtHz1tYA2GQtMGnPZHQy+dXkXXuiDnrsCbcpY5OPu4pe/f+2sgZQElIFBaoc5k8GCjXVAY3JC6p8lXoGRZQ1gDqVRUOJaC+SdrpiBoJLtFmx5jaYEdYA6lwWHWWC9UiSeveU4PcgZtov/mDWF1r2RJrMBWUDZdn4z2Wb5OgJhmycgZaHUEY7Cqcxi44sgsVMJktOFoBkPehleMhEraKUlx3qS6WtrWdOM4FrKWiCXVWYTGs50UCic8TqgDLR3zBlh4pKu7uaijEcOCdwTAcxzFBmqEyrhGQQBXlh369VbNWt7fjA4JaCZDiUjMnopMgEkjYmrA6oYMlS6EQ5c3ioqID9oT/c3UMJ/TDGcG0AmFpkdcs1rAKUOOwT1vWj/PyIzmRgUWABCa4Je7BkobWfH8UF7A8id/fg7wzcS2JyPybaIfRWgI+STfwLyWTYorANJDzOpDlYctSnktL/fyYFyu8yZyallGfEtKkUX7uUHUU2GTDKJ0kWXhLNpPMhvwukNVhy2mdkSi8vHTO7t0zRa2EEDQigb1PVIs1RwvW53w5kWGhKaDrRgffoYNL5kuMF4vgm7MGSndbe3yNTEFjuK6xFygzEYwuB5l9Whp/nIYO31n0H0fVA2kIzJywtRSaTbi+5vUDc45uwB0suw+VEubi0BCYC8Py4+1fQk7Mlt2/1zKWUnkETvvXaQiLATdJC0ecEAhtrgc1kYx819gNpDZbctLa2Fh9bgMVzW42nmrvfsIqvQIHbAoA0bYlInEdpXC3DwuO0JsDkEbwxVSFQ3LdY7kNL2TfJPbNkIdynn2lE6MaNySNA3HBfsl2y2Xj5Fpeo1+t6RdqGEeyZtBCoiYmz88zEOQSKfYtlH1rqmSW7LlKdK3TmzGQFiHpFe9G8pvDTM8io13OJIE7tU0baAjcmBoOJPQSKymJRSUvJm+SeWbIvXNfP3cFgsgeImnEb4uaPeaE3+pxPbFCvAtNS87QF3tdSGuNxtZdAvqqYV9MSVie5Z5YcrDceV70AABj1LnYbUbLTzSr7+7AXnERATpK11w8ALCyUfQRyTTHX0BLWJrlnlnzeTcUVWpFY9YF5WBvDayLav1Q3SuRJXSg3bz3DAt/0sQEoVvJfWSmQrSuGWlrqmSVHd1MhQ//+FZUAQBVhExEHgykbDlEiVb5HNs80XrEAaQtcdMkKUFTxbKkUyOqLWT0t6fok98ySE2FcP6fOni2qYR3W4xaDiINBe6JAk5ddDdpS3S5NvaBdXVnMn7QFDrCFy8GDebXUywy0pBuT3DNLfj0nHBs6eLBAI7bbqNP8SAU7qyeZ59Hzvn53/GuaOlYtw8JVSepw9GjQCqSmYmqiJTUmuWeW9J8TsKGjR0MtYhsyVYDo/SvB6gB9GVMlg/ecLuRmB8q1SVmkPtInTmT1Ar6l2DPT4jcnuWeWfKp34kTAg67i7ssOVVXE3++tfPo9xNrdsdOvEr2V3LzOGQFKhoVBXz+kjTydGQV8a7FHocVbk9wzS7Y9JxBDp0+njWD1a6W0D8il3DJN+/3U9Ag+bc/TaFnH0CzxtC/BmsmMiX4/JYOZq2fhaBS+sRdZ8KntQAFR8F6BDwUY44QkRCsU+HRi+7EGmn5aHHqWo9FoJs9b+fWrt14DwLv0DQMKzmnwTMGOBtni7EmG7YAHOigumPVpExL0DwHw1FBd6Klg5lKBP3/+VOFaTu/tVshrGjR9OpHOHYO1rdxrvuQYr46Rl3JXpM+JCS0odaAHwMylIFsUVBS4Xlhw7QW1L7Y+J/frS6BWAvGIsJIMjxxJoA/ZNdV8V76/y1Mn/2vwcGHB2dvtPD8AZq4DcY7x6OiF5oKwNpLQ90vk2TRJiEmoIn+0Azq4lEhVo8sxwcx1xORCu49AQuPCWkeeTS35NoF1CfPRjHIzwcwlcEdgNjYLLG8F3hMY167te/tW4CeBFXEOdYoeiXS44+1bgWp1zbVvbwV+aNXtkKwlZi6BQ5Il+w5ti4c86lbI9++9HM+5vE3mg2TV9jHvAQ=="
                        alt=""
                        data-pagespeed-url-hash="3800066785"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                    /></a>
                  </div>

                  <div class="main-menu text-center d-none d-lg-block">
                    <nav>
                      <ul id="navigation">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="categories.php">Danh mục</a></li>
                        <li><a href="about.php">Liên hệ</a></li>
                        <li>
                          <a href="#">Trang</a>
                          <ul class="submenu">
                            <li><a href="login.php">Đăng nhập</a></li>
                            <li><a href="cart.php">Giỏ hàng</a></li>
                            <li><a href="checkout.php">Kiểm tra hàng</a></li>
                            <!-- <li>
                              <a href="book-details.php">book Details</a>
                            </li>
                            <li>
                              <a href="blog_details.php">Blog Details</a>
                            </li>
                            <li><a href="elements.php">Element</a></li> -->
                          </ul>
                        </li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>

                <div class="col-xl-12">
                  <div class="mobile_menu d-block d-lg-none"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
      <?php 
      $sql_slider = get_slider_list($con) or die (mysqli_error($con));
      while($row_slider = mysqli_fetch_array($sql_slider)) {
      ?>
      <div class="slider-area">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="slider-active dot-style">
                <div
                  class="
                    single-slider
                    slider-height slider-bg1
                    d-flex
                    align-items-center
                  "
                >
                  <div class="container">
                    <div class="row justify-content-center">
                      <div
                        class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7"
                      >
                        <div class="hero-caption text-center">
                          <span data-animation="fadeInUp" data-delay=".2s"
                            >Khoa học viễn tưởng</span
                          >
                          <h1 data-animation="fadeInUp" data-delay=".4s">
                            The History<br />
                            of Phipino
                          </h1>
                          <a
                            href="#"
                            class="btn hero-btn"
                            data-animation="bounceIn"
                            data-delay=".8s"
                            >Browse Store</a
                          >
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
      <?php } ?>

      <div class="best-selling section-bg">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
              <div class="section-tittle text-center mb-55">
                <h2>Sách bán chạy nhất</h2>
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
                while($row_products_hot = mysqli_fetch_array($sql_products_hot)) {
                ?>
                <div class="properties pb-20">
                  <div class="properties-card">
                    <div class="properties-img">
                      <a href="book-details.php"
                        ><img
                          src="assets/img/gallery/<?php echo $row_products_hot['product_image'] ?>"
                          alt=""
                          data-pagespeed-url-hash="1552297109"
                          onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                      /></a>
                    </div>
                    <div class="properties-caption">
                      <h3><a href="book-details.php"><?php echo $row_products_hot['product_name']  ?></a></h3>
                      <p>J. R Rain</p>
                      <div
                        class="
                          properties-footer
                          justify-content-between
                          align-items-center
                        "
                        >
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
                          <span><?php echo number_format($row_products_hot['product_price']) . 'đ'?></span>
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
          </div>
          <!-- end  -->
        </div>
      </div>

      <div class="services-area2 top-padding">
        <div class="container">
          <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-8">
              <div class="row">
                <div class="col-xl-12">
                  <div
                    class="
                      section-tittle
                      d-flex
                      justify-content-between
                      align-items-center
                      mb-40
                    "
                  >
                    <h2 class="mb-0">Nổi bật trong tuần</h2>
                    <a href="#" class="browse-btn">View All</a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-12">
                  <div class="services-active">
                    <div class="single-services d-flex align-items-center">
                      <div class="features-img">
                        <img
                          src="assets/img/gallery/xbest-books1.jpg.pagespeed.ic.a3LkFxg89O.webp"
                          alt=""
                          data-pagespeed-url-hash="4146589661"
                          onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        />
                      </div>
                      <div class="features-caption">
                        <img
                          src="assets/img/icon/logo.svg"
                          alt=""
                          data-pagespeed-url-hash="301647970"
                          onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        />
                        <h3>The Rage of Dragons</h3>
                        <p>By Evan Winter</p>
                        <div class="price">
                          <span>$50.00</span>
                        </div>
                        <div class="review">
                          <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </div>
                          <p>(120 Review)</p>
                        </div>
                        <a href="book-details.php" class="border-btn"
                          >View Details</a
                        >
                      </div>
                    </div>

                    <div class="single-services d-flex align-items-center">
                      <div class="features-img">
                        <img
                          src="assets/img/gallery/xbest-books1.jpg.pagespeed.ic.a3LkFxg89O.webp"
                          alt=""
                          data-pagespeed-url-hash="4146589661"
                          onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        />
                      </div>
                      <div class="features-caption">
                        <img
                          src="assets/img/icon/logo.svg"
                          alt=""
                          data-pagespeed-url-hash="301647970"
                          onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        />
                        <h3>The Rage of Dragons</h3>
                        <p>By Evan Winter</p>
                        <div class="price">
                          <span>$50.00</span>
                        </div>
                        <div class="review">
                          <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </div>
                          <p>(120 Review)</p>
                        </div>
                        <a href="book-details.php" class="border-btn"
                          >View Details</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-9">
              <div class="google-add">
                <img
                  src="assets/img/gallery/xad.jpg.pagespeed.ic.WvnALPgj6F.webp"
                  alt=""
                  class="w-100"
                  data-pagespeed-url-hash="833297940"
                  onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                />
              </div>
            </div>
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
                    <a
                      class="nav-link active"
                      id="nav-one-tab"
                      data-bs-toggle="tab"
                      href="#nav-one"
                      role="tab"
                      aria-controls="nav-one"
                      aria-selected="true"
                      >Tất cả</a
                    >
                    <a
                      class="nav-link"
                      id="nav-two-tab"
                      data-bs-toggle="tab"
                      href="#nav-two"
                      role="tab"
                      aria-controls="nav-two"
                      aria-selected="false"
                      >Kinh dị</a
                    >
                    <a
                      class="nav-link"
                      id="nav-three-tab"
                      data-bs-toggle="tab"
                      href="#nav-three"
                      role="tab"
                      aria-controls="nav-three"
                      aria-selected="false"
                      >Kinh doanh</a
                    >
                    <a
                      class="nav-link"
                      id="nav-four-tab"
                      data-bs-toggle="tab"
                      href="#nav-four"
                      role="tab"
                      aria-controls="nav-four"
                      aria-selected="false"
                      >Khoa học viễn tưởng</a
                    >
                    <a
                      class="nav-link"
                      id="nav-five-tab"
                      data-bs-toggle="tab"
                      href="#nav-five"
                      role="tab"
                      aria-controls="nav-five"
                      aria-selected="false"
                      >Lịch sử</a
                    >
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="tab-content" id="nav-tabContent">
            <div
              class="tab-pane fade show active"
              id="nav-one"
              role="tabpanel"
              aria-labelledby="nav-one-tab"
            >
              <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="./assets/img/gallery/best_selling1.jpg"
                            alt=""
                            data-pagespeed-url-hash="3319296635"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
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
                            <span>$5000000</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="./assets/img/gallery/best_selling2.jpg"
                            alt=""
                            data-pagespeed-url-hash="3613796556"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.oDhUaG4AKa.webp"
                            alt=""
                            data-pagespeed-url-hash="3024796714"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.CkpIchNcgs.webp"
                            alt=""
                            data-pagespeed-url-hash="2435796872"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.xDZdNrhC_d.webp"
                            alt=""
                            data-pagespeed-url-hash="3908296477"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.wJjzQ8gcEX.webp"
                            alt=""
                            data-pagespeed-url-hash="1846797030"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="nav-two"
              role="tabpanel"
              aria-labelledby="nav-two-tab"
            >
              <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.CkpIchNcgs.webp"
                            alt=""
                            data-pagespeed-url-hash="2435796872"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.xDZdNrhC_d.webp"
                            alt=""
                            data-pagespeed-url-hash="3908296477"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.wJjzQ8gcEX.webp"
                            alt=""
                            data-pagespeed-url-hash="1846797030"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.6FdDS-wiEO.webp"
                            alt=""
                            data-pagespeed-url-hash="3319296635"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.CAenHirwAq.webp"
                            alt=""
                            data-pagespeed-url-hash="3613796556"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.oDhUaG4AKa.webp"
                            alt=""
                            data-pagespeed-url-hash="3024796714"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="nav-three"
              role="tabpanel"
              aria-labelledby="nav-three-tab"
            >
              <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.6FdDS-wiEO.webp"
                            alt=""
                            data-pagespeed-url-hash="3319296635"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.CAenHirwAq.webp"
                            alt=""
                            data-pagespeed-url-hash="3613796556"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.oDhUaG4AKa.webp"
                            alt=""
                            data-pagespeed-url-hash="3024796714"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.CkpIchNcgs.webp"
                            alt=""
                            data-pagespeed-url-hash="2435796872"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.xDZdNrhC_d.webp"
                            alt=""
                            data-pagespeed-url-hash="3908296477"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.wJjzQ8gcEX.webp"
                            alt=""
                            data-pagespeed-url-hash="1846797030"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="nav-four"
              role="tabpanel"
              aria-labelledby="nav-four-tab"
            >
              <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.xDZdNrhC_d.webp"
                            alt=""
                            data-pagespeed-url-hash="3908296477"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.wJjzQ8gcEX.webp"
                            alt=""
                            data-pagespeed-url-hash="1846797030"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.6FdDS-wiEO.webp"
                            alt=""
                            data-pagespeed-url-hash="3319296635"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.CAenHirwAq.webp"
                            alt=""
                            data-pagespeed-url-hash="3613796556"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.oDhUaG4AKa.webp"
                            alt=""
                            data-pagespeed-url-hash="3024796714"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.CkpIchNcgs.webp"
                            alt=""
                            data-pagespeed-url-hash="2435796872"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="nav-five"
              role="tabpanel"
              aria-labelledby="nav-five-tab"
            >
              <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.6FdDS-wiEO.webp"
                            alt=""
                            data-pagespeed-url-hash="3319296635"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.CAenHirwAq.webp"
                            alt=""
                            data-pagespeed-url-hash="3613796556"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.oDhUaG4AKa.webp"
                            alt=""
                            data-pagespeed-url-hash="3024796714"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.CkpIchNcgs.webp"
                            alt=""
                            data-pagespeed-url-hash="2435796872"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.xDZdNrhC_d.webp"
                            alt=""
                            data-pagespeed-url-hash="3908296477"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.php"
                          ><img
                            src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.wJjzQ8gcEX.webp"
                            alt=""
                            data-pagespeed-url-hash="1846797030"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.php">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="more-btn text-center mt-15">
                <a href="#" class="border-btn border-btn2 more-btn2"
                  >Browse More</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-xl-6 col-lg-6">
            <div
              class="wantToWork-area w-padding2 mb-30"
              data-background="assets/img/gallery/wants-bg1.jpg"
            >
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
            <div
              class="wantToWork-area w-padding2 mb-30"
              data-background="assets/img/gallery/wants-bg2.jpg"
            >
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
    </main>
    <footer>
      <div class="footer-wrappper section-bg">
        <div class="footer-area footer-padding">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-xl-3 col-lg-5 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                  <div class="single-footer-caption mb-30">
                    <div class="footer-logo mb-25">
                      <a href="index.php"
                        ><img
                          src="assets/img/logo/xlogo2_footer.png.pagespeed.ic.wksTOD3AoG.webp"
                          alt=""
                          data-pagespeed-url-hash="2868754985"
                          onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                      /></a>
                    </div>
                    <div class="footer-tittle">
                      <div class="footer-pera">
                        <p>
                          Get the breathing space now, and we’ll extend your
                          term at the other end year for go.
                        </p>
                      </div>
                    </div>

                    <div class="footer-social">
                      <a href="https://bit.ly/sai4ull"
                        ><i class="fab fa-facebook"></i
                      ></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                <div class="single-footer-caption mb-50">
                  <div class="footer-tittle">
                    <h4>Danh mục sách</h4>
                    <ul>
                      <li><a href="#">Lịch sử</a></li>
                      <li><a href="#">Kinh dị - Giật gân</a></li>
                      <li><a href="#">Lãng mạn</a></li>
                      <li><a href="#">Khoa học viễn tưởng</a></li>
                      <li><a href="#">Kinh doanh</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                  <div class="footer-tittle">
                    <h4>&nbsp;</h4>
                    <ul>
                      <li><a href="#">Tiểu sử danh nhân</a></li>
                      <li><a href="#">Chiên tinh học</a></li>
                      <li><a href="#">Digital Marketing</a></li>
                      <li><a href="#">Software Development</a></li>
                      <li><a href="#">Thương mại điện tử</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                  <div class="footer-tittle">
                    <h4>Site Map</h4>
                    <ul class="mb-20">
                      <li><a href="#">Trang chủ</a></li>
                      <li><a href="#">Liên hệ</a></li>
                      <li><a href="#">FAQs</a></li>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">Contact</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-bottom-area">
          <div class="container">
            <div class="footer-border">
              <div class="row d-flex align-items-center">
                <div class="col-xl-12">
                  <div class="footer-copy-right text-center">
                    Bản quyền &copy;
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    Project được thực hiện bởi
                    <a
                      href="https://www.facebook.com/profile.php?id=100034572791259"
                      style="color: red"
                      target="_blank"
                      rel="nofollow noopener"
                      >Sinh viên lớp thầy Phương</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

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

    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
    <script
      defer
      src="https://static.cloudflareinsights.com/beacon.min.js"
      data-cf-beacon='{"rayId":"6ae16d83dea82254","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}'
      crossorigin="anonymous"
    ></script>
  </body>
</php>
