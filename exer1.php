<html>
    <body>
        <form action="exer1.php" method="POST">
            <label>Distancia percorrida (Km)</label><br/>
            <input type="number" name="km" required/><br/>
            <label>Litros consumidos</label><br/>
            <input type="number" name="litros" required/><br/><br/>
            <button type="submit" name="btvai">Vai!!</button>
        </form>
<?php
    if(isset($_POST['btvai'])){
        $a = $_POST['km'];
        $b = $_POST['litros'];
        $media = $a / $b;
        echo '<br/>O consumo média de combústivel foi: <b>'.number_format($media,2).' Km/l</b>';
    } else {
        echo "";
    }
?>
    </body>
</html>