<?php 

    $con = mysqli_connect('localhost','root','','capstone');
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check = mysqli_query($con,"UPDATE userdata SET password = '$password'WHERE phonoremail = '$phoneoremail'");
    

    if($check > 0){
       echo "Something went wrong :(. Please try again later.";
    }else{
       header("Location:http://localhost/Capstone_3_FullStack/mainpage.html");
};



?>