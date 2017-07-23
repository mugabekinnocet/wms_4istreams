
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
	 <title>receipt</title>
		<script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
	 <div id="divToPrint" >
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
   
            

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		
	
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


        <!-- Add your site or application content here -->
		
		
        <form method="POST" action="receipt.php" class="container">
		
            <div class="header">
				<img src="istrm.png" width="100" height="50">
                <div class="cash-receipt left">Cash Receipt</div>
				 <div class="medium left">
                    <div class="right">
                        <label for="receipt-no">Receipt Number:</label>
                        <input class="no-style input-receipt-no" id="receipt-no" type="text">
                    </div>
                    <div class="right"> 
                        <label for="date">Date:</label>
                        <input class="no-style input-date" id="date" type="text">
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="content">
                <div>
                    <label for="received-from">Received From</label>
                    <input type="text" class="no-style id="received-from" input-received-from">
                    <label for="amount">the amount of $</label>
                    <input type="text" class="no-style id="amount" input-amount">
                </div>
                <div>
                    <label for="for">For</label>
                    <input type="text" id="for" class="no-style input-for">
                </div>
                <div class="payment">
                    <div class="money left">
                        <span class="left">
                            <label for="balance">Current Balance:$</label>
                            <input type="text" class="no-style input-balance" id="balance">
                        </span>
                        <span class="left">
                            <label for="payment">Payment Amount:$</label>
                            <input type="text" class="no-style input-payment" id="payment">
                        </span>
                        <span class="clear">
                            <label for="due">Balance Due:$ <label>
                            <input type="text" class="no-style input-due" id="due">
                        </span>
                    </div>
                    <table class="right">
                        <tr>
                            <td><input type="checkbox" id="cash" value="cash"></td>
                            <td><label for="cash">Cash</label></td>
                        <tr>
                            <td><input type="checkbox" value="cheque"></td>
                            <td><label for="cheque">Cheque<label></td>
                        <tr>
                            <td><input id="money-order" type="checkbox" value="money-order"></td>
                            <td><label for="money-order">Money Order</label></td>
                        </tr>
                    </table>
                </div>
            <div class="clear right">
                <label for="received">Received By:</label>
                <input id="received" type="text" class="no-style">
							
            </div><br>
			<center><div id="last">
				Thank you for your co-operation
			</div>
			</div>
        </form>    
			
			
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>


</body>
    <a href="finance.php">go back</a>  
   
		 <input type="button" value="print" onclick="PrintDiv();" />	
	 
</html>