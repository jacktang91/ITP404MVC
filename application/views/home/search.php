<html>
<head>
	<title>Twitter Search App</title>
	<link rel="stylesheet" href="<?php echo URL::to_asset('css/main.css') ?>">
</head>
<body>
	<div id="container">
		<h1>Twitter Search Page</h1>
		<a href="<?php echo URL::to('twitter/index')?>" class="button">Search </a>
		<a href="<?php echo URL::to('twitter/add')?>" class="button">Add </a> </br> </br>
		<form action="<?php echo URL::to('twitter/results')?>" method ="get">
				<label> Username </label> <input type="text" name="search-term"></br><br/>
				<input type="submit" value="Search">
		</form>
	</div></br>
	<div id="users">
	<center><strong>List of Users Within Database</strong></center>
		<?php
			foreach ($username as $id){
				echo "<a href='results?search-term=$id->username'>";
				echo $id->realname;
				echo "</a><br/>";
			}
		?>
	</div>
</body>
</html>