<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment-4</title>
</head>
<body>

<?php
$marks = 16;
$name = 'Farah';

$rel = '';
if($name =='Aditi' || $name =='Farah'|| $name =='Tarannam' ||$name =='Afrin'){

    $rel = "Apu";
}else{
    $rel = "Vaiya";

}

if ($marks >=40){

    echo $name ."$rel apni pass korcen";
}
else{

    echo $name."$rel you got failed";
}


?>


</body>
</html>