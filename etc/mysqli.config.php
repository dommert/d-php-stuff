<?PHP
// MYSQLi Database Info
//

// Database Information
$db_host = 'localhost';
$db_user = '';
$db_passwd = '';
$db_name = '';

//

// Sample Code
/*
Connecting:
 $mysql = new mysqli($db_host, $db_user, $db_passwd, $db_name);
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}

Query:
/* Create the prepared statement */
if ($stmt = $mysqli->prepare("INSERT INTO CodeCall (FirstName, LastName) values (?, ?)")) {

/* Bind our params */
$stmt->bind_param('ss', $firstName, $lastName);

/* Set our params */
$firstName = "Jordan";
$lastName = "DeLozier";

/* Execute the prepared Statement */
$stmt->execute();

/* Echo results */
echo "Inserted {$lastName},{$firstName} into database\n";

/* Set our params for second query */
$firstName = "John";
$lastName = "Ciacia";

/* Execute second Query */
$stmt->execute();

echo "Inserted {$lastName},{$firstName} into database\n";

/* Close the statement */
$stmt->close();
}
else {
/* Error */
printf("Prepared Statement Error: %s\n", $mysqli->error);
}

*/


?>
