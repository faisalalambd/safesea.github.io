<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM local_networks WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: local_networks.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
