<?php include("config.php");

echo  $id          = $_GET['id'];
echo  $title  = ($_REQUEST['title']);
echo  $description  = ($_REQUEST['description']);
echo  $link  = ($_REQUEST['link']);



$sql = "UPDATE  news SET title='$title',description='$description',link='$link' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: news.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
