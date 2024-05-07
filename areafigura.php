<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="calculo.php">
</head>
<body>
<form method="POST" action="areafigura.php">
    <input type="radio" name="figura" value="circulo" checked>circulo<br/>
    <input type="radio" name="figura" value="cuadrado">Cuadrado<br/>
    <input type="radio" name="figura" value="triangulo">Triangulo<br/>
    <br/>
    <label for="radio">Radio</label>
    <input type="number" id="radio" name="radio">
    <br/>
    <label for="lado">Lado</label>
    <input type="number" id="lado" name="lado">
    <br/>
    <label for="base">Base</label>
    <input type="number" id="base" name="base">
    <br/>
    <label for="altura">Altura</label>
    <input type="number" id="altura" name="altura">
    <br/>
    <input type="submit">

</form>
</body>
</html>
<?php 
$radio = $_POST['radio'];
$base = $_POST['base'];
$altura = $_POST['altura'];
$lado = $_POST['lado'];
$figura = $_POST['figura'];

    $circulo = fn($radio)=> ($radio ** 2) * M_PI;
    $cuadrado = fn($lado) => $lado * $lado;
    $triangulo = fn($base, $altura) =>($base * $altura) / 2 ;

    switch ($figura) {
        case 'circulo':
            echo $circulo($radio);  
            break;
        case 'cuadrado':
            echo $cuadrado($lado);

            break;
        case 'triangulo':
            echo $triangulo($base, $altura);
            break;
        
        default:
            # code...
            break;
    }
?>

