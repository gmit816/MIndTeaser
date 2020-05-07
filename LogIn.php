<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Reserve Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstarp-css -->
    <link href="css/bootstrap_login.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstarp-css -->
    <!-- css -->
    <link rel="stylesheet" href="css/style_login.css" type="text/css" media="all" />
    <!--// css -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <link href="css/css_offline_materialize.css" rel='stylesheet' type='text/css' />
    <link rel="shortcut icon" href="images/icon.png">
    <script src="js/materialize_off1.js"></script>
    <script src="js/materialize_off2.js"></script>
    <title>Log In</title>
</head>
<body background="http://localhost/MIndTeaser/bg.jpg">
<nav>
    <div class="grey darken-4" style="padding-bottom: 27px">
        <div class="navbar-wrapper container">
            <img class="activator responsive-img" src="">
        </div>
    </div>
</nav>
<!-- ui-login -->

<div class="ui-login center-align container" style="margin-top: 150px;">
    <div class="ui-login-left">
        <h3>Log In</h3>
        <p>Please Fill-Up Your Basic Information:</p>
        <form action="UtilityL.php" method="post">
            <input type="email" name="Email_ID" class="email" placeholder="   Email_ID" required="required" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$">
            <input type="password" name="Password" placeholder="Password" style="border-left: none; border-right: none; border-top: none;border-bottom: 1px solid #9e9e9e" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off">
    </div>
    <div class="ui-login-right">
        <br>
            <br>
            <input type="submit" value="login">
            <br>
            <br>
            <ul>
                <li>
                    <a href="SignUp.php">New To mindteaser?<br>Register Here!</a>
                </li>
                <li style="margin-top: 10px;">
                    <a href="FPassword.php">Forgot Password?</a>
                </li>
            </ul>
            <br>
            <br>
        </form>
    </div>
    <div class="clearfix"></div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<?php require("footer.php")?>
</body>
</html>