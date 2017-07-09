<!doctype html>
<html>
	<head>
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

	</head>
	<body>
		<h2>Registration Page</h2>
					
		
		
		<form action="submitregister.php" method="post" class = "form-control">
			<table>
				<tr>
					<td><label>User name</label></td>
				<td><input type="text" id="name" name="username" placeholder="Choose a User name" required="required" >
				</td>
					
			</tr><br>

			<tr>
				<td>
					<label>Email address:</label>
					<td>
						<input type="text" id="email_address" name="email" placeholder="Enter your Email" required="required" >
					</td>
					
			</tr><br>

			</tr>
					
			<tr>
				<td>
					<label>Create a password:</label>
				</td>
			  <td>
			  <input type="Password" id="Password" name="Password" placeholder="Create a Password" required="required" >
			  </td>
		
					<br>
			</tr>
			<tr>
				<td>user type
					<td><input type="text"  id="type" name="usertype" placeholder="eg.administrator">
				</td>
			</tr>

						<tr>
						<td><input type="submit" id="button" name="submit" value="Submit"></td>
			</tr>
			
						
							

							
						
			
			</table>
			</form>
		</body>
</html>	
