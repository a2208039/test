<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Contador3</title>
    </head>
    <body>
        <?php
            $contador = 0;
            
            $fd = @fopen('counter.txt', 'r');
            if ($fd) {
                $contador = fgets($fd);
                fclose($fd);
            
                $fd2 = @fopen('counter.txt', 'w');
                if ($fd2) {
                    $contador = $contador + 1;
                    fwrite($fd2, $contador);
                    fclose($fd2);
                }
            }
        ?>
        
        <a href="counter.txt" target="_blank"><button>Ver Archivo 'counter.txt'</button></a>
        
    </body>
</html>
