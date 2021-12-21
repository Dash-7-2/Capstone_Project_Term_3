<?php
    $con = mysqli_connect('localhost','root','','capstone');
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check_data = mysqli_query($con,"SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail' and password = '$password'");
    $check = mysqli_num_rows($check_data);

    if($check > 0) {
        header("Location:http://localhost/Capstone_3_FullStack/mainpage.html");
    } else {
        header("Location:http://localhost/Capstone_3_FullStack/homepage.html");
    }

?>