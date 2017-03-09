<!DOCTYPE html>
<html>
<head>
	<title>Card 3</title>
</head>
<body>
<script type="text/javascript">
	var tries = 0;
	function getAnswer(){
		var guess = prompt("Enter your answer here: ", "NUMBERS AREN'T ALLOWED");
		guess = guess.toLowerCase();
		if (isNaN(guess)) {
			switch (guess){
				case ('two humans'):
				case ('humans'):
				case ('human'):
					alert("You're normal!");
					window.location="card4.php?card1=<?php echo $_GET['card1']?>&card2=<?php echo $_GET['card2']?>&card3=correct";
					break;
				default:
					alert("You're an addict!");
					window.location="card4.php?card1=<?php echo $_GET['card1']?>&card2=<?php echo $_GET['card2']?>&card3=wrong";
					break;
			}
		} else if (tries>=2){
			window.location="911.php";
		}
		else {
			tries++;
			getAnswer();
		}
		
	}

</script>
<div>
	<img src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Rorschach_blot_02.jpg">
</div>
<input type="button" value="What do you think about this picture?" onclick="getAnswer()">
</body>
</html>