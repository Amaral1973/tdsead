<html>
    <body>
        <form action="index.php" method="POST">
            <label>Valor 1</label><br/>
            <input type="number" name="valor1" required/><br/>
            <label>Valor 2</label><br/>
            <input type="number" name="valor2" required/><br/>
            <button type="submit" name="btvai">Vai!</button>
        </form>
<?php
    if(isset($_POST['btvai'])){
        $a = $_POST['valor1'];
        $b = $_POST['valor2'];
        $soma = $a + $b;
        echo '<br/>A soma dos valores foi: '.$soma;
    } else {
        echo "";
    }
?>
    </body>
</html>