<html>
	<head>
	<title>Retrieve data from database</title>
	</head>
	<body>

	<dl>

	<?php

	// Connect to database server
	 include "opendbo.php";	
	// Select database
	mysql_select_db("mydatabase") or die(mysql_error());

	// Get data from the database depending on the value of the id in the URL
	$strSQL = "SELECT * FROM  WHERE id=" . $_GET["id"];
	$rs = mysql_query($strSQL);
	
	// Loop the recordset $rs
	while($row = mysql_fetch_array($rs)) {

		// Write the data of the person
		echo "<dt>ServiceId:</dt><dd>" . $row["ServiceId"] . "</dd>";
		echo "<dt>Name:</dt><dd>" . $row["FirstName"] . " " . $row["LastName"] . "</dd>";
		echo "<dt>Items:</dt><dd>" . $row["Items"] . "</dd>";
		echo "<dt>Agreedamount:</dt><dd>" . $row["Agreedamount"] . "</dd>";
		echo "<dt>Phone:</dt><dd>" . $row["Phone"] . "</dd>";

	}

	// Close the database connection
	mysql_close();
	?>

	</dl>
	<p><a href="list.php">Return to the list</a></p>

	</body>

	</html>
	