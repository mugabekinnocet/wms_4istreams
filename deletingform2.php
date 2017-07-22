<?php
/ sql to delete a record
$mysql = "DELETE FROM user WHERE serviceid="";

if ($conn->query($mysql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
