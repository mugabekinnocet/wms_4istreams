<doctype html>
<html>
	<head>
		<title>
		</title>
	</head>
	<style>
#header {
    background-color:black;
    color:green;
    text-align:center;
    padding:5px;
}
	</style>
	<body>
	<center><h1>
	<?php
		echo "WELCOME TO THE FINANCE MANAGER'S OFFICE";
	?><h1></center><br>
	<form action="retrieve.php" method="POST">
		<table>
			<tr>
				<td>Customer's Names
				<td><input type="text" name="name" placeholder="please enter customers names" 	required></td>
				<td><input type="button" value="search"></td>
			</tr>
		</table>
	</form>
		<a href="receipt.php"> receipt</a><br>
		<a href="logout.php">Logout</a>
	</body>
</html>