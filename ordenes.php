
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenamiento</title>
</head>
<body>
    
</body>
</html>
<?php
$nums=[7,5,3,4,2,1,6,9];

//INSERCION
for($i=0;$i<count($nums);$i++){//Evaluar posiciones
    $auxi=$nums[$i];
    for($pos=$i-1;$pos>=0 && $nums[$pos]>$auxi;$pos-- ){
        $nums[$pos+1]=$nums[$pos];
    }
    $nums[$pos+1]=$auxi;
}
//impresion
//echo "Ascendente: ";
for($i=0;$i<count($nums);$i++){
    echo $nums[$i]." ";
}

//echo "<br>Descendente: ";
for($i=count($nums)-1;$i>=0;$i--){
    echo $nums[$i]." ";
}
?>