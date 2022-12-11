<?php
    //var_dump($_POST);

    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $pwd=$_POST['pwd'];


    function receiveData($name,$email,$mobile,$pwd){
        echo ($name."\n\n\n"); 
        echo ($email."\n\n\n");
        echo ($mobile."\n\n\n");
        echo ($pwd);


    }
    receiveData($name,$email,$mobile,$pwd);

?>
