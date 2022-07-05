<?php

// authanticats password and email
function auth($email,$pwd){
    return $email ==  USERNAME && $pwd == PWD;
}


//redirects to pages
function redirect($url){
    header("Location: $url");
}