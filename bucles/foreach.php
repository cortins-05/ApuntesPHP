<?php
$animalesFantasticos = ['fenix', 'dragon', 'grifo', 'pegaso', 'cerbero'];
foreach ($animalesFantasticos as $animal) {
    echo $animal . ' ';
};
$zara = [
    123 => [
      'nombre' => 'Camisa a cuadros',
      'precio' => 29.95,
      'sexo' => 'Hombre'
    ],
    234 => [
      'nombre' => 'Falda manga',
      'precio' => 19.95,
      'sexo' => 'Mujer'
    ],
    345 => [
      'nombre' => 'Bolso minúsculo',
      'precio' => 50,
      'sexo' => 'Mujer'
    ]
];
foreach ($zara as $prenda) {
    var_dump($prenda);
};
?>

<html>
    <body>
        <?php foreach(range(1,5) as $num):?>
            <p><?php echo $num; ?></p>
        <?php endforeach; ?>
    </body>
</html>