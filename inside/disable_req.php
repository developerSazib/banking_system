<?php
require_once '../config.php';
$delete_id= $_GET['desable_id'];

$result = mysqli_query($link, "DELETE FROM `loan_request` WHERE `loan_id` = '$delete_id'");

header("location:index.php");
?>