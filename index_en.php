<!DOCTYPE html>
<html>
<head>
	<title>QR Lock Screen generator</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css?v=2">
</head>
<body>
<img src="img/bg.png" class="bg"/>
<div class="content">
	<div id="info">
	<h1>Do you like networking?</h1>
	<h2>Use your mobile lockscreen<br/>as your business card</h2>
	
	<ul>
		<li>You help the environment, you don´t waste paper</li>
		<li>Quick access, you only have to turn your phone on</li>
		<li>Compatible with all platforms (android, ios)</li>
		<li>You don´t have to install any application</li>
	</ul>
	<a href="#" class="button" onclick="start()">Get your card now</a><br/><br/><br/>
	<div class="more">
		or access <a href="http://betabeers.com/bg/m" target="_blank">betabeers.com/bg/m</a> on your mobile<br/><br/>
		<img src="http://chart.apis.google.com/chart?cht=qr&chs=100x100&chl=http://betabeers.com/bg/m" width="100" height="100" style="margin-left:80px"/>
		
		<br/><br/><br/>
		
		<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Twittear</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
		<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
		<script type="IN/Share" data-counter="right"></script>
	
		<iframe src="http://www.facebook.com/plugins/like.php?href=http://betabeers.com/bg/&amp;send=false&amp;layout=button_count&amp;width=200&locale=en_US&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="margin-left:15px;border:none; overflow:hidden; width:125px; height:21px;" allowTransparency="true"></iframe>
		
		<br/><br/>
		
		<div class="copy">weekend project by <a href="http://twitter.com/miquelcamps" target="_blank">@miquelcamps</a>, translation by <a href="http://twitter.com/SamSmitten" target="_blank">@SamSmitten</a></div>
	</div>
</div>
<script>
function start(){
	document.getElementById('info').innerHTML = '<iframe src="m?download" width="300" height="500" style="border:1px black solid"></iframe>';
}
</script>
</body>
</html>