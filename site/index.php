<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="author" content="Jason Hemmy">
<meta name="description" content="My name is Jason Hemmy. I'm a web developer.">
<meta name="keywords" content="Jason, Hemmy, JasonHemmy, jasonhemmy, developer, website, html, html5, javascript, php">

<meta property="og:site_name" content="jasonhemmy.com" />
<meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>" />
<meta property="og:title" content="This is an emu. His name is Frank." />
<meta property="og:description" content="My name is Jason Hemmy. I'm a web developer." />
<meta property="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/img/share.jpg" />
<meta property="og:type" content="website" />

<title>jasonhemmy</title>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link rel="stylesheet" href="fonts.css">
<link rel="stylesheet" href="main.css">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-17025298-1', 'auto');
  ga('send', 'pageview');
</script>

</head>
<body>
<div>
<!--///////////////////////////////////////-->

<video autoplay loop poster="/img/frame.jpg" class="bgvid">
	<source src="/video/waves.webm" type="video/webm">
	<source src="/video/waves.mp4" type="video/mp4">
	<source src="/video/waves.ogg" type="video/ogg">
</video>
<div class="overlay"></div>
<div class="you-win">
	<span class="icon-cross close"></span>
	<div class="video-wrapper">
		<div id="player"></div>
	</div>
</div>

<div class="band">
	<a href="https://github.com/hembone" target="_blank" onclick="ga('send', 'event', 'link', 'click', 'github');"><span class="icon-github"></span></a>
	<a href="https://www.linkedin.com/in/jasonhemmy" target="_blank" onclick="ga('send', 'event', 'link', 'click', 'linkedin');"><span class="icon-linkedin"></span></a>
	<a href="mailto:jasonhemmy@gmail.com" target="_top" onclick="ga('send', 'event', 'link', 'click', 'email');"><span class="icon-mail"></span></a>
</div>

<!--///////////////////////////////////////-->
</div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="main.js"></script>

</body>
</html>