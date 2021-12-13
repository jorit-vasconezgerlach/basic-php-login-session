<?php
    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['username']=='admin' && $_SESSION['password']=='test123') {
?>
Hidden Content<br>
<a href="logout">lougout</a><br>
<a href="login">login (do demonstrate redirection)</a>
<?php
    } else {
        header('Location: login');
    }
?>