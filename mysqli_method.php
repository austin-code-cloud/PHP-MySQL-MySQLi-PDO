<?php 

/* 

mysqli method syntax 

mysqli_connect(host, username, password, dbname)
------------------------------------------------

DB details: 

host = "localhost"
username = "Okon"
password = "test1010" 
dbname = "ninja pizza"

*/


$dbConnect = mysqli_connect('localhost', 'Okon', 'test1010', 'ninja pizza');

if(!$dbConnect){
    echo 'Connection error: ' . mysqli_connect_error();
} else {
    echo 'Database Connection Successful !!';
}

?>