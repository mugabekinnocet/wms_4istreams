<?php
include("opendbo.php");
$sql = "DELETE * FROM user";

if ($sql == TRUE) {
    echo "Record deleted successfully";
	header('Refresh: 1; url=finance.php');
} else {
    echo "Error deleting record: " . $sql->error;
}


?>