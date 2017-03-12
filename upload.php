<?php 
	move_uploaded_file($_FILES['file']['tmp_name'], "./Valueimg/".$_FILES["file"]["name"]); 

?>