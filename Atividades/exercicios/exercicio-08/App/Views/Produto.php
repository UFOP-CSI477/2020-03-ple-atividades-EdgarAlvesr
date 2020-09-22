<?php
namespace App\Views;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>

    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    
</head>
<body>
    <div class="container m-3">
        <!-- <div class="row">
            <a href="produtosViewInsert.php">Inserir produto</a>
        </div> -->
        
        <div class="row">
            <div class="col-sm-6 table-responsive">
                <table class="table table-bordered table-hover table-striped text-center">
                    <caption>Lista de produtos</caption>

                    <thead class="thead-dark">
                        <tr>
                            <td>ID</td>
                            <td>Produto</td>
                            <td>Unidade de Medida</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while($produto = $produtos->fetch()){
                                echo "<tr>\n";
                                echo "<td>". $produto['id'] ."</td>\n";
                                echo "<td>". $produto['nome'] ."</td>\n";
                                echo "<td>". $produto['um'] ."</td>\n";
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