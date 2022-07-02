<?php
//include
include('./../inc/header.php');
$title= "functions";

//You can not call a global var inside a function (you have to use the globa flag insid the function body) 
$test = "This is a global var";

//Argumentless function
function sum(){
    echo 1+2;
}

//function with arguments 
function add($a, $b){
    echo $a + $b;
}

function test (){
    global $test;

    return $test;
}
//the use key word is used to scope funcion parametaer inside a nested function body
//can only be used with unnamed functions 
function theuse($a){
$b = function()use($a){
        return $a;
    };

    echo $b();
}
?>


    <p>1 + 2 is <?= sum();?></p>

    <h1>Function with arguments</h1>
    <p>1 + 2 is <?= add(1,2);?></p>

    <h1><?=test();?></h1>
    <h1><?=theuse(5);?></h1>
</body>
</html>