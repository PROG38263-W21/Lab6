<?php
session_start();
if(isset($_COOKIE['chocolate_chip'] )
	&& ($_COOKIE['chocolate_chip']=='valid')) {
	if (isset($_SESSION['motd'])) {
		echo $_SESSION['motd'];
		$_SESSION['motd'] = $_GET['motd'];
	} 
	else if (isset($_GET['submit'])) {
		$_SESSION['motd'] = $_GET['motd'];
		echo $_GET['motd'];
	} else {
?>
<form action="motd.php" method="get">
<input type="text" name="motd">
<input type="submit" name="submit">
</form>
<?php		
	}
}
?>
