<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<?php include_once("verificaSessao.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Cantinho do Sorvete | </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
<!--pop up strat here-->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
<!--pop up end here-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
                         	 
		 <!-------- O CÓDIGO ABAIXO INSERE O TOPO DA PÁGINA ------->		 
		 		<?php include_once("topo.php"); ?>
		 <!-------------------------------------------------------->
		 
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="price-block-main">
    	<div class="prices-head">
    		<h2>Prices</h2>
    	</div>
    	<div class="price-tables">
	    		<div class="col-md-4 price-grid">
	    		   <div class="price-block">
		    			<div class="price-gd-top pric-clr1">
		    				<h4>Basic</h4>
		    				<h3><span class="usa-dollar">$</span> 5<span class="per-month">/mon</span></h3>
		    				<h5>Free for 15days</h5>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
			    					<li>1Gb Disk</li>
			    					<li>10Gb Bandwidth Monthly</li>
			    					<li>2 Email Account</li>
			    					<li>Unlimited Sub Domains</li>
			    				</ul>
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr1">		    			   
		    			   	  <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
		    			</div>
		    		</div>
	    		</div>
	    		<div class="col-md-4 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr2">
		    				<h4>Professional</h4>
		    				<h3><span class="usa-dollar">$</span> 10<span class="per-month">/mon</span></h3>
		    				<h5>Free for 2 months</h5>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
			    					<li>3Gb Disk</li>
			    					<li>25Gb Bandwidth Monthly</li>
			    					<li>5 Email Account</li>
			    					<li>Unlimited Sub Domains</li>
			    				</ul>
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr2">
		    			   	 <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
		    			</div>
		    		</div>
	    		</div>
	    		<div class="col-md-4 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr3">
		    				<h4>Premium</h4>
		    				<h3><span class="usa-dollar">$</span> 12<span class="per-month">/mon</span></h3>
		    				<h5>Free for 9 months</h5>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
			    					<li>5Gb Disk</li>
			    					<li>50Gb Bandwidth Monthly</li>
			    					<li>10 Email Account</li>
			    					<li>Unlimited Sub Domains</li>
			    				</ul>
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr3">
		    			   	<a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
		    			</div>
		    		</div>
    	       </div>
    	       
	    		<div class="col-md-4 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr1">
		    				<h4>Basic</h4>
		    				<h3><span class="usa-dollar">$</span> 5<span class="per-month">/mon</span></h3>
		    				<h5>Free for 15days</h5>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
			    					<li>1Gb Disk</li>
			    					<li>10Gb Bandwidth Monthly</li>
			    					<li>2 Email Account</li>
			    					<li>Unlimited Sub Domains</li>
			    				</ul>
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr1">
		    			   	 <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
		    			</div>
		    		</div>
	    		</div>
	    		<div class="col-md-4 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr2">
		    				<h4>Professional</h4>
		    				<h3><span class="usa-dollar">$</span> 10<span class="per-month">/mon</span></h3>
		    				<h5>Free for 2 months</h5>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
			    					<li>5Gb Disk</li>
			    					<li>50Gb Bandwidth Monthly</li>
			    					<li>5 Email Account</li>
			    					<li>Unlimited Sub Domains</li>
			    				</ul>
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr2">
		    			   	 <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
		    			</div>
		    		</div>
	    		</div>
	    		<div class="col-md-4 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr3">
		    				<h4>Premium</h4>
		    				<h3><span class="usa-dollar">$</span> 12<span class="per-month">/mon</span></h3>
		    				<h5>Free for 9 months</h5>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
			    					<li>5Gb Disk</li>
			    					<li>50Gb Bandwidth Monthly</li>
			    					<li>10 Email Account</li>
			    					<li>Unlimited Sub Domains</li>
			    				</ul>
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr3">
		    			   	 <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
		    			</div>
		    		</div>
	    		</div>
    	  <div class="clearfix"> </div>
    	  </div>
   </div>
</div>
<!--inner block end here-->
<!--pop-up-grid-->
				                 <div id="popup">
								 <div id="small-dialog" class="mfp-hide">
									<div class="pop_up">
									 	<div class="payment-online-form-left">
											<form>
												<h4><span class="shoppong-pay-1"> </span>Shipping Details</h4>
												<ul>
													<li><input class="text-box-dark" type="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"></li>
													<li><input class="text-box-dark" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
													<li><input class="text-box-dark" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></li>
													<li><input class="text-box-dark" type="text" value="Pin Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pin Code';}"></li>
													
												</ul>
												<div class="clear"></div>
												<h4 class="paymenthead"><span class="payment"></span>Payment Details</h4>
												<div class="clear"></div>										
												<ul>
													<li><input class="text-box-dark" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
													<li><input class="text-box-dark" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
												
												</ul>
												<ul>
													<li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
													<li><input class="text-box-dark" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
												
												</ul>
												<ul class="payment-sendbtns">
													<li><input type="reset" value="Reset"></li>
													<li><a href="#" class="order">Process order</a></li>
												</ul>
												<div class="clear"></div>
											</form>
										</div>
						  			</div>
								</div>
								</div>
								
<!--pop-up-grid-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>

	<!-------- O CÓDIGO ABAIXO INSERE O MENU LATERAL ------->		 
	<?php include_once("menuLateral.php"); ?>
	<!-------------------------------------------------------->
		

	<!-------- O CÓDIGO ABAIXO ESCONDE O MENU LATERAL ------->		 
	<script src="js/minimizarMenuLateral.js"></script>
	<!-------------------------------------------------------->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
