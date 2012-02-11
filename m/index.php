<!DOCTYPE html>
<html>
<head>
	<title>QR Screen generator</title>
    <meta charset="utf-8">
    <!-- Mobile viewport optimization http://goo.gl/b9SaQ -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta http-equiv="cleartype" content="on">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<header id="title">QR Screen generator</header>
<article>
<form action="result.php" method="post">
<ul>
	<li class="text">
		Name 
		<input name="name"/>
	</li>
	<li class="text">
		Twitter 
		<input name="twitter"/>
	</li>
	<li class="text">
		Email 
		<input name="email"/>
	</li>
	<li class="text">
		Phone 
		<input name="phone"/>
	</li>
	<li class="last">
		<input type="radio" name="color" value="purple" checked="checked"/> <span class="color purple">&nbsp;</span> 
		<input type="radio" name="color" value="red"/> <span class="color red">&nbsp;</span> 
		<input type="radio" name="color" value="blue"/> <span class="color blue">&nbsp;</span> 
		<input type="radio" name="color" value="green"/> <span class="color green">&nbsp;</span> 
		<input type="radio" name="color" value="gray"/> <span class="color gray">&nbsp;</span> 
		<br class="clear"/>
	</li>
</ul>
<input class="button" type="submit" value="Generate"/>
<?php if( isset( $_GET['download'] ) ): ?><input type="hidden" name="download" value="1"/><?php endif ?>
</form>
</article>
</body>
</html>