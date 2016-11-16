<?php
		require_once ("kakao.config.php");
?>
<html>
	<head>
		<title>kakao Story AI Service Login Page</title>
		
		<load target="service/style.css" />
		<load target="app/app.css" />
		
	</head>
	<body>
	<div class="header">
		<div class="header_content">
		</div>
	</div>
<a href="https://kauth.kakao.com/oauth/authorize?client_id=<?=$kakao_app_id?>&redirect_uri=<?=$kakao_redirect?>&response_type=code">
		로그
		</a>
		</html>
	
	
