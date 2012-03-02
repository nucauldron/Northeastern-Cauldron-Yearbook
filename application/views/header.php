<?php
require_once 'css/CssCrush.php';
$CssFile = csscrush::file("/cauldron/css/stylesheets/style.css");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo $CssFile; ?>" />
</head>
<body>
