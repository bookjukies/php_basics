<link rel="stylesheet" href="./../inc/style.css">
<?php
session_start();

$title='login';


require_once('./../inc/config.php');
require_once('./../inc/functions.php');


//checks then type of request sent
if($_SERVER['REQUEST_METHOD']=="POST"){
    //filters user input 
    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    $pwd = $_POST['pwd'];

    if(!$email){
        $status="Enter valid email";
        echo $status;

        die();
    }
}

//authanticates the password and username
if(auth($email,$pwd)){
    $_SESSION['email']=$email;
    //redirects the user to a
    redirect('admin.php');
    die();
}else{
    $status = 'Enter valid crendentails';
}

include('./../inc/header.php');
?>


<div>
<form method="POST">
    <div>
        <label for="email">email: </label>
        <input name="email" id="email"></input>
    </div>
    <div>
        <label for="pwd">Password: </label>
        <input name="pwd" id="pwd"></input>
    </div>
    <div>
        <input type="submit"></input>
    </div>
</form>

</div>



<?php include('./../inc/footer.php');?>