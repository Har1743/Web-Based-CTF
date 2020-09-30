<html>
<body>

<?php

session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"] == "persia")
{
	$user = $_SESSION["user"];
	echo "<html>";
	echo "<body style='background-color:lightblue'>";
	echo "<br>";
	echo "<h1 style='text-align:center;color:red'>Hi " . $user . "</h1>";
	echo "<center>" . "<img src='mona.jpeg' alt='Trulli' width='900' height='400'>" . "</center>";
	echo "<p style='text-align:center'><b>you might wonder about the presence of this ->mona_lisa<- image</b></p>";
	echo "<p style='text-align:center'>maybe this image helps you in towards to your next step</p>";
	echo "</body>";
	echo "</html>";
}
else
{
	echo "<p>You are not authorised to view this page</p>";
}
?>
</body>
</html>
