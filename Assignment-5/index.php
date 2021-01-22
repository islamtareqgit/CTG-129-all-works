<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment-5</title>
</head>
<body>

<?php

$marks = 36;
$name = 'Aditi';
$rel = '';

switch ($name){

    case 'Aditi':
        $rel = 'Apu';
        break;

    case 'Farah':
        $rel = 'Apu';
        break;

    case 'Afrin':
        $rel = 'Apu';
        break;

    case 'Tarannam':
        $rel = 'Apu';
        break;

    default :
        $rel = 'Vaya';
        break;
}

if ($marks>=33){

    echo $name."<span style='color: green;'><span style='color: green;'>$rel</span> you got pass</span>";
} else{
    echo $name."$rel you got fail";

}


?>
<?php

$i =10000;
while ($i<10050){

    echo "The value of i = $i <br>";
    $i++;
}



?>
<?php
$i =10000;
while ($i>9950){
    echo "The value of i = $i <br>";
    $i--;

}




?>

</body>
</html>