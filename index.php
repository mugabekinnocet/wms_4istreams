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
        #footer2{
            margin: 1Opx 0;
            background: black;
            padding: 10px;
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
                                <center><img src="istrm.png" width="100" height="50"></center>
                                <h2><marquee behavior="roll">WE CARE FOR YOUR MACHINE</marquee><h2>
                                        </div>
                                        <div id="nav">
                                            <ul>
                                                <li><a href="login.php.html">Login</a></li>
                                                <li><a href="register.php">Sign Up</a></li>
                                                <li><a href="customer.php">View Progress</a></li>
                                            </ul>	
                                        </div>
                                        <div id="content">
                                            <h2>SERVICES</h2>
                                            <p>
                                            <li>Computer Repair and Maintenance
                                                </p>
                                                <p><li>OS installations </p>
                                            <li>Software upgrading and installations<br>

                                                <div id="footer2">
                                                    <h3><marquee behaviour="slide" rate="5times/sec" >ALL THESE ON AN AFFORDABLE PRICE</marquee></h3>

                                                </div>
                                        </DIV>
                                        <div id="footer1">
                                            <h2>FOLLOW_US</h2>
                                            <br>
                                            <a href="http://www.facebook.com/login/"><img src="facebook.png" width="50" height="50">FACEBOOK</a>
                                            <a href="http://www.istreams@twitter"><img src="whatsApp.png" width="50" height="50">WHATSAPP</a>
                                            <a href="http://www.istreams:istreams@viber"><img src="viber.png" width="50" height="50">TWITTER</a><br>

                                        </div>
                                        <div id="footer">
                                            <p>
                                                by atm
                                            </p>
                                        </div>
                                        </div>
                                        </body>
                                        </html>
