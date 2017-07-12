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
	<form action="finance.php" method="get">
		<table>
			<tr>
				<td>Customer's Names
				<td><input type="text" name="id" placeholder="please enter customers names" 	required></td>
				<td><input type="submit" value="search"></td>
				<?php
					include "opendbo.php";
					$query = "SELECT * FROM user WHERE id=" . $_GET["id"];
					$comments = mysqli_query($conn, $query);
					echo "<table>";
					while($row = mysqli_fetch_array($comments, MYSQLI_ASSOC)){
						echo"<tr><td>";
						echo $row['ServiceId'];
						echo "</td><td>";
						echo $row['FirstName'] . " " . $row['LastName'];
						echo "</td><td>";
						echo $row['Items'];
						echo "</td><td>";
						echo $row['Agreedamount'];
						echo "</td><td>";
						echo $row['Phone'];
						echo "</td></tr>";
						echo "</table>";
					}
				
				?>
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