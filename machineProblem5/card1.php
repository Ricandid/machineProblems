<!DOCTYPE html>
<html>
<head>
	<title>Card 1</title>
</head>
<body>
<script type="text/javascript">
	var tries = 0;
	function getAnswer(){
		var guess = prompt("Enter your answer here: ", "NUMBERS AREN'T ALLOWED");
		guess = guess.toLowerCase();
		if (isNaN(guess)) {
			switch (guess){
				case ('bat'):
					alert("You're normal!");
					window.location="card2.php?card1=correct";
					break;
				default:
					alert("You're an addict!");
					window.location="card2.php?card1=wrong";
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
	<img src="https://upload.wikimedia.org/wikipedia/commons/7/70/Rorschach_blot_01.jpg">
</div>
<input type="button" value="What do you think about this picture?" onclick="getAnswer()">
</body>
</html>