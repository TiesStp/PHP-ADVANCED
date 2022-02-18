
<!DOCTYPE html>
<html>

<style>
    
body {
  color: <?= $_POST["tekstkleur"] ?>;
  background-color: <?= $_POST["achtergrond-color"] ?>;
}

table,tr,td{
    border: <?= $_POST['border']?>px solid black;
    padding:<?= $_POST['padding']?>px;
}

</style>
<center>'
<table>
<tr>
<th>key</th>
<th>value</th>
</tr>

<?php function maakRij($mijngegeves1,$value){
     echo "<tr>
     <td>".$mijngegeves1."</td>
     <td>".$value."</td>
     </tr> ";
}
?>

<?php

$mijngegevens=array(
    "Naam"=> "Ties Stapper",
    "Leefdtijd"=> 16,
    "Sport"=> "Voetbal",
    "Woonplaats"=>"Amstelveen",
    "Hobby's"=> "Voetbal/gamen");
    foreach($mijngegevens as $mijngegeves1 => $value){
        maakRij($mijngegeves1,$value);
    }

 ?>
</table>

</center>
</body>
</html>