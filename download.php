<?php

$filepath='uploaded_files/resumesharmifinal1';
if(file_exists($filepath)){
	header('Content-Description:File Transfer');
	header('Content-Type:application/octet-stream');
	header('Content-Disposition:attachment; filename="'.basename($filepath).'"');
	header('Expires:0');
	header('Cache-Control:must-revalidated');
	header('Pragma:Public');
	header('Content-Length:'.filesize($filepath));
	flush();
	readfile($filepath);
	exit;
}
	
?>