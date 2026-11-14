<html>
<head>
<title>Select from Database</title>
</head>
<body>
<table border="1px" cellpadding="10px" cellspacing="5px" style="border-collapse:collapse">
<tr><td>ID</td><td>First name</td><td>Last name</td><td>Password</td><td>Color</td><td>Gender</td><td>Subscription</td></tr>
<?php
include "../connection_string.php"; //contains server connection login & database info
//database name: classworkWORKDB
?>

<h2>Database list:</h2> 
<hr>
<?php
//select data and display in the browser
$result1 = ("SELECT * FROM miguelTABLE ORDER BY ID");//MAKE SURE TABLE NAME "tableTOMTOM" MATCHES YOUR TABLE NAME IN database_connection.php FILE
$result = $connect->query($result1);
while($row = $result->fetch_assoc())
  {  
  echo "
  <tr>
  <td><a href='database_SELECT_SingleRecord.php?ID=".$row['ID']."'>" . $row['ID'] . "</a></td>
  <td>" . $row['firstname'] . "</td>
  <td>" . $row['lastname'] . "</td>
  <td>" . $row['password'] . "</td>
  <td> " . $row['color'] . "</td>
  <td> " . $row['gender'] . "</td> 
  <td>" . $row['subscription'] . "</td>
  <tr>";
  }
?>
</table>
</body>
</html>
