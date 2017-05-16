## Facebook-Message-Us-Button

### Documentation Guidelines

1. Create a Facebook Developer Account. If you already have one, then proceed to step 2. If not, create one <a href="https://developers.facebook.com/" target="_blank">here</a>

2. Create a Facebook Website App (this is required for the <a href="https://developers.facebook.com/tools/debug/sharing/" target="_blank">Sharing Debugger</a> to check if the current meta tags are working. also needed in the facebook og:appID and to access the javascript FACEBOOK API for the Message Us PopUp)
   
   - Go to https://developers.facebook.com/apps/ then click '+ Add a New App' green button on the right hand side of the page.
   - Create a New App ID by entering a Name and Contact Email then click the 'Create App ID' button to proceed. It will then take you to the App Dashboard.
   
   - Go to 'Settings' then Enter your App Domains where the App will be called. eg. nathanhague.com
   - Choose a Category in the dropdown for the App.
   - Add Platform by clicking the '+ Add Platform' button then choose 'Website' and enter the Site URL. eg. https://nathanhague.com
   - Click on the 'Quick Start' button on the Website Platform created. It will take you then to the 'Setup the Facebook SDK for JavaScript' page. Just Copy the given snippet and paste it after the opening <body> tag on each page you want to load it.
     #### Sample Snippet
     <script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '[APP_ID]',
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
   - Go to 'App Review' and make your app 'Public' by clicking the button under the 'Make [APPNAME] public?'.

3. Include fancybox 2 (not 3, but needs update as the developers of fancybox may deprecate v2.). But for this v2 will be fine. if you're going to use 3, then the rest of the code in the following steps may not work.
   
   #### Include fancybox css & js:
   - 'assets/fancybox/jquery.fancybox.css'
   - 'assets/fancybox/jquery.fancybox.js'
   - 'assets/fancybox/jquery.fancybox.pack.js'
   
4. Create container for the popup. Either after the opening <body> tag or before ending </body> tag and set the style to 'display:none;'
   #### Sample container
   <div id="fb-message-us" style="display:none;"></div>
   
5. Create button for the popup and enter the container popup id in the href. (style the button the way you want it or based on the design layout of the page or how the Nate wants it even! )
   #### Sample button
   <a id="fb-btn" href="#fb-message-us"><img width="40px" src="assets/images/facebook-messenger-white.svg" /> <span>Message Us</span></a></li>
   
6. Add the responsive styles for the container popup.
   - 'assets/css/style.css'
   
7. And lastly, add the custom script. (remember to change the facebook page name based on the facebook page of the client and it must be set to public.)
   - 'assets/js/script.js'
   #### Sample Facebook Page Name
   ##### https://www.facebook.com/australiawow1/ - The 'australiawow1' is the facebook page name.
   
   #### Variables to change
   var fb_title     = 'AustraliaWOW!'; // - Facebook Page Name Title for the popup
   var fb_page      = 'australiawow1'; // - Facebook Page Name from the page URL above
   var fb_button    = 'fb-btn';
   var fb_container = 'fb-message-us';
   
   
   
   
   
   