<?php
    echo 'Laço FOR';
    echo '<hr/>';
    for($i=0;$i<10;$i++){
        //$i++ $i=$i+1
        //código que irá repetir
        echo $i;
    }
    echo '<hr/>';
    echo 'Laço WHILE';
    echo '<hr/>';
    $contador = 0;
    while($contador<10){
        //código da repetição
        echo $contador;
        $contador++;
    }
    echo '<hr/>';
    echo 'Laço FOREACH';
    echo '<hr/>';
    $vetor = ["Um","Dois","Tres"];
    foreach($vetor as $item){
        echo $item.'<br/>';
    }
?>