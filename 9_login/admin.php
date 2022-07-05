<?php
    session_start();
    $user = $_SESSION['email'];
?>
<h1>welcome: <?=$user;?></h1>