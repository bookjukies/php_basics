<link rel="stylesheet" href="./../inc/style.css">
<?php

$title='Get user input';

include('./../inc/header.php');


$category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT);
$limit = filter_input(INPUT_GET,'limit',FILTER_VALIDATE_INT);

if(!$category){
    $category = 'Enter a positive interger';
}
if(!$limit){
    $limit = 'Enter a positive interger';
}

?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">GET Input</h1>
        </div>
      </div>
      <div class="row">
        Showing category: <?= $category; ?> limit: <?=$limit;?>
      </div>
    </div>
<?php include('./../inc/footer.php');?>