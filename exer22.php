<?php
    echo '<h3>Números pares até 80</h3>';
    echo '<hr/>';
    for($i=1;$i<=81;$i++){
        if($i%2 == 0){
            echo $i.'-';
        }
    }
?>