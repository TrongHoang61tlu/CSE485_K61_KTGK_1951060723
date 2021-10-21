<?php


include ("config/config.php");

if(isset($_GET['bd_id'])) {
    $id = $_GET['bd_id'];
    $sql = "delete from blood_donor where bd_id = '$id'";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');
}
?>