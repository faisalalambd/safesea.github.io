<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM customer_logo WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: customer_logo.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
