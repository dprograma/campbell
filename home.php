<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robot" content="noindex, nofollow"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Home Page</title>
<link href="/campbell/div.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
require("header.html");
?>
<div class="smallmenu"><p id="welcome"><img src="/campbell/images/welcome.png" /></p></div>
<div class="logindiv">
<form method="post" action="index.php">
<table align="center" width="500" cellspacing="20" cellpadding="0" border="0">
<tr><td colspan="2">Enter your correct Number and click <strong>Submit</strong>
</td></tr><?php
if(!empty($_GET['action'])) {
echo "<tr><td align='right'>Number:</td><td align=\"left\"><input type=\"text\" name=\"num\"
value=\"\"></td><td><span style=\"color:#FF0000\">".urldecode($_GET['action']).
"</td></tr><tr><td></td><td><input type=\"submit\" name=\"action\" value=\"Submit\" /></td></tr>
</table></form>";
}else{
?>
<tr><td align="right">Number:</td><td align="left"><input type="text" name="num" value="" /></td>
</tr><tr><td></td><td><input type="submit" name="action" value="Submit" /></td></tr>
</table></form>
<?php
}
?>
</div>
<?php
require("footer.php");
?>
</body>
</html>
