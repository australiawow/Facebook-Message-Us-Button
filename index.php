<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- TITLE OF SITE -->
    <title>Sample Facebook Message Us Button</title>
    
    <link rel="stylesheet" href="assets/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!--[if lt IE 9]>
            <script src="<?php echo $baseurl; ?>assets/js/plugins/html5shiv.min.js"></script>
            <script src="<?php echo $baseurl; ?>assets/js/plugins/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>

	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '[YOUR_APP_ID_HERE]',
	      xfbml      : true,
	      version    : 'v2.9'
	    });
	    FB.AppEvents.logPageView();
	  };
	
	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
	
	<a id="fb-btn" class="btn" href="#fb-message-us"><img class="svg" width="40px" src="assets/images/facebook-messenger-white.svg" /> <span>Message Us</span></a>
	
	<div id="fb-message-us" style="display:none;"></div>
	
	
    <script src="assets/js/jquery1.11.0.min.js"></script>
    <script src="assets/fancybox/jquery.fancybox.js"></script>
    <script src="assets/fancybox/jquery.fancybox.pack.js"></script>
    <script src="assets/js/script.js"></script>
    
</body>
</html>