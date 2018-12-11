<?php
session_start();
require("header.html");
$logout=urlencode("Logout");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robot" content="noindex, nofollow"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Result Display Page</title>
<link href="/campbell/div.css" rel="stylesheet" type="text/css" />
</head>
<body><a style="text-decoration:none"
 href="/campbell/index.php?action=<?php echo $logout; ?>"><div style="visibility:visible; background-color:#000000; position:absolute; 
 color:#FFFFFF; left:1300px; top:90px">Logout</div></a><center>
 <?php 
 if(!empty($_GET['display'])) {
 echo "<div class=\"display\"><img src=\"/campbell/images/warning.gif\" align=\"left\" style=\"margin-left:8px\">"
 .urldecode($_GET['display'])."</div>";
 }
 ?>
<table cellpadding="5" cellspacing="5" bgcolor="#FFFFFF" class="innertable">
<tr><td colspan="2"><?php echo "The requested result for Number " . $_SESSION['id'] . " is displayed below.";?></td></tr>
<tr><td colspan="2"></td></tr>
<?php
require("config.php");
$sql="SELECT*FROM details WHERE id = '" . $_SESSION['id'] . "'";
$query=mysql_query($sql,$conn) or die(mysql_error());

$row=mysql_fetch_array($query);
?>
<tr><td>Number</td><td><?php echo $row['id']; ?></td></tr>
<tr><td>First Name</td><td><?php echo $row['firstname']; ?></td></tr>
<tr><td>Last Name</td><td><?php echo $row['lastname']; ?></td></tr>
<tr><td>Course</td><td><?php echo $row['course']; ?></td></tr>
<tr><td>Score</td><td><?php echo $row['score']; ?></td></tr>
<tr><td colspan="2"></td></tr>
<tr><td colspan="2"><button onClick="javascript:print(document);" onKeyPress="javascript:print(document);">Print</button>
&nbsp;<button onClick="history.go(-1);">Back</button>
</td></tr>
</table>
</center>
</body>
</html>