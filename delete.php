<?php 
    $con = mysqli_connect('localhost' ,'root', '','facebookclose');
    $phoneoremail = $_POST('phoneoremail')
    $password = $_POST('password');

    $check = msqli_query($con,"DELETE FROM userdata WHERE phoneoremail = '$phoneoremail' ");

    if($check > 0){
        header("Location:http://localhost/facebookclone/mainpage.html");
    }
?>