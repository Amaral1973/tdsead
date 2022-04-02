<html>

<body>
    <form action="exer4.php" method="POST">
        <label>Digite seu salário</label><br />
        <input type="number" name="salario" required /><br />
        <button type="submit" name="btvai">Vai!!</button>
    </form>
    <?php
    if (isset($_POST['btvai'])) {
        $a = $_POST['salario'];
        if ($a <= 280) :
            $salario = $a + ($a / 100 * 20);
            $aumento = $salario - $a;
            echo 'Seu salário era <b>R$ ' . $a . '</b><br/>';
            echo 'Seu aumento percentual foi de <b>20%</b><br/>';
            echo 'Seu aumento foi de <b>R$ ' . $aumento . '</b><br/>';
            echo 'Seu novo salário é de <b>R$ ' . $salario . '</b><br/>';
        elseif ($a>=280 && $a<=700) :
            $salario = $a + ($a / 100 * 15);
            $aumento = $salario - $a;
            echo 'Seu salário era <b>R$ ' . $a . '</b><br/>';
            echo 'Seu aumento percentual foi de <b>15%</b><br/>';
            echo 'Seu aumento foi de <b>R$ ' . $aumento . '</b><br/>';
            echo 'Seu novo salário é de <b>R$ ' . $salario . '</b><br/>';
        elseif ($a>=700 && $a<=1500) :
            $salario = $a + ($a / 100 * 10);
            $aumento = $salario - $a;
            echo 'Seu salário era <b>R$ ' . $a . '</b><br/>';
            echo 'Seu aumento percentual foi de <b>10%</b><br/>';
            echo 'Seu aumento foi de <b>R$ ' . $aumento . '</b><br/>';
            echo 'Seu novo salário é de <b>R$ ' . $salario . '</b><br/>';
        else :
            $salario = $a + ($a / 100 * 5);
            $aumento = $salario - $a;
            echo 'Seu salário era <b>R$ ' . $a . '</b><br/>';
            echo 'Seu aumento percentual foi de <b>5%</b><br/>';
            echo 'Seu aumento foi de <b>R$ ' . $aumento . '</b><br/>';
            echo 'Seu novo salário é de <b>R$ ' . $salario . '</b><br/>';
        endif;
    } else {
        echo "";
    }
    ?>
</body>

</html>