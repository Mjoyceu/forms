<?php
$mye = "ubanaikuru72@gmail.com";
$myp = "12345";
if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($email == $mye and $password == $myp){
       
        if(isset($_POST['remember'])){
            setcookie ('email', $email, time () + 60 *60);
            setcookie ('password', $password, time () + 60 *60);
        }
        session_start();
        $_SESSION['email'] = $email;
        header("location:file.php");

    }else{
        echo "Password or Email invalid. <br> click to <a href ='index.php'> try again</a>";
    }

}else{ 
    header ("location:index.php");
}
?>