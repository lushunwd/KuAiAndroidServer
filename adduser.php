<?php
    include 'config.php';

$value = $_POST['value'];
	  
$obj=json_decode($value);
	  
$uname = $obj->uname;
	
$upassword = $obj->upassword;

date_default_timezone_set("PRC");
$ctime = date("Y/m/d");	
	  
$mselect="select * from `quser` where uname = '".$uname."'";
  
$res = mysql_query($mselect);
   
$row   = mysql_num_rows($res); 
if(empty($row)){

	$sql="INSERT INTO `quser`( uname, upass, utime) VALUES ('".$uname."','".$upassword."','".$ctime."');";
	$res = mysql_query($sql);
  
	printf("ok");      
}else{

	printf("no");
	  
}
	  
die();

