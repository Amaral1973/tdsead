<html>
    <body>
        <form action="exer2.php" method="POST">
            <label>Temperatura em Fahrenheit</label><br/>
            <input type="number" name="fa" required/><br/>
            <button type="submit" name="btvai">Vai!!</button>
        </form>
<?php
    if(isset($_POST['btvai'])){
        $a = $_POST['fa'];
        $celsius = (5*($a-32)/9);
        echo '<br/>A temperatura em Celsius é: <b>'.number_format($celsius,2).'º</b>';
    } else {
        echo "";
    }
?>
    </body>
</html>