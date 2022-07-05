<link rel="stylesheet" href="./../inc/style.css">
<?php
session_start();

$title='Post user input';

include('./../inc/header.php');
require_once('./../5_functions/index.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    

    if(!$email){
        $status="Enter valid email";
    }else{
        $status = "sent";
    }
}


?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">POST Input</h1>
        </div>
      </div>
        <form class="form"action="" method="POST">
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div>
                <label for="pwd">Password</label>
                <input type="password" name="pwd" id="pwd">
            </div>
            <div>
                <input type="submit" name="submit" id="submit">

            </div>
        </form>
    </div>

    <div>
        <?php echo "$status";?>
    </div>
<?php include('./../inc/footer.php');?>