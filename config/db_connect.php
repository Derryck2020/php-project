<?php 
//connecting to database
$conn = mysqli_connect('localhost', 'derryck', 'has2020gone', 'iPhones-stores');

//checking connection 
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}
?>