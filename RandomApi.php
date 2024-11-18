<?php 

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include('database.php');
$sql = "select * from Pokemon";
$rs = $db ->query($sql);
echo json_encode($rs->fetchAll(PDO::FETCH_ASSOC));
?>