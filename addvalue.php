<?php
include 'config.php';

     $valuer = $_POST['value'];
    $inputfile = $_POST['img'];
    $obj=json_decode($valuer);
    $uid = $obj->uid;
	$tid = $obj->tid;
	$qimg = $obj->qimg;
	$aimg = $obj->aimg;
	$qvalue = $obj->qvalue;
	$qlike = $obj->qlike;
	$qunlike = $obj->qunlike;
	if(!empty($qimg)){
 $file = fopen("./Valueimg/".$qimg , "w");  	  
         $fwflag = fwrite( $file, base64_decode( $inputfile ) );  
         fclose($file);  
	}

    mysql_query('set names utf8');
	$sql="INSERT INTO `qvalue`( UID, TID, QIMG,AIMG, QVALUE, QLIKE, QUNLIKE,QSHARE) VALUES (".$uid.",".$tid.",'".$qimg."','".$aimg."','".$qvalue."','".$qlike."','".$qunlike."','1');";
    $res = mysql_query($sql);
    printf("ok");