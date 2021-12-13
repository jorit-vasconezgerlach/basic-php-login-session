<?php

passwordProof();

function passwordProof() {
        session_start();
        $_SESSION['passwordError']=0;
        if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['username']=='admin' && $_SESSION['password']=='test123') {
            header('Location: ../');
        } else {
            if(isset($_POST['username']) && isset($_POST['password'])) {
                $pUsername = $_POST['username'];
                $pPassword = $_POST['password'];
                if($_POST['username']=='admin' && $_POST['password']=='test123') {
                    $_SESSION['username']=$pUsername;
                    $_SESSION['password']=$pPassword;
                    header('Location: ../');
                } else {
                    $_SESSION['passwordError']=1;
                }
            }
        }
    }

?>
<form action="." method="POST">
    <input name="username" type="text" placeholder="Name">
    <input name="password" type="password" placeholder="Password">
    <input type="submit" value="Log In">
</form>
<b>username </b>admin<br>
<b>password </b>test123<br>
<a href="../">main (do demonstrate redirection)</a>
<div class="errorBox"><p><?php if($_SESSION['passwordError']==1){echo 'Wrong Password';} ?></p></div>