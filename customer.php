<DOCTYPE html>
    <html>
        <head>
            <title>
                Workshop Customer's Page
            </title>
            <style>
                #main{
                    background-color:black;
                    color:white;
                    text-align:center;
                    text-type:times new romans;
                }
                #content{
                    background-color:blue;
                </style>	
            </head>
            <body>
                <div id="main">
                    <h1><?php
                        echo "WELCOME TO CUSTOMER'S PAGE";
                        ?></h2>
                </div>
                <div id="content">

                    <h2>Search and view progress with your machine</h2>
                </div>


                <form action="viewprogress.php" method="POST">
                    <table>
                        <th> Enter Serviceid</th>
                            <td><input type="number" name="serviceId" required></td>
                            <td><input type="submit" value="search"></td>
                    </table>
                    <a href="index.php">click here to go back</a>


            </body>
      </html>
