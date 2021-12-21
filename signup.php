<?php
    $con = mysqli_connect('localhost','root','','capstone'); //hostname, username, password and database name
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check_data = mysqli_query($con,"SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail'");
    $check = mysqli_num_rows($check_data);

    //can I debug my code?
    //why are we sending $con every time we want to query the db?

    if($check > 0){
        header("Location:http://localhost/Capstone_3_FullStack/homepage.html");
    }else{
        $input = mysqli_query($con,"INSERT INTO userdata (firstname,lastname,phoneoremail,password) 
                                    VALUES('$firstname','$lastname','$phoneoremail','$password')");
        if($input){
            header("Location:http://localhost/Capstone_3_FullStack/mainpage.html");
        }
    }

?>