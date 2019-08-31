<!DOCTYPE hmtl>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Crawler de e-mails</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="<?php echo asset('js/ajax.js') ?>"></script>
</head>
<body>
	<div class='container'>
		<div class='jumbotron'>
			<h1>@yield('cabecalho')</h1>
		</div>
		@yield('conteudo')
	</div>
</body>
</html>