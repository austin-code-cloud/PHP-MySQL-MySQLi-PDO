<?php 

/* 

mysqli method syntax 

PDO("mysql:host=$servername;dbname=myDB", $username, $password)
------------------------------------------------

DB details:

host = "localhost"
username = "Okon"
password = "test1010" 
dbname = "ninja pizza"

*/

try {
$dbConnect = new PDO("mysql: host='localhost'; dbname= 'ninja pizza'", 'Okon', 'test1010');

$dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Database Connection Successful !!";

} catch (PDOException $e) {
    echo 'Connection error: ' . $e -> getMessage();
}
