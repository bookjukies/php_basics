<?php
$title = "loops";
$current = "for loop";
$kingNames = ['Mkhumbi','Justice','Ndumiso'];
        
$short = [
    "Ice"=>"Justice",
    "Ndu"=>"Ndumiso",
    "Debo"=> "Bongani"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title><?=$title;?></title>
</head>
<body>
    <h1 class="upper"><?=$current;?></h1>

    <table >
    <?php
    foreach($short as $key => $name){
        echo "<tr><td>$key</td><td>$name</td></tr>";
    }
    ?>
       
    </table>
</body>
</html>