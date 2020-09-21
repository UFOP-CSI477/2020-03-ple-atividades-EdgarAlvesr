<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estados</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid m-3">
        <div class="row justify-content-center">
            <div class="col-sm-6 table-responsive">
                <table class="table table-bordered table-hover table-striped text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Estado</th>
                            <th>Sigla</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($e = $estados->fetch()){
                                echo "<tr>\n";
                                echo "<td>" . $e['nome'] . "</td>";
                                echo "<td>". $e['sigla'] . "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>