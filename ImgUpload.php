<?php
include 'config.php';
$uid=$_POST['uid'];
$filename = date("YmdHis");
$sql="update quser set uhead = concat($filename,'.png') where userid=$uid";
mysql_query($sql);
$file = fopen("./Userimg/".$filename.".png", "w");
$data = base64_decode($_POST['img']);
fwrite($file, $data);
fclose($file);
?>