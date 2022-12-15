<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo php</title>
</head>
<body>
    <?php
        echo "<h2> TABLE DE MULTIPLICATION WHILE(tant que)</h2> <br>";


        $nombre=1;
        $prod=1;
        $i=0;
        while($i<=10){
            $prod=$nombre*$i;
            echo $nombre . 'x' .$i. '=' .$prod. '<br>';
            $i++;
        }


        echo "<h2> TABLE DE MULTIPLICATION FOR(pour)</h2> <br>";

        $nombre=2;
        $prod=1;

        for($i=0; $i<=10; $i++){
            $prod=$nombre*$i;
            echo$nombre. 'x' .$i. '=' .$prod. '<br>';
        }




    ?>
</body>
</html>