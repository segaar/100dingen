<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="nl" /> 
	<meta name="description" content="<?php echo NDPATH_META_DESC; ?>" /> 
	<meta name="keywords" content="<?php echo NDPATH_META_WORDS; ?>" />
	<title><?php echo NDPATH_TITLE; ?></title>
	<link href="css/100dingen.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Exo+2:200,500' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery-1.10.js"></script>
	<script type="text/javascript" src="js/100dingen.js"></script>
</head>
<body>
	<div id="container">
		<div id="topcontainer">
			<?php include_once 'includes'.DS.'topnav.php';?>
		</div>
		<div id="maincontainer">
			<?php include_once 'sections'.DS.'section01.php';?>
			<?php include_once 'sections'.DS.'section02.php';?>
			<?php include_once 'sections'.DS.'section03.php';?>
			<?php //include_once 'sections'.DS.'section04.php';?>
			<?php include_once 'sections'.DS.'section05.php';?>
		</div>
		<div id="footcontainer">
			<?php include_once 'includes'.DS.'foot.php';?>
		</div>
	</div>
</body>
</html>
