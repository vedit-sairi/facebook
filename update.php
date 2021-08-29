<?php 
    $con = mysqli_connect('localhost' ,'root', '','facebookclose');
    $phoneoremail = $_POST('phoneoremail')
    $password = $_POST('password');

    $check = msqli_query($con,"UPDATE userdata SET password = '$password' WHERE phoneoremail = '$phoneoremail' and ");

    if($check > 0){
        header("Location:http://localhost/facebookclone");
    }
?>