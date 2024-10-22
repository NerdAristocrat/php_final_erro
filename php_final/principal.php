<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="principal.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <?php
            $livros = array("O Hobbit", "Nárnia");
            $datas_inicio = array(date('25/08/2024'), date('25/07/2019'));
            $datas_termino = array(date('25/12/2024'), date('12/04/2021'));
            $paginas_lidas = array(677, 1075);
            $paginas_media = array();
            $i = 0;
            $j = 0;

            foreach($livros as $a)
            {
                $i = $i+1;
            }
    /*
            for($j=0; $j<$i; $j++)
            {
                if($datas_termino == 0)
                {   
                    $comeco = $datas_inicio[$j];
                    $atual = new DateTime();
                    $dias = date_diff($atual [$comeco]);
                    $paginas_media[$j] = $paginas_lidas[$j]/($dias+1);
                }

                else
                {
                    $comeco1 = $datas_inicio[$j];
                    $fim = $datas_termino[$j];
                    $dias = date_diff($fim [$comeco1]);
                    $paginas_media[$j] = $paginas_lidas[$j]/($dias+1);
                }
            }
    */
            if($i == 0)
            {
                echo "Acervo vazio! Vamos começar?";
            }

            else
            {
                for($j=0; $j<$i; $j++)
                {
                    echo "Livro: $livros[$j]<br>";
                    echo "Início: $datas_inicio[$j]<br>";
                    echo "Término: $datas_termino[$j]<br>";
                    echo "Páginas lidas: $paginas_lidas[$j]<br>";
                    /*echo "Págins por dia: $paginas_media[$j]<br><br><br><br>";*/

                    if($j != $i-1)
                    {
                        echo "<br><br><br>";
                    }
                }
            }
        
        ?>
    </div>
</body>
</html>