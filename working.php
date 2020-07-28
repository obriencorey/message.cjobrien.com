<?php
//error_reporting(E_ALL);
//var_dump($_SERVER);
$post_data = $_POST['data'];
if (!empty($post_data)) {
    $dir = 'YOUR-SERVER-DIRECTORY/files';
    $filename = 'datastorage.txt';
    $handle = fopen($filename, "a");
	$fileContent = $post_data."\n";
	$filestatus = file_put_contents("datastorage.txt",$fileContent,FILE_APPEND);
		

    fclose($handle);
}
?>