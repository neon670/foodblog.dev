@extends('layouts.master')
<head>
 @section('title')
    Gallery
@stop  
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
    <link rel="stylesheet" href="css/touchTouch.css">
    
	<script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script  src="js/touchTouch.jquery.js"></script>
    
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>	
<script>
    
    $(window).load(function() {  
    var $container = $('#container');
    //Run to initialise column sizes
    updateSize();

    //Load masonry when images all loaded
    $container.imagesLoaded( function(){

        $container.isotope({
            // options
            itemSelector : '.element',	
            layoutMode : 'masonry',
            transformsEnabled: true,
            columnWidth: function( containerWidth ) {
                containerWidth = $browserWidth;
                return Math.floor(containerWidth / $cols);
              }
        });
    });
    
	    // update columnWidth on window resize
    $(window).smartresize(function(){  
        updateSize();
        $container.isotope( 'reLayout' );
    });
	
    //Set item size
    function updateSize() {
        $browserWidth = $container.width();
        $cols = 4;

        if ($browserWidth >= 1170) {
            $cols = 4;
        }
        else if ($browserWidth >= 800 && $browserWidth < 1170) {
            $cols = 3;
        }
        else if ($browserWidth >= 480 && $browserWidth < 800) {
            $cols = 2;
        }
        else if ($browserWidth >= 320 && $browserWidth < 480) {
            $cols = 1;
        }
        else if ($browserWidth < 401) {
            $cols = 1;
        }
        //console.log("Browser width is:" + $browserWidth);
        //console.log("Cols is:" + $cols);

        // $gutterTotal = $cols * 20;
		$browserWidth = $browserWidth; // - $gutterTotal;
        $itemWidth = $browserWidth / $cols;
        $itemWidth = Math.floor($itemWidth);

        $(".element").each(function(index){
            $(this).css({"width":$itemWidth+"px"});             
        });
			

    
	  var $optionSets = $('#options .option-set'),
	      $optionLinks = $optionSets.find('a');

	  $optionLinks.click(function(){
	    var $this = $(this);
	    // don't proceed if already selected
	    if ( $this.hasClass('selected') ) {
	      return false;
	    }
	    var $optionSet = $this.parents('.option-set');
	    $optionSet.find('.selected').removeClass('selected');
	    $this.addClass('selected');

	    // make option object dynamically, i.e. { filter: '.my-filter-class' }
	    var options = {},
	        key = $optionSet.attr('data-option-key'),
	        value = $this.attr('data-option-value');
	    // parse 'false' as false boolean
	    value = value === 'false' ? false : value;
	    options[ key ] = value;
	    if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
	      // changes in layout modes need extra logic
	      changeLayoutMode( $this, options )
	    } else {
	      // otherwise, apply new options
	      $container.isotope( options );
	    }
	    
	    return false;
	  });		

    };

        // Initialize the gallery
        $('.thumb').touchTouch();
    
    });
    
  </script>
  
    
    
    <!--[if lt IE 9]>
    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
    <link rel="stylesheet" href="assets/tm/css/tm_docs.css" type="text/css" media="screen">
    <script src="assets/assets/js/html5shiv.js"></script> 
    <script src="assets/assets/js/respond.min.js"></script>
  <![endif]-->
</head>
@section('gallery')
<body>
<!--==============================content=================================-->
<div id="content">
    <!--==============================row6=================================-->
    <div class="row_6">
        <div class="container">
            <h2 class="pad_bot3">Gallery Overview</h2>
            <div class="row">
        		<div class="col-lg-12 col-md-12 col-sm-12">
                  <div id="options" class="clearfix">
                      <ul id="filters" class="pagination option-set clearfix" data-option-key="filter">
                        <li><a href="#filter" data-option-value="*" class="selected">Show all</a></li>
                        <li><a href="#filter" data-option-value=".people">people</a></li>
                        <li><a href="#filter" data-option-value=".macro ">macro</a></li>
                        <li><a href="#filter" data-option-value=".nature">nature</a></li>
                        <li><a href="#filter" data-option-value=".night">night</a></li>
                        <li><a href="#filter" data-option-value=".panoramic">panoramic</a></li>
                        <li><a href="#filter" data-option-value=".sports">sports</a></li>
                      </ul>
                  </div><!-- #options -->
                  <div class="containerExtra">
                  <div id="container" class="clearfix">
                   
                    <div class="element transition people" data-category="transition">
                    	<a href="img/page3_bigimg1.jpg" class="thumb"><figure class="img-polaroid"><img src="img/page3_img1.jpg" alt=""></figure></a><span class="description">quia non numquam</span>
                    </div>
                    <div class="element transition people" data-category="transition"> 
                    	<a href="img/page3_bigimg2.jpg" class="thumb"><figure class="img-polaroid"><img src="img/page3_img2.jpg" alt=""></figure></a><span class="description">Sed ut perspicia</span>
                    </div>
                    <div class="element transition macro" data-category="transition">
                    	<a href="img/page3_bigimg3.jpg" class="thumb"><figure class="img-polaroid"><img src="img/page3_img3.jpg" alt=""></figure></a><span class="description">natus error sit</span>
                    </div>
                    <div class="element transition nature" data-category="transition">
                    	<a href="img/page3_bigimg4.jpg" class="thumb"><figure class="img-polaroid"><img src="img/page3_img4.jpg" alt=""></figure></a><span class="description">voluptatem accusantium</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                    	<a href="img/page3_bigimg5.jpg" class="thumb"><figure class="img-polaroid"><img src="img/page3_img5.jpg" alt=""></figure></a><span class="description">non numquam eius mo</span>
                    </div>
                    <div class="element transition night" data-category="transition">
                    	<a href="img/page3_bigimg6.jpg" class="thumb"><figure class="img-polaroid"><img src="img/page3_img6.jpg" alt=""></figure></a><span class="description">rcitationem ullam cor</span>
                    </div>
                    <div class="element transition panoramic" data-category="transition">
                    	<a href="img/page3_bigimg7.jpg" class="thumb"><figure class="img-polaroid"><img src="img/page3_img7.jpg" alt=""></figure></a><span class="description">poris suscipit labori</span>
                    </div>
                    <div class="element transition panoramic" data-category="transition">
                    	<a href="img/page3_bigimg8.jpg" class="thumb"><figure class="img-polaroid"><img src="img/page3_img8.jpg" alt=""></figure></a><span class="description">Quis autem vel eum iu</span>
                    </div>
                    <div class="element transition panoramic" data-category="transition">
                    	<a href="img/page3_bigimg9.jpg" class="thumb"><figure class="img-polaroid"><img src="img/page3_img9.jpg" alt=""></figure></a><span class="description">eprehenderit qui in</span>
                    </div>
                    <div class="element transition sports" data-category="transition">
                    	<a href="img/page3_bigimg10.jpg" class="thumb"><figure class="img-polaroid"><img src="img/page3_img10.jpg" alt=""></figure></a><span class="description">dolorem eum fugiat</span>
                    </div>
                    <div class="element transition macro" data-category="transition">
                    	<a href="img/page3_bigimg11.jpg" class="thumb"><figure class="img-polaroid"><img src="img/page3_img11.jpg" alt=""></figure></a><span class="description">pariat esent ju</span>
                    </div>
		       </div>
               </div>
	        </div>
            </div>
        </div>
    </div>
</div>


<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
@stop