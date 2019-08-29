<html>

	<head>

		<title>Swap Numbers</title>

	</head>

	<body>



		<h1>SWAPPING</h1>



		<!-- Takes number from user -->

		<form method="post">



			Enter  Number1:

			<input type="number" name="number1">

			<br><br>

			Enter N2umber:

			<input type="number" name="number2">

			<br><br>

			<input type="submit" value="Swap ">



		</form>

		<?php

			if($_POST){



				/*Fetches the value from form*/

				$num1 = $_POST['number1'];

				$num2 = $_POST['number2'];



				echo "Before Swap"."<br>";

				echo "First Number is".$num1."<br>";

				echo "Second Number is".$num2."<br>";



				echo "<br>";

				echo "<br>";



				/*Swapping of the two numbers without using any third variable*/

				$num1 = $num1 + $num2;

				$num2 = $num1 - $num2;

				$num1 = $num1 - $num2;



				echo "<br>";

				echo "<br>";



				echo "After Swap"."<br>";

				echo "First Number is ".$num1."<br>";

				echo "Second Number is ".$num2."<br>";

			}

		?>

	</body>

</html>