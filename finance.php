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
#footer{
	margin: 30px 0;
	background: grey;
	padding: 20px;
	clear: both;
}
#footer1 p{
		text-align: center;
		text-transform: uppercase;
		font-size: 100%;
		color: green;
	}
	</style>
	<body>
	<div id="header">
	<center><h1>
	<?php
		echo "WELCOME TO THE FINANCE MANAGER'S OFFICE";
	?><h1></center><br>
	</div>
	<form action="retrieve.php" method="get">
		<table>
			<tr>
				<td>Customer's Names
				<td><input type="text" name="name" placeholder="please enter customers names" 	required></td>
				<td><input type="submit" value="search"></td>
			</tr>
		</table>
		
	</form>
	<div id="footer">
		<h2>Pages</h2>
		<li><a href="receipt.php"> Receipt</a><br>
		<li><a href="logout.php">Logout</a>
		</div>
	<div id="footer1">
	<p>
			 by mkinnocent
			</p>
		
	</div>
	</body>
</html>