<?php
ob_start();
session_start();
include_once('./db/connect.php');
include_once('./models/categories.php');
include_once('./models/slider.php');
include_once('./models/products.php');
include_once('./utils/utility.php');
// include_once('./db/dbhelper.php');

?>
<!DOCTYPE php>
<php class="no-js" lang="zxx">

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Book Shop</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="./assets/css/A.bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/A.style.css.pagespeed.cf.Fnn8ltgmZk.css" />
    <link rel="stylesheet" href="../assets/fonts/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="./assets/css/base.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  </head>
  <header>
    <div class="header-area">
      <div class="main-header">
        <div class="header-top">
          <div class="container">
            <div class="row">
              <div class="col-xl-12">
                <div class="
                        d-flex
                        justify-content-between
                        align-items-center
                        flex-sm
                      ">
                  <div class="header-info-left d-flex align-items-center">
                    <div class="logo">
                      <a href="index.php">
                        <script data-pagespeed-no-defer>
                          //<![CDATA[
                          (function() {
                            for (
                              var g =
                                "function" == typeof Object.defineProperties ?
                                Object.defineProperty :
                                function(b, c, a) {
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
                                window === this ?
                                this :
                                "undefined" != typeof global &&
                                null != global ?
                                global :
                                this,
                                k = ["String", "prototype", "repeat"],
                                l = 0; l < k.length - 1; l++
                            ) {
                              var m = k[l];
                              m in h || (h[m] = {});
                              h = h[m];
                            }
                            var n = k[k.length - 1],
                              p = h[n],
                              q = p ?
                              p :
                              function(b) {
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
                                for (var a = ""; b;)
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
                              for (var e; a.length && (e = a.shift());)
                                a.length || void 0 === c ?
                                d[e] ?
                                (d = d[e]) :
                                (d = d[e] = {}) :
                                (d[e] = c);
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
                                c.onload = function() {
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
                                height: window.innerHeight ||
                                  document.documentElement.clientHeight ||
                                  document.body.clientHeight,
                                width: window.innerWidth ||
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
                                    ("pageYOffset" in window ?
                                      window.pageYOffset :
                                      (
                                        document.documentElement ||
                                        f.parentNode ||
                                        f
                                      ).scrollTop);
                                  d =
                                    d.left +
                                    ("pageXOffset" in window ?
                                      window.pageXOffset :
                                      (
                                        document.documentElement ||
                                        f.parentNode ||
                                        f
                                      ).scrollLeft);
                                  f = a.toString() + "," + d;
                                  b.b.hasOwnProperty(f) ?
                                    (a = !1) :
                                    ((b.b[f] = !0),
                                      (a =
                                        a <= b.g.height && d <= b.g.width));
                                }
                              a && (b.a.push(e), (b.c[e] = !0));
                            }
                            y.prototype.checkImageForCriticality = function(
                              b
                            ) {
                              b.getBoundingClientRect && z(this, b);
                            };
                            u(
                              "pagespeed.CriticalImages.checkImageForCriticality",
                              function(b) {
                                x.checkImageForCriticality(b);
                              }
                            );
                            u(
                              "pagespeed.CriticalImages.checkCriticalImages",
                              function() {
                                A(x);
                              }
                            );

                            function A(b) {
                              b.b = {};
                              for (
                                var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length;
                                ++d
                              )
                                a = a.concat(
                                  v(document.getElementsByTagName(c[d]))
                                );
                              if (a.length && a[0].getBoundingClientRect) {
                                for (d = 0;
                                  (c = a[d]); ++d) z(b, c);
                                a = "oh=" + b.l;
                                b.f && (a += "&n=" + b.f);
                                if ((c = !!b.a.length))
                                  for (
                                    a += "&ci=" + encodeURIComponent(b.a[0]),
                                    d = 1; d < b.a.length;
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
                              for (var d = 0;
                                (a = c[d]); ++d) {
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
                              function() {
                                return C;
                              }
                            );
                            u(
                              "pagespeed.CriticalImages.Run",
                              function(b, c, a, d, e, f) {
                                var r = new y(b, c, a, e, f);
                                x = r;
                                d &&
                                  w(function() {
                                    window.setTimeout(function() {
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
                        <img src="./assets/img/logo/logo3_footer.png" alt="" data-pagespeed-url-hash="3800066785" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                      </a>
                    </div>

                    <form action="categories.php" class="form-box" method="GET">
                      <input type="text" placeholder="Search" value="<?= isset($_GET['name']) ? $_GET['name'] : "" ?>" name="name" />
                      <button class="search-icon button-icon" type="submit">
                        <i class="ti-search"></i>
                      </button>
                    </form>
                  </div>
                  <?php
                  $number = 0;
                  $total = 0;
                  if (isset($_SESSION["cart"])) {
                    $cart = $_SESSION["cart"];
                    foreach ($cart as $value) {
                      $number += (int)$value["number"];
                      $total += (int)$value["number"] * (int)$value["price"];
                    }
                  }
                  // var_dump($_SESSION["cart"]);
                  ?>
                  <div class="header-info-right d-flex align-items-center">
                    <ul>
                      <li><a></a></li>
                      <li><a></a></li>
                      <!-- <li><a href="#">FAQs</a></li>
                    <li><a href="#">Track Order</a></li> -->
                      <li class="shopping-card">
                        <span>
                          <span class="cart_count" id="qty"><?= $number ?></span>
                          <input hidden id="total">
                          <a href="cart.php"><img src="assets/img/icon/cart.svg" /></a>
                        </span>
                      </li>
                      <li>
                        <a target="_blank" href="admin/authen/login.php" class="btn header-btn">Login</a>
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
                  <a href="index.php"><img src="./assets/img/logo/logo3_footer.png" alt="" data-pagespeed-url-hash="3800066785" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></a>
                </div>

                <div class="main-menu text-center d-none d-lg-block">
                  <nav>
                    <ul id="navigation">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="categories.php">Categories</a></li>
                      <li><a href="about.php">About</a></li>
                      <!-- <li>
                      <a href="#">Trang</a>
                      <ul class="submenu">
                        <li><a href="login.php">Login</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="checkout.php">Kiểm tra hàng</a></li>
                        <li>
                                <a href="book-details.php">book Details</a>
                              </li>
                              <li>
                                <a href="blog_details.php">Blog Details</a>
                              </li>
                              <li><a href="elements.php">Element</a></li>
                      </ul>
                    </li> -->
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

  <!-- hàm xử lý giỏ hàng -->
  <script>
    function addCart(id) {
      num = $("#num_" + id).val();
      if (num == "" || num == undefined) {
        num = 1;
      }
      // alert(num);
      $.post("api/ajax.php", {
        'id': id,
        'num': num
      }, function(data, status) {
        location.reload();
        item = str.split("-");
        $("#qty").text(item[0]);
        $("#total").text(item[1]);
      });
    }

    function updateCart(id) {
      num = $("#num_" + id).val();
      $.post('api/updateCart.php', {
          'id': id,
          'num': num
        },
        function(data) {
          // location.reload();
          $("#listCart").load("cart.php #listCart");
        });
    }

    function deleteCart(id) {
      $.post('api/updateCart.php', {
          'id': id,
          'num': 0
        },
        function(data) {
          location.reload();
        });
    }
  </script>