<html>
<head>
	<title> PHP Play </title>
</head>
<body>

<h3> Math Quiz !!! </h3>

<?php
	$x = rand(0, 10);
	$b = rand(0, 10);
	$ans = $x + $b;
	echo "<p>$x + $b = </p>";
	if (isset($_POST['guess'])){	
		if ($_GET['guess']==ans){
			echo "correct";
		}else echo "<br> Incorrect. The answer is $ans";
	}
?>

<form action="" method="post">
	
	<input type="text" name="guess">
	

</body>
</html>