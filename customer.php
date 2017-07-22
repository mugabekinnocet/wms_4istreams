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


                <form action="" method="get">
                    <table>
                        <tr>

                            <td>Enter Your Name
                            <td><input type="text" name="id" placeholder="please enter customers names" 	required></td>
                            <td>Enter your Phone
                            <td><input type="phone number" name="phone" placeholder="please enter if you have" ></td>
                            <td> Enter Serviceid
                            <td><input type="number" name="serviceid" required></td>
                            <td><input type="submit" value="search"></td>
                    </table>
                    <a href="index.php">click here to go back</a>


            </body>
      </html>
