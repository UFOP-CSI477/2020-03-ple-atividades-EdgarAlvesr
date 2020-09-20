<?php

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    echo "<h3>Os seguintes dados foram recebidos no servidor</h3>";
    echo "<p>Nome: $nome<br>
            CPF: $cpf<br>
            Telefone: $telefone<br>
            E-mail: $email<br>
            Endereço: $endereco<br>
            Cidade: $cidade<br>
            Estado: $estado
            </p>";
    echo "<a href='index.html'>Voltar</a>";
    
            