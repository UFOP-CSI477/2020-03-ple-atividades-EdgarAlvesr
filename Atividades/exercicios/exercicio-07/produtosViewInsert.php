<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Produtos</title>

    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    
</head>
<body>
    <div class="container m-3">
        
        <div class="row">
            <h1>Cadastro de produtos</h1>
        </div>
        <div class="form-row">
            <form name="formProduto" method="post" action="produtosControllerInsert.php" onsubmit="return validarForm()">
                
                <div class="form-group">
                    <label for="nome">Nome do Produto:</label>
                    <input type="text" name="nome" id="nome">
                </div>
                
                <div class="form-group">
                    <label for="um">Unidade de medida (máx. 3 caracteres):</label>
                    <input type="text" name="um" id="um">
                </div>
    
                <input type="submit" value="Inserir">
            </form>
        </div>
        
    </div>

    <script src="produtosViewInsert.js"></script>
</body>
</html>