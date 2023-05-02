<?php include("config.php");
echo  $title  = ($_REQUEST['title']);
echo  $description  = ($_REQUEST['description']);
echo  $link = ($_REQUEST['link']);




$sql = "INSERT INTO news (title,description,link) VALUES ('$title','$description','$link')";

if (mysqli_query($conn, $sql)) {
    header("Location: news.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
