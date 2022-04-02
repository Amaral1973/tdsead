<html>
    <body>
        <h3>Intervalo de números ao cubo</h3>
        <hr/>
        <form action="exer25.php" method="POST">
            <label>Digite um número</label><br/>
            <input type="number" name="numero" required/><br/>
            <button type="submit" name="btvai">Vai!!!</button>
        </form>
        <?php
            if(isset($_POST['btvai'])){
                $numero = $_POST['numero'];
                $cubo = pow($numero,3);
                for($i=$numero;$i<=$cubo;$i++){
                    echo $i.'-';
                }
            } else {
                echo "";
            }
        ?>
    </body>
</html>