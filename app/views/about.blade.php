<!DOCTYPE html>
<html lang="en">
<head>
    <title>About me</title>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name = "format-detection" content = "telephone=no" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/style.css">
    
	<script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/forms.js"></script>
    
         
    <script src='js/camera.js'></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    
    
    
    <!--[if lt IE 9]>
    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
    <link rel="stylesheet" href="assets/tm/css/tm_docs.css" type="text/css" media="screen">
    <script src="assets/assets/js/html5shiv.js"></script> 
    <script src="assets/assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
<!--==============================header=================================-->
<header id="header">
      <div class="container">
        <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img alt="Grill point" src="img/logo.png"></a></h1>
      </div>
      <div class="menuheader">
          <div class="container">
            <nav class="navbar navbar-default navbar-static-top tm_navbar" role="navigation">
                <ul class="nav sf-menu">
                  <li><a href="index.html">home</a>
                    <ul>
                      <li><img src="img/arrowup.png" alt=""><a href="#">info</a></li>
                      <li><a href="#">profile</a></li>
                      <li><a class="last" href="#">news</a>
                        <ul>
                           <li><a href="#">fresh</a></li>
                           <li><a class="last" href="#">archive</a></li>                       
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="active"><a href="{{{ action('HomeController@showAboutMe')}}}">about me</a></li>
                  <li><a href="index-2.html">gallery</a></li>
                  <li><a href="index-3.html">links</a></li>
                  <li><a href="index-4.html">location</a></li>
                </ul>
            </nav>
          </div>
      </div>
</header>
<!--==============================content=================================-->
<div id="content">
    <!--==============================row5=================================-->
    <div class="row_5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 reserve_table">
                    <h2>My Short Bio</h2>
                    <figure><img src="img/page2_img1.jpg" alt=""></figure>
                    <h3>omnis iste natus error sit voluptatem accusantium doloremquel</h3>
                    <p class="m_bot2">Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. </p>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</p>
                    
                    
                    <h2 class="pad_top1">My Experience</h2>
                    <h3>iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</h3>
                    <p>Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, con
sectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dol.</p>
                </div>
                
                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4">
                    <h2>How I Work</h2>
                    <hr class="line2">
                    <p class="title5">Vivamus eget tincidunt lacus, eget dapibus pendisse at tempus quam.</p>
                    <h2 class="pad_bot1">Hire Me Now</h2>
                        <form id="contact-form2" class="reservation-form">
                          <div class="success">Reservation form submitted! <strong>We will be in touch soon.</strong> </div>
                          <fieldset>
                            <div class="coll-1">
                              <div class="txt-form">Name<span></span></div>
                              <label class="name">
                                <input type="text" value="Name:"><br>
                                <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="coll-2">
                              <div class="txt-form">Email<span>:</span></div>
                              <label class="email">
                                <input type="email" value="E-mail:"><br>
                                <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="coll-3">
                              <div class="txt-form">phone:</div>
                              <label class="arrival notRequired">
                                <input type="tel" value="Phone:"><br>
                                <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="coll-4">
                              <div class="txt-form">phone:</div>
                              <label class="Length of stay notRequired">
                                <input type="tel" value="Fax:"><br>
                                <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="clear"></div>
                            <div>
                              <div class="txt-form">Comment<span>*</span></div>
                              <label class="message">
                                <textarea>Comments:</textarea><br>
                                <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="clear"></div>
                          </fieldset>
                          <div class="buttons-wrapper clearfix"><a href="#" class="btn-link btn-link2" data-type="submit">send<span></span></a><a href="#" class="btn-link btn-link2" data-type="reset">clear<span></span></a></div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================footer=================================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                <ul class="social_icons clearfix">
                     <li><a href="#"><img src="img/follow_icon1.png" alt=""></a></li>
                     <li><a href="#"><img src="img/follow_icon2.png" alt=""></a></li>
                     <li><a href="#"><img src="img/follow_icon3.png" alt=""></a></li>
                     <li><a href="#"><img src="img/follow_icon4.png" alt=""></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footerlogo footercol">
                <a class="smalllogo2 logo" href="index.html"><img src="img/logofooter.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                <p class="footerpriv">&copy; 2013 &bull; <a class="privacylink" href="index-5.html">Privacy policy</a></p>
            </div>
        </div>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
</html>