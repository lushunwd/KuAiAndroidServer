<?php
/**
 * ���JSON����
 * ����ֵ��title desc time content_url pic_url
 */
require 'config.php';
 $mstart = $_GET['mstart'];

//$mend = $_GET['mend'];

$n = 0;
//$result = mysql_query("select * from news");
$result = mysql_query("select * from gaofang order by time desc");

$num = mysql_num_rows ( $result );

$count = $num; // ��¼������
	$pageSize = 5; // ÿҳ��ʾ������
	$pageCount = ceil ( $count / $pageSize ); // ��ҳ��

$offset=($mstart-1)*$pageSize;

$sql = "select * from gaofang order by time desc limit $offset,$pageSize";
	$query = mysql_query ( $sql );





while ($row = mysql_fetch_array($query)){
	$arr[$n++]= array(
		"title" => $row['title'],
		"desc" => $row['desc'],
		"time" => $row['time'],
		"content_url" => $row['content_url'],
		"pic_url" => $row['pic_url']	
	);
	
}
//����ת��ΪJSON�ַ���
die(json_encode($arr));
?>