<html>
<style>
#page {
    background-color:black;
    color:green;
    text-align:center;
    padding:5px;
}
</style>
<head>
    <title>istreams receipt</title>
</head>
<body>
<script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
   </head>
        <body > 
		<div id="page">
		<?php 
		echo "Print Receipt";
		?>
		</div>
                            <div id="divToPrint" >
							<fieldset>
							<legend>Customer's Receipt</legend>
						<form id="test">
               <div style="width:500px;height:400px;background-color:white;">
                  <center><img src="istrm.png" width="100" height="50"></center>
					
	<div>Date...............................</div>
	<div>ServiceId..........................</div>
	<div>Customer's  name .......................................................................</div
	<div>Item(s)................................................................................<br>
		..................................................................................<br>
	......................................<br>Brought On<input type="date"> Picked On<input  type="date"</div>
	<div>Problem(s)................................................................................<br>
		.............................................................................................<br>
		..............................................................................................<br>
		..................................................................................................</div>
		<div>Amount Agreed in words.......................................................................<br>
			.................................................................................................<br>
			Amount Paid<input id="money"><center>Balance <input></center></div> 
		<div>Received by..............................................Approved by..........................................</div>
		
		<div>Thank you for your coorperation</div>
			
		
                </div>
            </div>
			</fieldset>
            <div>
                <input type="button" value="print" onclick="PrintDiv();" />
            </div>
		</table>
	</form>	
	
		</fieldset>

</body>

</html>

