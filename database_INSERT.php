<html>
<head>
<title>Connect to Database Server</title>
</head>
<body>

<?php
include "../connection_string.php"; //contains server connection login & database info
//database name: classworkWORKDB

//info from registration form
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$password = $_REQUEST['password'];
$color = $_REQUEST['color'];
$gender = $_REQUEST['gender'];
$subscription = $_REQUEST['subscription'];

//insert into table
//MAKE SURE TABLE NAME "tableTOMTOM" MATCHES YOUR TABLE NAME IN database_connection.php FILE
$insertquery = ("INSERT INTO miguelTABLE VALUES (NULL, '$firstname', '$lastname', '$password', '$color', '$gender', '$subscription')");
$connect->query($insertquery);
	if($connect->connect_error)
	{
	echo "<p>Error inserting info:" . $connect->connect_error;
	}
	else
	{
	echo "<p>Info saved in table!";
	}
?>
<p><a href="database_SELECT.php">View all records</a>
</body>
</html>
