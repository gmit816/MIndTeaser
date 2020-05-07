<!DOCTYPE html>
<!-- saved from url=(0062)https://www.onlinequizcreator.com/my-dashboard/item3239?id=114 -->
<html class="qwpage  js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en"><!--<![endif]-->
<head>
    <?php session_start();
    if(!isset($_SESSION["First_name"]))
        echo "<script>alert('You are suppose to Log In first.');document.location='index.php';</script>";
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <script type="text/javascript" src="./js/new/9b458065c4"></script>
    <script src="./js/new/nr-686.min.js"></script>
    <script src="./js/new/8520.js" async="" type="text/javascript"></script>
    <script async="" src="./js/new/analytics.js"></script>
    <script type="text/javascript">
        window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o?o:n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({QJf3ax:[function(e,n){function t(e){function n(n,t,a){e&&e(n,t,a),a||(a={});for(var u=c(n),f=u.length,s=i(a,o,r),p=0;f>p;p++)u[p].apply(s,t);return s}function a(e,n){f[e]=c(e).concat(n)}function c(e){return f[e]||[]}function u(){return t(n)}var f={};return{on:a,emit:n,create:u,listeners:c,_events:f}}function r(){return{}}var o="nr@context",i=e("gos");n.exports=t()},{gos:"7eSDFh"}],ee:[function(e,n){n.exports=e("QJf3ax")},{}],3:[function(e,n){function t(e){return function(){r(e,[(new Date).getTime()].concat(i(arguments)))}}var r=e("handle"),o=e(1),i=e(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(e,n){window.NREUM[n]=t("api-"+n)}),n.exports=window.NREUM},{1:12,2:13,handle:"D5DuLP"}],gos:[function(e,n){n.exports=e("7eSDFh")},{}],"7eSDFh":[function(e,n){function t(e,n,t){if(r.call(e,n))return e[n];var o=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return e[n]=o,o}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],D5DuLP:[function(e,n){function t(e,n,t){return r.listeners(e).length?r.emit(e,n,t):void(r.q&&(r.q[e]||(r.q[e]=[]),r.q[e].push(n)))}var r=e("ee").create();n.exports=t,t.ee=r,r.q={}},{ee:"QJf3ax"}],handle:[function(e,n){n.exports=e("D5DuLP")},{}],XL7HBI:[function(e,n){function t(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:i(e,o,function(){return r++})}var r=1,o="nr@id",i=e("gos");n.exports=t},{gos:"7eSDFh"}],id:[function(e,n){n.exports=e("XL7HBI")},{}],G9z0Bl:[function(e,n){function t(){var e=d.info=NREUM.info,n=f.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&n){c(p,function(n,t){n in e||(e[n]=t)});var t="https"===s.split(":")[0]||e.sslForHttp;d.proto=t?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=d.proto+e.agent,n.parentNode.insertBefore(r,n)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=e("handle"),c=e(1),u=window,f=u.document;e(2);var s=(""+location).split("?")[0],p={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-686.min.js"},d=n.exports={offset:i(),origin:s,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),u.addEventListener("load",t,!1)):(f.attachEvent("onreadystatechange",r),u.attachEvent("onload",t)),a("mark",["firstbyte",i()])},{1:12,2:3,handle:"D5DuLP"}],loader:[function(e,n){n.exports=e("G9z0Bl")},{}],12:[function(e,n){function t(e,n){var t=[],o="",i=0;for(o in e)r.call(e,o)&&(t[i]=n(o,e[o]),i+=1);return t}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],13:[function(e,n){function t(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(0>o?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=t},{}]},{},["G9z0Bl"]);
    </script>
    <!--<base href="https://www.onlinequizcreator.com/">--><base href=".">
    <meta name="author" content="Insyde Webdesign">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <meta name="title" content="My Quizzes">
    <meta name="description" content="Welcome to your personal dashboard. From here you can quickly navigate to your quizzes and assessments.">
    <link rel="stylesheet" type="text/css" href="./css/css">
    <link rel="stylesheet" type="text/css" href="./css/css(1)">
    <link rel="stylesheet" type="text/css" href="./css/css(2)">
    <link rel="shortcut icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="./css/style_new.css">
    <!--link rel="stylesheet" type="text/css" href="./My dashboard_files/widget_embed_191.css"-->
    <script type="text/javascript" src="./js/new/modernizr-2.0.6.min.js"></script>
    <!--script type="text/javascript">
        /*<![CDATA[*/
        (function(i,s,o,g,r,a,m){
            i['GoogleAnalyticsObject']=r;
            i[r]=i[r] || function(){
                (i[r].q=i[r].q||[]).push(arguments)
            }, i[r].l=1*new Date();
            a=s.createElement(o), m=s.getElementsByTagName(o)[0];
            a.async=1;
            a.src=g;
            m.parentNode.insertBefore(a,m)
        })
        (window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-37393424-2', 'www.onlinequizcreator.com');
        ga('require', 'displayfeatures');
        ga('send', 'pageview');
        setTimeout(function(){
            var a=document.createElement("script");
            var b=document.getElementsByTagName("script")[0];

            a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0027/8520.js?"+Math.floor(new Date().getTime()/3600000);
            a.async=true;
            a.type="text/javascript";
            b.parentNode.insertBefore(a,b)
        }, 1);
        /*]]>*/
    </script-->
    <title>Quiz</title>
    <meta class="foundation-data-attribute-namespace">
    <meta class="foundation-mq-xxlarge">
    <meta class="foundation-mq-xlarge-only">
    <meta class="foundation-mq-xlarge">
    <meta class="foundation-mq-large-only">
    <meta class="foundation-mq-large">
    <meta class="foundation-mq-medium-only">
    <meta class="foundation-mq-medium">
    <meta class="foundation-mq-small-only">
    <meta class="foundation-mq-small">
    <style></style>
</head>
<body class="page_qsettings page_content page_qsettings">
<div id="mm-0" class="mm-page mm-slideout">
    <div class="navbar mainnavbar">
        <div class="wrapper clearfix">
            <img class="activator responsive-img" src="">
            <a class="navlink" id="show-main-navigation" href="https://www.onlinequizcreator.com/my-dashboard/item3239#"></a>
            <div class="mainnav navigation clearfix">
                <nav>
                    <ul class="menu">
                        <li><a href="Help.php">Help</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="navbar menubar" style="position: relative;">
        <div class="wrapper clearfix">
            <div class="row">
                <div class="col8">
                    <div class="dashtabs">
                        <a class="navlink" id="show-quizmaster-navigation" href="https://www.onlinequizcreator.com/my-dashboard/item3239#"></a>
                        <div class="contentbox">
                            <div class="subnav navigation">
                                <nav>
                                    <ul class="menu level1">
                                        <li class="first haschildren">
                                            <a href="Dashboard.php">Dashboard</a></li>
                                        <li class="hier haschildren">
                                            <a href="Quiz.php">Quiz</a></li>
                                        <li class="haschildren">
                                            <a href="Profile.php">Profile</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col4 last">
                    <div class="accountbar">
                        <div class="loggedinas floatright dropdownify alignright">
                            <strong class="dropdowntitle">
                                <img alt="" class="gravatar" src="images/2cddaaf82d463a77689ecf2b0cf8ae1e"><?php echo $_SESSION["First_name"];
                                ?></strong>
                            <ul class="dropdownblock hide">
                                <li><a class="logout" href="LogOut.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-wrap" style="margin-top: 0px;">
        <div class="crumbrow">
            <div class="wrapper">
                <div class="row">
                    <div class="col12">
                        <nav>
                            <ul class="crumbpath clearfix">
                                <li class="first"><a href=""></a></li><li class="last hier"><a href=""></a></li></ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="bgwrap">
            <div class="wrapper clearfix">
                <div class="rowbox managecontainer">
                    <div class="row border_bottom manageheader">
                        <div class="col3">
                            <div class="contentbox">
                                <strong class="heading h3">Quiz</strong>
                            </div>
                        </div>
                        <div class="col9">
                            <div class="row">
                                <div class="col6">
                                    <div class="contentbox noLeftPadding">
                                        <h1>My Quiz</h1>
                                    </div>
                                </div>
                                <div class="col3">
                                    <div class="contentbox alignright">
                                        <p class="readmore"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col3">
                            <div class="navigation quiznav">
                                <nav>
                                    <ul class="menu level1">
                                        <li><a href="Dashboard.php">Dashboard</a></li>
                                        <li class="hier open"><a href="Quiz.php">Quiz</a></li>
                                        <li><a href="Profile.php">Profile</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col9">
                            <div class="contentbox noLeftPadding">
                                <div class="pagecontent">
                                    <div class="intro">
                                        <p>The quiz section provides a platform to create and play quiz.The other user can play your quiz after knowing the quiz id.</p>
                                    </div>
                                </div>
                                <div class="userdash row">
                                    <a href="Quiz_create.php" class="col2_25 qtype equal1 type_quiz" style="height: 200px;">
                                        <h3>Create Quiz</h3>
                                        <p>Create your own personalized Quiz by just clicking this and following the few steps</p>
                                        <span>To Create Quiz</span>
                                    </a>
                                    <a href="Quiz_play.php" class="col2_25 qtype equal1 type_assessment" style="height: 303px;">
                                        <h3>Play Quiz</h3>
                                        <p>Play the pre-created quiz.Test Your brains by just clicking this and get your result</p>
                                        <span>To Play Quiz</span>
                                    </a>
                                    <a href="Quiz_view.php" class="col2_25 qtype equal1 type_assessment" style="height: 303px;">
                                        <h3>View/Delete Quiz</h3>
                                        <p>View/Delete the quizzes which you created.View/Delete quizzes by just clicking this.</p>
                                        <span>To View/Delete Quiz</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="./js/new/jquery.min.js"></script>
<script type="text/javascript" src="./js/new/335546170.js"></script>
<script type="text/javascript" src="./js/new/jquery.mmenu.min.all.js"></script>
<script type="text/javascript" src="./js/new/responsive-nav.js"></script><div id="mm-blocker" class="mm-slideout"></div>
<script type="text/javascript" src="./js/new/foundation.js"></script>
<script type="text/javascript" src="./js/new/foundation.dropdown.js"></script>
<script type="text/javascript" src="./js/new/script.js"></script>
<script type="text/javascript" src="./js/new/analytics(1).js"></script>
<!--script type="text/javascript">
    /*<![CDATA[*/
    new DESK.Widget({
        version: 1,
        site: 'onlinequizcreator.desk.com',
        port: '80',
        type: 'email',
        displayMode: 0,
        features: {
        },
        fields: {
            interaction: {'email':'gmit816@gmail.com','name':'gmit816'},
        }
    }).render();

    $('a.a-desk-widget-email').on('click', function(e){
        e.preventDefault();
    });
    /*]]>*/
</script>
<span class="assistly-widget" id="assistly-widget-1">
    <a href="https://www.onlinequizcreator.com/#" class="a-desk-widget a-desk-widget-email" style="text-decoration:none;width:65px;display:inline-block;min-height:22px;background: url(https://d3j15y3zsn7b4t.cloudfront.net/images/customer/widget/email/launch_email_sprite.png) no-repeat scroll 0 0px transparent;" onmouseover="this.style.backgroundPosition=&#39;0 -20px&#39;" onmouseout="this.style.backgroundPosition=&#39;0 0px&#39;" onclick="window.open(&#39;https://onlinequizcreator.desk.com/customer/widget/emails/new?interaction[email]=gmit816@gmail.com&amp;interaction[name]=gmit816&amp;&#39;, &#39;assistly_chat&#39;,&#39;resizable=1, status=0, toolbar=0,width=640,height=700&#39;)">&nbsp;</a>
</span>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"9b458065c4","applicationID":"9256359","transactionName":"blFaMUVXDUBQVEVRV1cbbRdeGRBaRVIeUVZdUUBLR14T","queueTime":0,"applicationTime":109,"atts":"QhZZRw1NHk4=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-686.min.js"}</script-->
</body>
</html>