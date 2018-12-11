<?php
require("header.html");
$logout=urlencode("Logout");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robot" content="noindex, nofollow"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Login Page</title>
<link href="/campbell/div.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
require("header.html");
?>
 <div class="logindiv">
<form method="post" action="index.php">
 <?php 
 if(!empty($_GET['display'])) {
 echo "<div class=\"display\"><img src=\"/campbell/images/warning.gif\" align=\"left\" style=\"margin-left:8px\">"
 .urldecode($_GET['display'])."</div>";
 }
 ?>
<table align="center" width="500" cellspacing="5" cellpadding="5" border="0">
<tr><td colspan="2"><span style="size:4; color:#000000">
Welcome to our Login area</span></td></tr>
<tr><td colspan="2">Enter your correct Pin and click <strong>Login</strong>
</td></tr><?php
if(!empty($_GET['action'])) { 
echo "<tr><td>Enter Pin:</td><td align=\"left\"><input type=\"text\" name=\"pin\"
value=\"\"></td><td><span style=\"color:#FFFFFF\" bgcolor=\"#000000\">".urldecode($_GET['action']).
"</td></tr><tr><td></td><td><input type=\"submit\" name=\"action\" value=\"Login\" /></td></tr>
</table></form>";
}else{
?>
<tr><td>Enter Pin:</td><td align="left"><input type="text" name="pin" value="" /></td>
</tr><tr><td></td><td><input type="submit" name="action" value="Login" /></td></tr>
</table></form></div>
<?php
}
?>
</center></body>
</html>
