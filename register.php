
<?php
session_start();

if (isset($_SESSION['username'])) {
    session_start();
    session_destroy();
}
?>
<!DOCTYPE html
    <html>
<head>

    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/structure.css">
    <!-- Bootstrap -->

</head>
<body>
    <h1 size="50px">Registration Page</h2>
    <form class="box register" action="submitregister.php" method="post" class = "form-control">

        <table>
            <tr>
                <th><label>User name</label></th>
                <td><input type="text" id="name" name="user_name" placeholder="Choose a User name" required="required" >
                </td>

            </tr><br>

            <tr>
				<th height="37" scope="row">Email</th>
               
                <td>
                    <input type="text" id="email_address" name="email" placeholder="Enter your Email" required="required" >
                </td>

            </tr><br>

            </tr>

            <tr>
                <th height="37" scope="row">Password:</th>
                <td>
                    <input type="Password" id="Password" name="pass_word" placeholder="Create a Password" required="required" >
                </td>

            <br>
            </tr>
            <tr>
                <th>User type
                <td><input type="text"  id="type" name="usertype" placeholder="eg.administrator">
                </td>
            <tr>
                <th><td size="50px"> <Center><input type="submit" id="button" name="submit" value="sign up" tabindex="4">
                <td></th><a href="index.php">go back</a></td>
                </tr>


                </form>
           </body>
       </html>	
