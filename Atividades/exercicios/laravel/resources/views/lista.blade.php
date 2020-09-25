<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produtos</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <div class="container-fliud m-3">
        <div class="row p-3 text-center">
            <h1>Lista de Produtos cadastrados no BD</h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-6 table-responsive">
                <table class="table table-bordered table-hover table-striped text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Produto</th>
                            <th>Unidade de Medida</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($dados as $produto)
                        <tr>
                            <td> {{$produto->id}} </td>
                            <td> {{$produto->nome}} </td>
                            <td> {{$produto->um}} </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>


    </div>
</body>
</html>