<!DOCTYPE html>
<html>
<head>
<title>E-SHOP CAMISAS</title>
 
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>

<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
		 <script src="js/scripts.js" type="text/javascript"></script>

		 <script type="text/javascript" src="js/hover_pack.js"></script>
		  <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>

<!-- header-section-starts -->
<div class="header" id="home">
		<div class="top-header">
			<div class="container">
			<div class="logo">
				<a href="/"><img src="images/logo.png" alt="" /></a>
			</div>
				<div class="header-top-right">
				<!-- start search-->
				    <div class="search-box">
					    <div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
				    </div>
					<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->

					<a href="cart.html"><i class="cart"></i></a>
				</div>
			<div class="navigation">	
			<div>
              <label class="mobile_menu" for="mobile_menu">
              <span>Menu</span>
              </label>
              <input id="mobile_menu" type="checkbox">
				<ul class="nav">
              <li class="active"><a href="/">Home</a></li>                       
              <li class="dropdown1"><a href="#">Dresses</a>
                <ul class="dropdown2">
                  <li><a href="products.html">Dress Materials</a></li>
                  <li><a href="products.html">Kurta & Kurti</a></li>
				  <li><a href="products.html">Sarees</a></li>
				  <li><a href="products.html">Chudidars</a></li>
                </ul>
              </li>             
              <li class="dropdown1"><a href="#">Bags</a>
              	<ul class="dropdown2">
                  <li><a href="products.html">Latest</a></li>
                  <li><a href="products.html">Leather Bags</a></li>
				  <li><a href="products.html">Hand Bags</a></li>
                </ul>
              </li>
           </li>           
           <li class="dropdown1"><a href="#">Shoes</a>
           	<ul class="dropdown2">
                  <li><a href="products.html">Sports Shoes</a></li>
                  <li><a href="products.html">Casual Shoes</a></li>
				  <li><a href="products.html">Formal Shoes</a></li>
                </ul>
           </li>        
            <li><a href="contact.html">Contact US</a></li>
            <div class="clearfix"></div>
          </ul>
		</div>			
	 </div>
			</div>
		</div>


@yield('content')

@include('layouts.footer')

</body>
</html>