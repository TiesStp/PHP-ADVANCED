<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php
function rekenUit($a, $b, $c){
    $abc=$a + $b + $c;
    return $abc;
}
echo "Als ik de getallen 4, 2 en 9 bij elkaar optel, is de uitkomst"." " .rekenUit(4,2,9);
echo "<br>";
echo "Als ik de getallen 1, 2 en 3 bij elkaar optel, is de uitkomst"." " .rekenUit(1,2,3);
echo "<br>";
echo "Als ik de getallen 10, 11 en 12 bij elkaar optel, is de uitkomst"." " .rekenUit(10,11,12);

?>
    
</body>
</html>