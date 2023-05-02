<?php include("config.php");

echo  $name      = ($_REQUEST['name']);
echo  $email  = ($_REQUEST['email']);
echo  $phone  = ($_REQUEST['phone']);
echo  $message  = ($_REQUEST['message']);



$sql = "INSERT INTO contact (name, email, phone,message) VALUES ('$name', '$email', '$phone','$message')";
$text = "Your message Successfully send to the admin";
if (mysqli_query($conn, $sql)) {
    header("Location: contact.php?text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
