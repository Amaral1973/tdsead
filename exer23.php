<?php
    echo '<h3>Intervalo de Números</h3>';
    echo '<hr/>';
    $inicio = 20;
    $fim = 30;
    if($inicio < $fim){
        for($i=$inicio;$i<=$fim;$i++){
            echo $i.'-';
        }
    } else {
        for($i=$inicio;$i>=$fim;$i--){
            echo $i.'-';
        }
    }
?>