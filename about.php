<?php
    $conn = mysqli_connect('localhost','root');
    if ($conn) {
        echo "Connection Successful";
    }else{
        echo "Connection Failed";
    }

    mysqli_select_db($conn,'website');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $query = "INSERT INTO users (name,email,number) VALUES ('$name','$email','$number')";

    mysqli_query($conn,$query);
    header('Location:index.php#contactus');
?>