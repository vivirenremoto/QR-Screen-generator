<!DOCTYPE html>
<html>
<head>
	<title>QR Screen generator</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<img src="img/bg.png" class="bg"/>
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
		<br/><br/>
		<div class="copy">weekend project by <a href="http://twitter.com/miquelcamps" target="_blank">@miquelcamps</a></div>
	</div>
</div>
<script>
function start(){
	document.getElementById('info').innerHTML = '<iframe src="m?download" width="300" height="500" style="border:1px black solid"></iframe>';
}
</script>
</body>
</html>