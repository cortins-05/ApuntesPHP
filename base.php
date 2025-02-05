<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base</title>
</head>
<body>
    <h1>Mi primer fichero PHP</h1>
    <!-- Para añadir tus scripts de PHP debes usar <?php ?> o <? ?> (esta última debes activarla en la configuración). -->
    <?php 
        echo '<p>Y funciona perfecto!</p>' //Aparecera donde se ponga el script;
    ?>
    
    <?='Hola Mundo' //Atajo para echo. El navegador no entiende de PHP, necesitaras de un servidor que lo entienda?>
    
    <?php //Saltos de linea
    <<<END
    En un lugar de la mancha
    de cuyo nombre no quiero acordarme...
    END;?>

    <?php
        echo 'John Lenon' . ' y ' . 'Paul McCartney.'; //Se deben usar ( . ) para concadenar.
    ?>

</body>
</html>