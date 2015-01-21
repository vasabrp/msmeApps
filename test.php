<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
<body><?php

	//$login = 'u5415399';
	//$passwd = 'dfsfadf';
	$login = 'vasabrp';
	$passwd = '';	
	
	$url = "http://multimedia.bis.au.edu/authen/index2.php?user=" . $login . "&pass=" . $passwd;
	$data = file_get_contents($url);
	
	//print($data);
	
	if ($data=='Cannot login') {
		print('Wrong username or password');
	} else {
		//print('Login success');
		print($data);
	}
?>
</body>
</html>