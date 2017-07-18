<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {
   
}
?>
<html>

<style>
#header {
    background-color:black;
    color:white;
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

<div id="section">
<h1>Technician</h1>
<p>
<UL>
<li><a href="retrieve.php"><b>registered items</B> </a></li>
<li><a href="retrieve.php"><b>progress report</B> </a></li>
<li><a href="retrieve.php"><b>deadline reports</B> </a></li>



</ul>
</p>

</div>

<div id="section">
<h1>Admin</h1>
<p>
<UL>
<li><a href="index.html"><b>Technicians</B> </a></li>
<li><a href="index.html"><b>Finance managers</B> </a></li>


</ul>
</p>
</div>

<div id="section">
<h1>Finance</h1>
<p>
<UL>
<li><a href="index.html"><b>Payments</B> </a></li>
<li><a href="index.html"><b>Receipts</B> </a></li>
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