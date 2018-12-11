<?php
session_start();
require("header.html");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robot" content="noindex, nofollow"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Review page</title>

<link href="/campbell/div.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
require("header.html");
?>
<div class="logindiv">
<form method="post" action="index.php">
  <table width="476" height="226" border="0" align="center">
    <tr>
      <td colspan="2">Enter your correct information and Click <strong>Review</strong> </td>
    </tr><?php
	if(!empty($_GET['action1'])) {
	echo "<tr><td>Firstname</td><td><input type=\"text\" name=\"firstname\" value=\""
	. $_GET['action1'] . "\" class=\"textfield\" size=\"25\"></td></tr>";
	}else{
	?>
    <tr>
      <td>Firstname</td>
      <td>
        <input type="text" name="firstname"  size="25"/>      </td>
    </tr>
	<?php
	}
	if(!empty($_GET['action2'])) {
	echo "<tr><td>Lastname</td><td><input type=\"text\" name=\"lastname\" value=\""
	. $_GET['action2'] . "\" class=\"textfield\" size=\"25\"></td></tr>";
	}else{
	?>
    <tr>
      <td>Lastname</td>
      <td><label>
        <input type="text" name="lastname" size="25"/>
      </label></td>
    </tr>
	<?php
	}
	?>
    <tr>
      <td>ID Number </td>
      <td><label>
        <input type="text" name="id" disabled="disabled" size="25" value="<?php echo $_SESSION['id']; ?>"/>
      </label></td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="action" value="Review" />
      </label></td>
    </tr>
  </table>
</form></div>
</body>
</html>
