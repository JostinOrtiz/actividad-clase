<!DOCTYPE html>
<!--
Ejercicio 8
Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas.
Se pagarán 12 euros por hora.

Creado por: Juan Jose Fernandez Romero
-->
<html>
    <head>
        <title>Ejercicio 4</title>
        <meta charset="UTF-8">
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
            /* Estilos CSS personalizados */
            body {
                background-color: #f8f9fa;
                font-family: 'Arial', sans-serif;
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 20px;
            }
            .container {
                margin-top: 50px;
            }
            .form-group {
                margin-bottom: 15px;
            }
            .form-control {
                border-radius: 0;
            }
            .btn-custom {
                background-color: #007bff;
                color: white;
                border-radius: 0;
                padding: 10px 20px;
                border: none;
            }
            .result {
                margin-top: 20px;
            }
            h3 {
            color: #333;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
 
        </style>
    <body>
        
        <center><h3>Calcular Salario semanal de un trabajador</h3></center>
        <form action="index.php" method="post">
        <center> Horas Trabajadas:
            <br><input type="number" name="horas"><br>
            Horas Extras: 
            <br><input type="number" name="horasExtras"><br>
            Euros por hora ordinaria: 
            <br><input type="number" name="pagaPorHora"><br>
            Euros por hora extra: 
            <br><input type="number" name="pagaPorExtra"><br>
            <br>
            </center>
            <center><input type="submit"  value="Calcular" class="btn btn-dark"></center>
        </form>
        
        <?php
        
        echo "<br><br>";
        
        if (isset ($_POST['horas'], $_POST['horasExtras'], $_POST['pagaPorHora'], $_POST['pagaPorExtra'])) {
        
            $horas = $_POST['horas'];
            $horasExtras = $_POST['horasExtras'];
            $pagaPorHora = $_POST['pagaPorHora'];
            $pagaPorExtra = $_POST['pagaPorExtra'];

            $resultado = ($horas * $pagaPorHora) + ($pagaPorExtra * $horasExtras);

          echo '<html> <center>';  echo "El salario total es: ", $resultado; echo '</center><html>';
        }
        
        ?>
    </body>
</html>