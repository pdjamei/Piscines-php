<?php
if ($_GET['action'] === 'set')
{
	setcookie($_GET['name'], $_GET['value'], time() + 3600);
}
else if ($_GET['action'] === 'get')
{
	$name = $_GET['name'];
	if (array_key_exists($name, $_COOKIE))
		echo $_COOKIE[$name]."\n";
}
else if ($_GET['action'] === 'del')
{
	$name = $_GET['name'];
	setcookie($name, '', time() - 3600);	
}
?>
