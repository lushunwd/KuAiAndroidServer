<?php
include 'config.php';

    $valuer = $_POST['value'];
   
    $obj=json_decode($valuer);
 
    $tag = $obj->tag;
    if($tag==1){
       $qlike = $obj->qlike; 
    }elseif($tag==0){
        $qunlike = $obj->qunlike;
    }
	
    $qid = $obj->qid;

	
	
   if($tag==1){
    $sql="update qvalue set qlike = $qlike where qid =$qid";
    }elseif($tag==0){
        $sql="update qvalue set qunlike = $qunlike where qid =$qid";
    }
    $res = mysql_query($sql);
    printf("ok");