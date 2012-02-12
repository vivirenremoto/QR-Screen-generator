<?
if( substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2) != "es" || $_GET['lang'] == 'en' ){
	require "index_en.php";
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>QR Lock Screen generator</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css?v=3">
</head>
<body>
<div class="content">
	<div id="info">
	<h1>¿Te gusta el networking?</h1>
	<h2>Utiliza la pantalla de bloqueo de tu<br/>móvil como tarjeta de contacto</h2>
	
	<ul>
		<li>Ayudas al medio ambiente, no gastas papel</li>
		<li>Acceso rápido, solo tienes que encender el móvil</li>
		<li>Compatible con cualquier plataforma (android, ios)</li>
		<li>No tienes que instalar ninguna app</li>
	</ul>
	<a href="#" class="button" onclick="start()">Consigue tu tarjeta ahora</a><br/><br/><br/>
	<div class="more">
		o accede desde tu móvil a <a href="http://betabeers.com/bg/m" target="_blank">betabeers.com/bg/m</a><br/><br/>
		<img src="http://chart.apis.google.com/chart?cht=qr&chs=100x100&chl=http://betabeers.com/bg/m" width="100" height="100" style="margin-left:80px"/>
		
		<br/><br/><br/>
		
		<a href="https://twitter.com/share" class="twitter-share-button" data-lang="es">Twittear</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
		<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
		<script type="IN/Share" data-counter="right"></script>
	
		<iframe src="http://www.facebook.com/plugins/like.php?href=http://betabeers.com/bg/&amp;send=false&amp;layout=button_count&amp;width=200&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="margin-left:15px;border:none; overflow:hidden; width:125px; height:21px;" allowTransparency="true"></iframe>
		
		<br/><br/>
		
		<div class="copy">diseño basado en el trabajo de <a href="https://twitter.com/dtrinh" target="_blank">Danny Trinh</a> de <a href="http://path.com" target="_blank">path</a><br/>
		imagen de iphone4s por <a href="http://openclipart.org/detail/165019/iphone-44s-white--by-jhnri4" target="_blank">jhnri4</a>, código en <a href="https://github.com/miquelcamps/QR-Screen-generator" target="_blank">github</a>, translation by <a href="http://twitter.com/SamSmitten" target="_blank">@SamSmitten</a></div>
	</div>
</div>
<script>
function start(){
	document.getElementById('info').innerHTML = '<iframe src="m?download" width="300" height="500" style="border:1px black solid"></iframe>';
}
</script>
</body>
</html>