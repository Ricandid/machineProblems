<!DOCTYPE html>
<html>
<head>
	<title>Card Results</title>
</head>
<body>

	<?php
		$percentage=0;

		if($_GET['card1'] == 'correct')
			$percentage +=25;
		else if($_GET['card2'] == 'correct')
			$percentage +=25;
		else if($_GET['card3'] == 'correct')
			$percentage +=25;
		else if($_GET['card4'] == 'correct')
			$percentage +=25;
	?>
	<?php
		if($percentage==25){
	?>
		<h3>You're 25% normal  and 75% addict</h3>
	<?php		
		} else if($percentage==50){
	?>
		<h3>You're 50% normal and 50% addict</h3>
	<?php		
		} else if($percentage==75){
	?>
		<h3>You're 75% normal and 25% addict</h3>
	<?php		
		} else if($percentage==100){
	?>	
		<h3>You're 100% normal</h3>
	<?php
		} else {
	?>
		<h3>You're 100% addict</h3>
	<?php }
	?>
	<a href="card1.php">Play Again?</a>
</body>
</html>