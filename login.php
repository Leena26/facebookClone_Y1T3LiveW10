<?php
    $connection = mysqli_connect("localhost", "root", "", "facebookclone");
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $checkdata = mysqli_query($connection, "SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail' AND password = '$password'");
    $check = mysqli_num_rows($checkdata);

    if($check > 0){
        echo "Login successful!";
    } else{
        echo "Error occurred";
    }

?>