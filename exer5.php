<html>

<body>
    <form action="exer5.php" method="POST">
        <label>Digite 1º nota</label><br />
        <input type="number" name="nota1" required /><br />
        <label>Digite 2º nota</label><br />
        <input type="number" name="nota2" required /><br />
        <button type="submit" name="btvai">Vai!!</button>
    </form>
    <?php
    if (isset($_POST['btvai'])) {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $media = ($nota1+$nota2)/2;
        echo '<br/>1º Nota: '.$nota1;
        echo '<br/>2º Nota: '.$nota2;
        echo '<hr/>';
        echo '<h3>Resultados</h3><br/>';
        if ($media < 4) :
            echo 'Sua média foi: <b>'.$media.'</b><br/>';
            echo 'Seu conceito foi <b>E</b><br/>';
            echo 'Você está <b>REPROVADO</b><br/>';
        elseif ($media>=4 && $media<6) :
            echo 'Sua média foi: <b>'.$media.'</b><br/>';
            echo 'Seu conceito foi <b>D</b><br/>';
            echo 'Você está <b>REPROVADO</b><br/>';
        elseif ($media>=6 && $media<=7.5) :
            echo 'Sua média foi: <b>'.$media.'</b><br/>';
            echo 'Seu conceito foi <b>C</b><br/>';
            echo 'Você está <b>APROVADO</b><br/>';
        elseif ($media>=7.5 && $media<=9) :
            echo 'Sua média foi: <b>'.$media.'</b><br/>';
            echo 'Seu conceito foi <b>B</b><br/>';
            echo 'Você está <b>APROVADO</b><br/>';
        else :
            echo 'Sua média foi: <b>'.$media.'</b><br/>';
            echo 'Seu conceito foi <b>A</b><br/>';
            echo 'Você está <b>APROVADO</b><br/>';
        endif;
    } else {
        echo "";
    }
    ?>
</body>

</html>