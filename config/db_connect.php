<?php 

// connect to database
$conn = mysqli_connect('localhost', 'admin2', 'test1234', 'pizza_builder');

// check connection
if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

?>