<?php
require_once '../config.php';
$approve_req_id = $_GET['approve_id'];

$result = mysqli_query($link, "UPDATE `loan_request` SET `status`='1'  WHERE `loan_id` = '$approve_req_id'");
header("location:access_request.php?accessId=".$approve_req_id);
?>