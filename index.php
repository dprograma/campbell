<?php
if(isset($_REQUEST['action'])) {
switch($_REQUEST['action']) {
case "Submit":
//trim post variables
$error="";
$num=strtoupper(trim($_POST['num']));
if(empty($num)) {
$error.="Invalid+Pin+%21%0D%0A";
}
session_start();
ob_start();
//load config.php file
require("config.php");

//select all the fields in details table
$sql="SELECT*FROM details WHERE id ='".$num."'";
$query=mysql_query($sql,$conn) or die(mysql_error());
$row=mysql_fetch_array($query);

//check if number exists
if($row) {
header("Location:confirm.php");
}else{
header("Location:home.php?action=".$error);
}

//create variables for confirmation
$_SESSION['id']=$row['id'];
$_SESSION['firstname']=$row['firstname'];
$_SESSION['lastname']=$row['lastname'];
$_SESSION['course']=$row['course'];

ob_end_flush();

break;
exit();

case "Login":
//open an output buffer
session_start();
ob_start();

//load config.php file
require("config.php");

//check if pin exists
$sql="SELECT*FROM pin_num WHERE pin_id ='". strtoupper($_POST['pin']). "'";
$query=mysql_query($sql,$conn) or die(mysql_error());
$row=mysql_fetch_array($query);

if($row) {

//display result and reduce validity by 1 then display message on display page
//else display an error message on login page
$display="";
$error="";
$validity=$row['validity'];
$valid=$validity-1;
$sql="UPDATE pin_num SET validity='". $valid. 
		"' WHERE pin_id='" . $row['pin_id']. "'";
$query=mysql_query($sql,$conn) or die(mysql_error());
//insert pin number into details table
$sql="UPDATE details SET pin_id='".$row['pin_id'].
"' WHERE id ='" . $_SESSION['id'] . "'";
$query=mysql_query($sql,$conn) or die(mysql_error()); 

if($validity <1) {
$display.=" You+have+exceeded+the+maximum+number+of+usage%21%0D%0A";
header("Location:login.php?display=".$display);
}else{
$display.="Your+card+validity+remains+". $valid . "%21%0D%0A";
header("Location:display.php?display=". $display);
}
//close output buffer
ob_end_flush();

}else{
$error.="Invalid+pin%21%0D%0A";
header("Location:login.php?action=" . $error);
}
break;
exit();

case 'Logout':

session_start();
session_unset();
session_destroy();

header("Location:home.php");

break;
exit();

case 'Review':

session_start();
ob_start();
require("config.php");
$firstname=trim($_POST['firstname']);
$lastname=trim($_POST['lastname']);
$error1="";
$error2="";
if(empty($firstname)) {
$error1.="Please+enter+a+valid+firstname%21%0D%0A";
}
if(empty($lastname)) {
$error2.="Please+enter+a+valid+lastname%21%0D%0A";
}
if(empty($error1) && empty($error2)) {
$sql="INSERT IGNORE INTO review_table VALUES('". 
$_SESSION['id'] . "','" . $firstname. "','". $lastname . "')";
$query=mysql_query($sql,$conn) or die(mysql_error());
header("Refresh:5; URL=home.php");
die("<span style=\"background-color:#FFFF00; color:#FF0000; size:8px\">Your information has been 
forwarded and your request is being reviewed. You will be reverted to the Home
page in 5 seconds...</span>");
}else{
header("Location:review.php?action1=".$error1."&action2=".$error2);
}
ob_end_flush();

break;
exit();
}
}else{
header("Location:home.php");
}
?>