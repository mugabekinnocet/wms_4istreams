<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {

    }
    ?>
<html> 
    <head>
        <title>Technician side

        </title>
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
                background-color:#068e06;
                color:yellow;
                clear:both;
                text-align:center;
                padding:5px; 
            }
        </style>
    </head>
    <body>
        <div id="header">
            <h1>iStreams workshop</h1>
            <h2>Technician</h2>
        </div>

        <div id="nav">
            <br>
            <br>
            <br>
        </div>

        <div id="section">
            <h1>Work</h1>
            <p>
            <UL>
                <li><a href="itemreg.php"><b>Register items</B> </a></li>
                <li><a href="progress.php"><b>Progress</B> </a></li>
                <li><a href="pay.php"><b>Payments</B> </a></li>

            </ul>
           </p>

        </div>

        <div id="section">
            <h1>Reports</h1>
            <p>
            <UL>
                <li><a href="index.html"><b>To Manage</B> </a></li>
                <li><a href="index.html"><b>Finance</B> </a></li>


            </ul>
            </p>
        </div>

        <div id="section">
            <h1>Connect</h1>
            <!--<p>
            <UL>
            <li><a href="index.html"><b></B> </a></li>
            <li><a href="index.html"><b></B> </a></li>-->
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