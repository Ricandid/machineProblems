<!DOCTYPE html>
<html>
<head>
	<title>Card 4</title>
</head>
<body>
<script type="text/javascript">
	var tries = 0;
	function getAnswer(){
		var guess = prompt("Enter your answer here: ", "NUMBERS AREN'T ALLOWED");
		guess = guess.toLowerCase();
		if (isNaN(guess)) {
			switch (guess){
				case ('animal'):
				case ('animals'):
				case ('tiger'):
				case ('tigers'):
				case ('cat'):
				case ('dog'):
				case ('four-legged animal'):
					alert("You're normal!");
					window.location="result.php?card1=<?php echo $_GET['card1']?>&card2=<?php echo $_GET['card2']?>&card3=<?php echo $_GET['card3']?>&card4=correct";
					break;
				default:
					alert("You're an addict!");
					window.location="result.php?card1=<?php echo $_GET['card1']?>&card2=<?php echo $_GET['card2']?>&card3=<?php echo $_GET['card3']?>&card4=wrong";
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
	<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/Rorschach_blot_08.jpg/689px-Rorschach_blot_08.jpg">
</div>
<input type="button" value="What do you think about this picture?" onclick="getAnswer()">
</body>
</html>