<!--==============================header=================================-->
<header id="header">
      <div class="container">
        <h1 class="navbar-brand navbar-brand_"><a href="{{{ action('HomeController@showHome') }}}"><img alt="Grill point" src="img/logo.png"></a></h1>
      </div>
      <div class="menuheader">
          <div class="container">
            <nav class="navbar navbar-default navbar-static-top tm_navbar" role="navigation">
                <ul class="nav sf-menu">
                  <li class="active"><a href="{{{ action('HomeController@showHome') }}}">home</a>
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
                  <li><a href="{{{ action('HomeController@showAboutMe') }}}">about me</a></li>
                  <li><a href="{{{ action('HomeController@showGallery') }}}">gallery</a></li>
                  <li><a href="{{{ action('HomeController@showLinks') }}}">links</a></li>
                  <li><a href="{{{ action('HomeController@showLocation') }}}">location</a></li>
                </ul>
            </nav>
          </div>
      </div>
</header>