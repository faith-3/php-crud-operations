<?php

include 'connection.php';


if (isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = sha1($_POST['password']);
    $gender = $_POST['gender'];

    $sql = "INSERT INTO users (fname,lname,email,password,gender) VALUES ('$first_name' , ' $last_name' , ' $email' , '$password' , '$gender')";

    $result = $conn->query($sql);

    if($result===true){
        echo'New record created successfully!';
    } 
    else {
        echo 'Error:'.$sql.'<br>'.$conn->error;
    }
    $conn->close();
}
?>

<html>

<a class="btn btn-info" href="signup.html"><br><br>Back</a>
<a class="btn btn-info" href="read.php"><br><br>View record from database</a>

</html>

