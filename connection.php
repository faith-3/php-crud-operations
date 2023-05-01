<?php

$servername='localhost';
$dbname='student_db';
$username='root';
$password='';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo"Connection failed!";
}else{
    echo"Connection established!";
}
?>