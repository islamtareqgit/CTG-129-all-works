<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>area, square and circle function</title>
</head>
<body>

<?php


function area_info($area, $width, $length, $radius){

    if ($area == "Rectangle"){

        echo "The result of $area  is<hr>". $width * $length. "<br>";


    }
    elseif ($area == "Square"){

        echo "The result of $area is<hr>". $length * $length . "<br>";
    }
    elseif ($area == "Circle"){

        echo "The result of $area is<hr>". 3.1416 * $radius * $radius. "<br>";

    }else{

        echo "ERROR";
    }


}

area_info("Rectangle", 10, 12, 12);
area_info("Circle", 10, 12, 12);
area_info("Square", 10, 12, 12);

?>
</body>
</html>
