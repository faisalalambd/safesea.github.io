<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM overseas_network WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: oversease_network.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
