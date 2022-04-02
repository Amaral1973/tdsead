<html>
    <body>
        <h3>Preço com desconto</h3>
        <hr/>
        <form action="exer24.php" method="POST">
            <label>Valor do 1º Produto</label><br/>
            <input type="number" name="prod1" required/><br/>
            <label>Valor do 2º Produto</label><br/>
            <input type="number" name="prod2" required/><br/>
            <button type="submit" name="btvai">Vai!!!</button>
        </form>
        <?php
            if(isset($_POST['btvai'])){
                $prod1 = $_POST['prod1'];
                $prod2 = $_POST['prod2'];
                $desc1 = $prod1 - ($prod1/100*8);
                $desc2 = $prod2 - ($prod2/100*11);
                $soma = $desc1+$desc2;
                echo '<b>Produto 1</b> - Preço R$ '.$prod1.' - Preço com desconto R$ '.number_format($desc1,2).'<br/>';
                echo '<b>Produto 2</b> - Preço R$ '.$prod2.' - Preço com desconto R$ '.number_format($desc2,2).'<br/>';
                echo '<b>Total da compra R$ </b>'.number_format($soma,2);
            } else {
                echo "";
            }
        ?>
    </body>
</html>