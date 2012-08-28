<html>
<head>
	<script src="<?php echo base_url('public/js/jquery-1.8.0.min.js'); ?>" type="text/javascript" charset="utf-8"></script>
	
</head>
<body>
	<div id="fb-root"></div>
	<?php echo $user['name']; ?>
	<?php echo print_r($user); ?>
	<script>
	window.fbAsyncInit = function() {
		FB.init({
      appId: '<?php echo $facebook->getAppID() ?>',
      cookie: true,
      xfbml: true,
      oauth: true
    });
		FB.api('/me/movies', function(response) {
		  alert(JSON.stringify(response);
		});
	 
	};
	(function() {
      var e = document.createElement('script'); e.async = true;
      e.src = document.location.protocol +
        '//connect.facebook.net/en_US/all.js';
      document.getElementById('fb-root').appendChild(e);
    }());
	
  </script>
</body>
</html>