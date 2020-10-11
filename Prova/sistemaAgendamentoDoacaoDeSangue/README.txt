Configurações e aplicativos utilizados

->OS: Manjaro 20.1 Mikah
->Kernel: Linux 5.4.64-1-MANJARO (64 bits)
->PHP 7.4.10
->Laravel Framework 8.8.0
->BD Sqlite 3.33.0
->Google Chrome 85.0.4183.102 (Versão oficial) 64 bits


Execução da Aplicação:
    *Alterar o caminho do BD no arquivo ".env" (oculto, localizado na raiz da Aplicação).

    *E pode-se limpar o BD, fazer as migrations e povoar o BD, ou seja, utilizar os seguintes comandos:
    ->php artisan migrate:fresh
    ->php artisan db:seed
