<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns= "http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset-utf-g" />
<title>Untitled Documents</title>
 </head>

<body>

<?php
//extract($_POST);

//connect to server
$connect = mysqli_connect("localhost","root","","klinik_ajwa");

if(!$connect){
	die('ERROR:'.mysqli_connect_error());
}

?>
</body>
</html>