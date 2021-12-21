<?php 

    $con = mysqli_connect('localhost','root','','capstone');

    $phoneoremail = $_POST['phoneoremail'];

    $check = mysqli_query($con,"DELETE FROM userdata WHERE phonoremail = '$phoneoremail'");
    

    if($check > 0){
        header("Location:http://localhost/Capstone_3_FullStack/mainpage.html");
    }else{
        header("Location:http://localhost/Capstone_3_FullStack/mainpage.html");
        echo "Something went wrong";
    }



?>