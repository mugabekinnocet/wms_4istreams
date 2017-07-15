<!doctype html>
<html>
	<head>
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">
	</head>
	<body>
	<p>Registration Page</p>
	<form class="box register" action="submitregister.php" method="post" class = "form-control">
	
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
					<label>Create password:</label>
			  <td>
			  <input type="Password" id="Password" name="password" placeholder="Create a Password" required="required" >
			  </td>
		
					<br>
			</tr>
			<tr>
				<td>User type
					<td><input type="text"  id="type" name="usertype" placeholder="eg.administrator">
				</td>
				<tr>
						<td size="50px"> <Center><input type="submit" id="button" name="submit" value="sign up" tabindex="4">
						<td><a href="index.php">go back</a></td>
			</tr>
			
						
			</form>
		</body>
</html>	
