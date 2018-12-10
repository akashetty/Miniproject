<?php
$servername = "localhost";
$username = "root";
$password = "user123";
$dbname = "miniproject";

$db = new mysqli($servername, $username, $password, $dbname);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

/*$sql = "insert into student (USN, 6thSemester, 5thSemester, 4thSemester) values('4sf15cs002','6.23','6.56','6.69')";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}*/

#$db->close();
?> 
