<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    # PERULANGAN
    # FOR, WHILE, DO WHILE, FOREACH

    // for($i = 1; $i <= 10; $i++){
    //     echo "Perulangan ke-$i <br>";
    // }

    // $i = 1;
    // while($i <= 10){
    //     echo "Perulangan ke-$i <br>";
    //     $i++;
    // }

    // $i = 1;
    // do{
    //     echo "Perulangan ke-$i <br>";
    //     $i++;
    // }while($i <= 10);

    $angka = [10,20,30,40,50];
    foreach($angka as $a){
        echo "Angka: $a <br>";
    }

    ?>
</body>
</html>