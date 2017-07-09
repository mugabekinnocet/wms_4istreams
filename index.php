<!DOCTYPE html>
<html>
<style>
/*
* multi-line comment
*/
p{ line-height: 1em; }
h1, h2, h3, h4{
    color: orange;
	font-weight: normal;
	line-height: 1.1em;
	margin: 0 0 .5em 0;
}
h1{ font-size: 1.7em; }
h2{ font-size: 1.5em; }
a{
	color: black;
	text-decoration: none;
}
	a:hover,
	a:active{ text-decoration: underline; }

/* you can structure your code's white space so that it is as readable for when you come back in the future or for other people to read and edit quickly */

body{
    font-family: arial; font-size: 80%; line-height: 1.2em; width: 100%; margin: 0; background: #eee;
}
/* you can put your code all in one line like above */
#page{ margin: 20px; }

/* or on different lines like below */
#logo{
	width: 35%;
	margin-top: 5px;
	font-family: georgia;
	display: inline-block;
}
/* but try and be as concise as possible */
#nav{
	width: 60%;
	display: inline-block;
	text-align: right;
	float: right;
}
	#nav ul{}
		#nav ul li{
			display: inline-block;
			height: 62px;
		}
			#nav ul li a{
				padding: 20px;
				background: blue;
				color: white;
			}
			#nav ul li a:hover{
				background-color: #ffb424;
				box-shadow: 0px 1px 1px #666;
			}
			#nav ul li a:active{ background-color: #ff8f00; }

#content{
	margin: 30px 0;
	background: blue;
	padding: 20px;
	clear: both;
}
#footer1{
	margin: 30px 0;
	background: blue;
	padding: 20px;
	clear: both;
}
	#footer p{
		text-align: center;
		text-transform: uppercase;
		font-size: 100%;
		color: green;
	}

/* multiple styles seperated by a , */
#content,
ul li a{ box-shadow: 0px 1px 1px #999; }
</style>
<head>

<!-- your webpage info goes here -->

    <title>workshop management</title>
	
	<meta name="author" content="mugabekinnocent" />
	<meta name="description" content="workshop management system" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->	
	<link rel="stylesheet" href="style.css" type="text/css" />
	
</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div id="logo">
			<h1><a href="/" id="logoLink">WORKSHOP PAGE</a></h1>
			<marquee direction="down"><center><img src="istrm.png" width="100" height="50"></center></marquee>
			<h2><marquee behavior="roll">WE CARE FOR YOUR MACHINE</marquee><h2>
		</div>
		<div id="nav">
			<ul>
				<li><a href="loginform.inc.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<li><a href="">View Progress</a></li>
			</ul>	
		</div>
		<div id="content">
			<h2>Services</h2>
			<p>
			Computer Repair and Maintenance
			</p>
			<p> </p>
			
		</div>
		<div id="footer1">
			<h2>Contact Us</h2>
			
		</div>
		<div id="footer">
			<p>
			 by mkinnocent
			</p>
		</div>
	</div>
</body>
</html>