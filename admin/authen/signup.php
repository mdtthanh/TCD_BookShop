<?php
	session_start();

	require_once('../../utils/utility.php');
	require_once('../../db/dbhelper.php');
	require_once('process_form_signup.php');

	$user = getUserToken();
	if($user != null) {
		header('Location: ../');
		die();
	}
?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign up</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/icon/favicon.png">

    <link rel="stylesheet" href="../../assets/css/A.bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/A.style.css.pagespeed.cf.Fnn8ltgmZk.css">
</head>

<body>

    <main class="login-bg">

        <div class="register-form-area">
            <div class="register-form text-center" style="border-radius: 50px">

                <div class="register-heading">
                    <span>Sign Up</span>
                    <p>Create your account to get full access</p>
                    <h3 style="color: #fa0000; font-family: 'Roboto', 'sans-serif'"><?=$msg?></h3>
                </div>
                <form method="post" onsubmit="return validateForm();">
                    <div class="input-box">
                        
                        <div class="single-input-fields">
                            <label for="usr">Full name</label>
                            <input required="true" type="text" placeholder="Enter full name" style="border-radius: 20px" id="usr" name="fullname" value="<?=$fullname?>">
                        </div>
                        <div class="single-input-fields">
                            <label for="email">Email</label>
                            <input required="true" type="email" placeholder="Enter email address" style="border-radius: 20px" id="email" name="email" value="<?=$email?>">
                        </div>
                        <div class="single-input-fields">
                            <label for="pwd">Password</label>
                            <input required="true" type="password" placeholder="Enter Password" style="border-radius: 20px" id="pwd" name="password" minlength="8">
                        </div>
                        <div class="single-input-fields">
                            <label for="confirmation_pwd">Confirm Password</label>
                            <input required="true"  type="password" placeholder="Confirm Password" style="border-radius: 20px" id="confirmation_pwd">
                        </div>
                    </div>

                    <div class="register-footer">
                        <p> Already have an account? <a href="login.php"> Login</a> here</p>
                        <button class="submit-btn3 btn-success" style="border-radius: 35px">Sign Up</button>
                    
                    </div>
                </form>
            </div>
        </div>

    </main>

    <script type="text/javascript">
        function validateForm() {
            $pwd = $('#pwd').val();
            $confirmPwd = $('#confirmation_pwd').val();
            if($pwd != $confirmPwd) {
                alert("Password and Confirm Password Field do not match!")
                return false
            }
            return true
        }
    </script>
    <script src="../../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../../assets/js/popper.min.js+bootstrap.min.js.pagespeed.jc.RMqsw48A_a.js"></script>
    <script>eval(mod_pagespeed_usVz_HYIFh);</script>
    <script>eval(mod_pagespeed_64J4x1U9Lt);</script>

    <script src="../../assets/js/owl.carousel.min.js+slick.min.js.pagespeed.jc.8p3VYxlcxb.js"></script>
    <script>eval(mod_pagespeed_2b_kILWYuf);</script>
    <script>eval(mod_pagespeed_YcgqpOO3k2);</script>
    <script
        src="../../assets/js/jquery.slicknav.min.js+wow.min.js+jquery.magnific-popup.js+jquery.nice-select.min.js+jquery.counterup.min.js+waypoints.min.js.pagespeed.jc.gxrxPo5MLt.js"></script>
    <script>eval(mod_pagespeed_W070UA44Fy);</script>

    <script>eval(mod_pagespeed_HHFEHFyfva);</script>
    <script>eval(mod_pagespeed_He4JmNoJSL);</script>
    <script>eval(mod_pagespeed_Vq55GYBaD4);</script>
    <script>eval(mod_pagespeed_urzCQ$ljEK);</script>
    <script>eval(mod_pagespeed_yBL9chaY8Z);</script>
    <script src="../../assets/js/price_rangs.js+contact.js.pagespeed.jc.JVG_0UpWoX.js"></script>
    <script>eval(mod_pagespeed_6gHvth7EP8);</script>

    <script>eval(mod_pagespeed_gVyWNPnP1a);</script>
    <script
        src="../../assets/js/jquery.form.js+jquery.validate.min.js+mail-script.js+jquery.ajaxchimp.min.js+plugins.js+main.js.pagespeed.jc.FlL1_wvPXx.js"></script>
    <script>eval(mod_pagespeed_WxueWYkioV);</script>
    <script>eval(mod_pagespeed_JeTX5oy9W7);</script>
    <script>eval(mod_pagespeed_Dfx$DMKuSV);</script>
    <script>eval(mod_pagespeed_In2a_xtXil);</script>

    <script>eval(mod_pagespeed_ADDajFRwXo);</script>
    <script>eval(mod_pagespeed_R473QNJAOB);</script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"6ae19b8e795e6e2e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>