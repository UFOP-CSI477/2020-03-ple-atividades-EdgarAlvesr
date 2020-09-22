<?php

namespace App\Views;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estados</title>

    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    
</head>
<body>
    <div class="container m-3">
        <!-- <div class="row">
            <a href="estadosViewInsert.php">Inserir estado</a>
        </div> -->
        
        <div class="row">
            <div class="col-sm-6 table-responsive">
                <table class="table table-bordered table-hover table-striped text-center">
                    <caption>Lista de estados</caption>

                    <thead class="thead-dark">
                        <tr>
                            <td>ID</td>
                            <td>Estado</td>
                            <td>Sigla</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while($estado = $estados->fetch()){
                                echo "<tr>\n";
                                echo "<td>". $estado['id'] ."</td>\n";
                                echo "<td>". $estado['nome'] ."</td>\n";
                                echo "<td>". $estado['sigla'] ."</td>\n";
                                echo "</tr>\n";
                            }
                        ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</body>
</html>
