<?php
require_once "config.php" ;
session_start() ;

$username = $_SESSION['username'] ;

$image1 = $_POST['image'] ;
$sql = "UPDATE users set image='$image1' where username='$username'" ;

if(mysqli_query($conn , $sql))
{
    $_SESSION['image'] = $image1;
    header("location: mainpage.php");
    echo "Successful";

}

mysqli_close($conn) ;
