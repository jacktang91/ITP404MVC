<html>
<head>
	<title>Twitter Search Results</title>
	<link rel="stylesheet" href="<?php echo URL::to_asset('css/main.css') ?>">
</head>
	<center><p> You searched for: <strong><?php echo $search_term?></strong></p></center>
	<div id="results">
		<?php
			echo '<ul>';;
			foreach($results as $tweet) {
				echo '<li>';
				echo '<div class="tweet">';
				echo '<img src="'.$tweet->user->profile_image_url.'" />';
				echo $tweet->text;
				echo '<div class="date"><strong>'.$tweet->created_at.'</strong></div>';
				echo '<div style="clear:both;"></div>';
				echo '</div>';
				echo '</li>';
			}
			echo '</ul>';
		?>
	</div>
</body>
</html>