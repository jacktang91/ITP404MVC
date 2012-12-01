<html>
<head>
	<title>User Add App</title>
	<link rel="stylesheet" href="<?php echo URL::to_asset('css/main.css') ?>">
</head>
<body>
	<div id="container">
		<h1>User Add Page</h1>
		<a href="<?php echo URL::to('twitter/index')?>" class="button">Search </a>
		<a href="<?php echo URL::to('twitter/add')?>" class="button">Add </a> </br> </br>
		<form action="<?php echo URL::to('twitter/added')?>" method ="get">
				<label> Twitter Username </label> <input type="text" name="username"></br><br/>
				<label> Twitter User's Real Name </label> <input type="text" name="real-name"></br><br/>
				<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>