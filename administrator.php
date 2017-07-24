<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {
  
}
?>
<html>

<style>
#header {
    background-color:blue;
    color:yellow;
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
    padding:20px; 
}
#footer1 {
    background-color:white;
    color:green;
    clear:both;
    text-align:center;
    padding:5px; 
}
#footer {
    background-color:green;
    color:yellow;
    clear:both;
    text-align:center;
    padding:5px; 
}
 
</style>
<head>
<title>administrator</title>

</head>
<body>

<div id="header">
<h1>iStreams workshop</h1>
<h2>ADMINISTRATION HUB</h2>
</div>

<div id="nav">
<br>
<br>
<br>
</div>



<div id="section"  style="width:550px;height:250px;line-height:3em;overflow:scroll;padding:10px;">

<fieldset>
<legend><h1>Pages</h1></legend>

<p>
<UL>
<li><a href="technician.php"><b>Technicians</B> </a></li>
<li><a href="finance.php"><b>Finance managers</B> </a></li>
<li><a href="viewaccounts.php"><b>View Accounts</B> </a></li>
<li><a href="retrieve.php"><b>registered items</B> </a></li>
<li><a href="retrieve.php"><b>progress report</B> </a></li>
<li><a href="retrieve.php"><b>deadline reports</B> </a></li>


</ul>
</fieldset>
</p>
</div>

<div id="footer1">

<a href="logout.php">Logout</a>
</div>

</ul>
</p>
</div>
<div id="footer">
Copyright @ atm
</div>

</body>
</html>