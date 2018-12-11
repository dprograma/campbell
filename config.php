<?php
//define mysql connection variables
$host="localhost";
$username="root";
$password="";
$database="campbell_university_db";

//connect to mysql server
$conn=mysqli_connect($host,$username,$password)
or die(mysqli_error());

//create mysql database
$sql="CREATE DATABASE IF NOT EXISTS " . $database;
$create=mysqli_query($conn,$sql) or die(mysqli_error());

//select database
mysqli_select_db($database,$conn);

//create pin num table
$sql=<<<EOD
		CREATE TABLE IF NOT EXISTS pin_num(
		pin_id VARCHAR(50) NOT NULL,
		validity INT(20) NOT NULL default '0',
		KEY idxpin(pin_id),
		UNIQUE uniqpin(pin_id),
		PRIMARY KEY(pin_id))
EOD;
$create=mysqli_query($conn,$sql) or die(mysqli_error());

//insert values into pin num

$sql=<<<EOD
		INSERT IGNORE INTO pin_num(pin_id,validity)
		VALUES('TRUL7480660','10'),('CMAU4063092','10'),('DVRU1457247','10'),('BHCU4940542','10'),
		('CMAU5116549','10'),('CLHU8787300','10'),('INKU2482639','10'),('TGHU1251896','10'),('FSCU6560491','10'),
		('GLDU7016864','10'),('GATU0136676','10'),('CRXU3189513','10'),('CAXU9892196','10'),('FCIU2906226','10')
EOD;
$create=mysqli_query($conn,$sql) or die(mysqli_error());

//create details table
$sql=<<<EOD
		CREATE TABLE IF NOT EXISTS details(
		id VARCHAR(50) NOT NULL,
		pin_id VARCHAR(50)NOT NULL,
		firstname VARCHAR(50) NOT NULL,
		lastname VARCHAR(255) NOT NULL,
		course VARCHAR(255) NOT NULL,
		score CHAR(5) NOT NULL,
		KEY idxid(id),
		UNIQUE uniqide(id),
		PRIMARY KEY(id))
EOD;

$insert=mysqli_query($conn,$sql) or die(mysqli_error());


//insert into details table

$sql=<<<EOD
		INSERT IGNORE INTO details VALUES('AE3266745','','Kehinde','Olawemimo','Sociology','235'),
		('AE3266750','','Bayo','Oresola','Bus Admin','252'),
		('AE3266752','','Jude','Bassey','Computer Science','271'),
		('AE3266914','','Albert','Fashina','App Mathematics','260'),
		('AE3267050','','Matthew','Chukwuka','Pol Science','284')
EOD;

$insert=mysqli_query($conn,$sql) or die(mysqli_error());

//create table for rewiew of records

$sql=<<<EOD
		CREATE TABLE IF NOT EXISTS review_table(
		id VARCHAR(50) NOT NULL,
		firstname VARCHAR(255) NOT NULL,
		lastname VARCHAR(255) NOT NULL,
		KEY(id),
		PRIMARY KEY(id))
EOD;

$create=mysqli_query($conn,$sql) or die(mysqli_error());

?>		