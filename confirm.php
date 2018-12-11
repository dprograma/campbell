<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robot" content="noindex, nofollow"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Confirm</title>
<link href="/campbell/div.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#999999">
<div class="logindiv">
  <form method="post" action="redirect.php">
  <?php
session_start();
?>   
    <div align="center">
      <table border="0" cellpadding="5" cellspacing="5">
        <tr><td colspan="2">Is this your correct information?</td></tr>
        <tr><td colspan="2">Click <strong>Yes</strong> if correct or <strong>No</strong> if incorrect.</td></tr>
        <tr><td>Full name:</td><td align="left"><?php echo $_SESSION['firstname']." " .$_SESSION['lastname']; ?></td></tr>
        <tr><td>Number:</td><td align="left"><?php echo $_SESSION['id']; ?></td></tr>
        <tr><td><input type="submit" name="action" value="Yes" /></td><td><input type="submit" name="action" value="No" /></td></tr>
                              </table>
    </div>
  </form>
</div>
</body>
</html>
