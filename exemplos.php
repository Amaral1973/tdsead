<html>
    <body>
<?php
    echo '<h3>Números de 1 a 20</h3>';
    echo '<hr/>';
    for($i=1;$i<=20;$i++){
        echo $i.'-';
    }
    echo '<hr/>';
    echo '<h3>Intervalo dos números</h3>';
    echo '<hr/>';
    ?>
    <form action="exemplos.php" method="POST">
        <label>Valor 1</label><br/>
        <input type="number" name="valor1" required/><br/>
        <label>Valor 2</label><br/>
        <input type="number" name="valor2" required/><br/>
        <button type="submit" name="btvai">Vai!!</button>
    </form>
    <?php
        if(isset($_POST['btvai'])){
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            for($i=$valor1;$i<=$valor2;$i++){
                echo $i.'-';
            }
        } else {
            echo "";
        }
        echo '<hr/>';
    ?>
    <h3>Tabuada</h3>
    <hr/>
    <form action="exemplos.php" method="POST">
        <label>Digite um valor</label><br/>
        <input type="number" name="valor" required/><br/>
        <button type="submit" name="btvai2">Vai!!</button>
    </form>
    <?php
        if(isset($_POST['btvai2'])){
            $valor = $_POST['valor'];
            for($i=1;$i<=10;$i++){
                $mult = $valor*$i;
                echo $valor.'X'.$i.'='.$mult.'<br/>';
            }
        } else {
            echo "";
        }
    ?>
    </body>
</html>