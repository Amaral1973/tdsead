<html>
    <body>
        <form action="exer3.php" method="POST">
            <label>Digite um valor</label><br/>
            <input type="number" name="valor" required/><br/>
            <button type="submit" name="btvai">Vai!!</button>
        </form>
<?php
    if(isset($_POST['btvai'])){
        $a = $_POST['valor']%2;
        if($a == 0){
            echo '<br/>O número é par!';
        } else {
            echo '<br/>O número é impar!';
        }
    } else {
        echo "";
    }
?>
    </body>
</html>