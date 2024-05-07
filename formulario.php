<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hola.php">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

.calculator-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.calculator-form input[type="number"],
.calculator-form input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.calculator-form input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.calculator-form input[type="submit"]:hover {
    background-color: #0056b3;
}

.calculator-form p {
    margin-top: 20px;
    text-align: center;
    color: #666;
}

    </style>
</head>
<body>
<?php
do {
?>
    <form action="formulario.php" method="post">
        <input type="number" name="a" id="" placeholder="escriba un numero"><br><br>
        <input type="number" name="b" placeholder="escriba un segundo numero"><br><br>
        <input type="text" name="opcion" placeholder="escriba una opcion de opreacion"><br><br>
        <input type="text" name="res"><br><br>
        <input type="text" name="devolver" placeholder="escriba 1 para devolver">
        <input type="submit" value="calcular" name="calcualar">
    </form>
<?php
    echo"\nJostin Ortiz";
    if (empty($_POST['calcualar']) && empty($_POST['a']) && empty($_POST['b'])) {
    } else {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $opcion = $_POST['opcion'];
        $cal = $_POST['calcualar'];
        $devolver = $_POST['devolver'];

        switch ($opcion) {
            case '+':
                $suma = fn($a, $b) => $a + $b;
                echo '<script>document.getElementsByName("res")[0].value = "'. $suma($a, $b) .'";</script>';
                break;
            case '-':
                $resta = fn($a, $b) => $a - $b;
                echo '<script>document.getElementsByName("res")[0].value = "'. $resta($a, $b) .'";</script>';
                break;
            case '*':
                $mult = fn($a, $b) => $a * $b;
                echo '<script>document.getElementsByName("res")[0].value = "'. $mult($a, $b) .'";</script>';
                break;
            case '/':
                $div = fn($a, $b) => $a / $b;
                echo '<script>document.getElementsByName("res")[0].value = "'. $div($a, $b) .'";</script>';
                break;
            default: 
                break;
        }
    }
    
} while ($devolver == 1);
?>
</body>
</html>
