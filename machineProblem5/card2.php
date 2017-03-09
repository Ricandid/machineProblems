<!DOCTYPE html>
<html>
<head>
	<title>Card 2</title>
</head>
<body>

<script type="text/javascript">

	var tries = 0;
	function getAnswer(){
		var guess = prompt("Enter your answer here: ", "NUMBERS AREN'T ALLOWED");
		guess = guess.toLowerCase();
		if (isNaN(guess)) {
			switch (guess){
				case ('butterfly'):
				case ('moth'):
					alert("You're normal!");
					window.location="card3.php?card1=<?php echo $_GET['card1']?>&card2=correct";
					break;
				default:
					alert("You're an addict!");
					window.location="card3.php?card1=<?php echo $_GET['card1']?>&card2=wrong";
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
	<img src="https://upload.wikimedia.org/wikipedia/commons/5/54/Rorschach_blot_05.jpg">
</div>
<input type="button" value="What do you think about this picture?" onclick="getAnswer()">
</body>
</html>