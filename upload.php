<?php
if(isset($_POST['submit'])){
	$filename=$_FILES['uploadFile']['name'];
	$filesize=$_FILES['uploadFile']['size'];
	$filetemp=$_FILES['uploadFile']['tmp_name'];
	$filetype=$_FILES['uploadFile']['type'];
	
	$fileex=strtolower(end(explode('.',$filename)));
	$allowed=array("pdf");
	if(in_array($fileex,$allowed)){
		move_uploaded_file($filetemp,'uploaded_files/'.$filename);
		echo 'file upload successfully';
	}
	else{
		echo $fileex. 'file type is not allowed';
}}

?>