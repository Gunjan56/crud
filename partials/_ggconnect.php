<?php
// Connecting to the database
$insert = false;
$update = false;
$delete = false;
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'notes';

// Create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not succesful
if (!$conn) {
    die('Sorry we failed to connect: '. mysqli_connect_error());
}
?>