<html>
	<head>
	<title>Retrieve data from database</title>
	</head>
	<body>


		<?php

			// Connect to database server
			 include "opendbo.php";	
			// Select database
			//mysql_select_db("wms") or die(mysql_error());
			//mysql_select_db("wms", $conn);

			//$id = $_GET['id'];

			/*if( ! is_numeric($id) )
			  die('invalid id');
			else*/
			//$query = "SELECT * FROM `user` WHERE `id` =$id LIMIT 0 , 30";
			$query = "SELECT * FROM user";
			//$query = "SELECT * FROM user WHERE id=" . $_GET["id"];
			$comments = mysqli_query($conn, $query);
            echo "<table border = '1'>";
			echo "<th><td>Service Id</td><td>Name</td><td>Items</td><td>Agreed Ammount</td><td>Telephone Number</td></th>";
				// Get data from the database depending on the value of the id in the URL
				//$strSQL = "SELECT * FROM user WHERE id=" . $_GET["id"];
				//$rs = mysql_query($strSQL);
				
				// Loop the recordset $rs
				//while($row = mysql_fetch_array($rs)) 
				
				//if(mysqli_num_rows($comments)){
					//while( $row = mysqli_fetch_array( $comments ) ){
					//	echo "<tr><td>{$row['ServiceId']}</td><td>{$row['FirstName']}</td><td>{$row['LastName']}</td><td>{$row['Items']}</td></tr>\n";
					//}
					
			while($row = mysqli_fetch_array($comments, MYSQLI_ASSOC)){
					  
			/*		 
					 $ServiceId = $row['ServiceId'];
					 $Name = $row['FirstName'] . " " . $row['LastName'];
					 $Items = $row['Items'];
					 $Agreedamount = $row['Agreedamount'];
					 $Phone = $row['Phone'];
					 
					 
					 $ServiceId = htmlspecialchars($row['ServiceId'],ENT_QUOTES);
					 $Name = htmlspecialchars($row['FirstName'] . " " . $row['LastName'],ENT_QUOTES);
					 $Items = htmlspecialchars($row['Items'],ENT_QUOTES);
					 $Agreedamount = htmlspecialchars($row['Agreedamount'],ENT_QUOTES);
					 $Phone = htmlspecialchars($row['Phone'],ENT_QUOTES);
			  */

						// Write the data of the person
						echo"<tr><td>";
						//<dt>ServiceId:</dt><dd>';
						echo $row['ServiceId'];
						echo "</td><td>";
						//<dt>Name:</dt><dd>';
						echo $row['FirstName'] . " " . $row['LastName'];
						echo "</td><td>";
						//<dt>Items:</dt><dd>';
						echo $row['Items'];
						echo "</td><td>";
						//<dt>Agreedamount:</dt><dd>';
						echo $row['Agreedamount'];
						echo "</td><td>";
						//<dt>Phone:</dt><dd>';
						echo $row['Phone'];
						echo "</td></tr>";
			echo "</table>";
						
					}
				
				//}
				
				//else{
					//echo '<tr><td colspan="4">No Rows Returned</td></tr>';
				//}
				// Close the database connection
				mysql_close();
			?>
				

	      <p>
		     <a href="list.php">Return to the list</a>
		  </p>

	  </body>

	</html>
	