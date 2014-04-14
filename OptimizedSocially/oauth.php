<html>
<head><title>Test OAuth</title></head>
<script src='./hello.min.js'></script>
<script>
	hello.on('auth.login', function(auth){
		
		// call user information, for the given network
		hello( auth.network ).api( '/me' ).success(function(r){
			var $target = $("#profile_"+ auth.network );
			if($target.length==0){
				$target = $("<div id='profile_"+auth.network+"'></div>").appendTo("#profile");
			}
			$target.html('<img src="'+ r.thumbnail +'" /> Hey '+r.name).attr('title', r.name + " on "+ auth.network);
		});
	});
</script>
<script>
	hello.init({ 
		facebook : 231897623667423,
		google : 592128110197
	},{redirect_uri:'http://127.0.0.1/projects/OptimizedSocially/index.php'});
</script>
<body>
	<button onclick="hello( 'google' ).login()">windows</button>
</body>
</html>