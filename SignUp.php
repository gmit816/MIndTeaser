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
    <style>
        input[type="text"], input[type="password"]{
            width: 300px !important;
            height: 40px !important;
            padding: 0px 10px !important;
        }
        p{
            text-align: center !important;
        }
    </style>
    <script type="text/javascript">

    </script>
    <title>Sign Up</title>
</head>
<body background="http://localhost/MIndTeaser/bg.jpg">
<nav>
    <div class="grey darken-4" style="padding-bottom: 27px">
        <div class="navbar-wrapper container">
            <img class="activator responsive-img" src="">
        </div>
    </div>
</nav>
<br>
<br>
<br>
<br>
    <div class="contact-grid center-align container">
        <h3><B>Register</B></h3>
        <br>
        <form action="Utility.php" method="post">
            <p><input type="text" name="First_name" placeholder="First Name" required="required"></p>
            <p><input type="text" name="Last_name" placeholder="Last Name" required="required"></p>
            <p><input type="email" name="Email_ID" placeholder="   Email" required="required" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" style="width: 320px;"></p>
            <!--tr><td><input type="text" name="Email_ID2" class="email" placeholder="Re-enter Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?"></td></tr-->
            <p><input type="password" name="Password" placeholder="Password" required="required" style="border-left: none; border-right: none; border-top: none;border-bottom: 1px solid #9e9e9e" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off"></p>
            <!--tr><td><input type="password" name="Password2" placeholder="Re-enter Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off"></td></tr-->
            <p><input type="submit" value="SignUp" name="submit"></p>
        </form>
        <br/>
        <a href="LogIn.php">Already a registered user?<br/>Log In From Here!</a>
    </div>
<?php require("footer.php")?>
</body>
</html>