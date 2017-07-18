<html> 
		<head>
		 <title>
		     work registration
		 </title>
			 <style>
					#header {
						background-color:black;
						color:green;
						text-align:center;
						padding:5px;
					}
					#nav {
						line-height:30px;
						background-color:#eeeeee;
						height:300px;
						width:100px;
						float:left;
						padding:5px; 
					}
					#section {
						width:350px;
						float:left;
						padding:10px; 
					}
					#footer1 {
						background-color:white;
						color:green;
						clear:both;
						text-align:center;
						padding:5px; 
					}
					#footer {
						background-color:black;
						color:green;
						clear:both;
						text-align:center;
						padding:5px; 
					}
			 </style>
		</head>
		<body>
			<div id="header">
				<h1>iStreams workshop</h1>
				<h2>Work: register</h2>
				</div>

				<div id="nav">
				<br>
				<br>
				<br>
				</div>

				<div id="section">
				  <form class="wpcf7-form" method="POST">
<div style="display: none;">
<input name="_wpcf7" type="hidden" value="63">
<input name="_wpcf7_version" type="hidden" value="4.8">
<input name="_wpcf7_locale" type="hidden" value="en_US">
<input name="_wpcf7_unit_tag" type="hidden" value="wpcf7-f63-p64-o1">
<input name="_wpcf7_container_post" type="hidden" value="64">
<input name="_wpcf7_nonce" type="hidden" value="cbdb12b346">
</div>
<p><label> FirstName (required)<br>
    <span class="wpcf7-form-control-wrap FirstName"><input name="firstname" 
	 type="text" size="40" value="" required></span> </label></p>
<p><label> LastName (required)<br>
    <span class="wpcf7-form-control-wrap LastName"><input name="lastname" 
	 type="text" size="40" value="" required></span> </label></p>
	 
	 <p><label> Items (required)<br>
    <span class="wpcf7-form-control-wrap Items"><input name="items" 
	 type="text" size="40" value="" required></span> </label></p>
	 <p><label> Agreed ammount (required)<br>
    <span class="wpcf7-form-control-wrap Agreedamount"><input name="agreedamount" 
	 type="text" size="40" value="" required></span> </label></p>
	 <p><label> Paid (required)<br>
    <span class="wpcf7-form-control-wrap Agreedamount"><input name="paid" 
	 type="text" size="40" value="" required></span> </label></p>
	 <p><label> Phone (required)<br>
    <span class="wpcf7-form-control-wrap Phone"><input name="phone" 
	 type="text" size="40" value="" required></span> </label></p>
	
	<p><input class="wpcf7-form-control wpcf7-submit" name = "Send" type="submit" value="Send"><span class="ajax-loader"></span></p>
<div class="wpcf7-response-output wpcf7-display-none"></div>
<?php

require 'opendbo.php';
if (isset($_POST['Send'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$items=$_POST['items'];
	$agreedamount=$_POST['agreedamount'];
	$paid=$_POST['paid'];
	$phone=$_POST['phone'];
	$insert_query = "INSERT INTO user (firstname, lastname, items, agreedamount,paid, phone) VALUES ('$firstname', '$lastname', '$items', '$agreedamount','$paid', '$phone')";
										
										$insert_query_run = mysql_query($insert_query);
										if($insert_query_run){
											
											echo "\t successfully registered \t";
										}else{
											echo "\t failed try again \t";
										}
											
										
									}
?>
</form></div>
				</div>

				<div id="section">
				
				</div>
				<div id="footer1">
				<a href="technician.php">back</a>
				</div>

				</ul>
				</p>
				</div>
				<div id="footer">
				Copyright @ atm
				</div>

		</body>
</html>
