<?php
    $connection = mysqli_connect("localhost", "root", "", "facebookclone");
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $checkdata = mysqli_query($connection, "SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail'");
    $check = mysqli_num_rows($checkdata);


    if($check > 0){
        echo "Email already exists!";
    } else{
        $input = mysqli_query($connection, "INSERT INTO userdata(id, firstname, lastname, phoneoremail, password) VALUE ('$id','$firstname', '$lastname', '$phoneoremail', '$password' )");
        if($input){
            echo "Signup Successful";
        } else{
            echo "Error occured :(";
        }
    }
?>