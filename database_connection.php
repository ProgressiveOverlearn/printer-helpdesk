<html>
<head>
<title>Create Table in Database</title>
</head>
<body>

<?php
include "../connection_string.php"; //contains server connection login & database info
//database name: classworkWORKDB

// Create table
$tableNAME = "miguelTABLE";//replace tableTOMTOM with your own unique name
$createTABLE = "CREATE TABLE ".$tableNAME." 
(
ID SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstname varchar(40),
lastname varchar(40),
password varchar(40),
color varchar(10),
gender varchar(10),
subscription varchar(40)
)"
;
// Execute query
$connect->query($createTABLE);
	if($connect->connect_error)
	{
	echo "<p>Error creating table:" . $connect->connect_error;
	}
	else
	{
	echo "<p>",$tableNAME," table created!";
	}
?>
</body>
</html>
