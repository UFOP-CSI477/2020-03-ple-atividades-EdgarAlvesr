# **CSI477-2020-03 - PLE - Trabalho Final - Resultados**
## *Aluna(o): Edgar Henrique Alves Rodrigues*

--------------

<!-- Este documento tem como objetivo apresentar o projeto desenvolvido, considerando o que foi definido na proposta e o produto final. -->

### Resumo

  O trabalho final tem como tema o desenvolvimento de um Sistema de Reservas de Salas de Reunião do ICEA. Para isso, foram elaboradas visões para que seja possível agendar reuniões nas salas, verificando os horários disponíveis, excluir os agendamentos e visualizar a lista de reuniões agendadas com seu detalhes. Na aplicação há diferentes níveis de acesso, sendo que somente pessoas cadastradas podem agendar reuniões e somente administradores ou o responsável pela reunião pode alterar a mesma.
  Em relação à arquitetura da aplicação, foram utilizadas as seguintes tecnologias:
  - Backend:
    - PHP 7.4.10
    - Laravel Framework 8.5.0
    - Banco de Dados Sqlite 3.33.0
  - Frontend:
    - Blade Template (Laravel)
    - Bootstrap 4.5
    - SB Admin 2 Bootstrap Theme
    - JQuery
  - Sistema Operacional e demais aplicações utilizadas para construção:
    - SO: Manjaro 20.1 Mikah
    - Kernel: Linux 5.4.64-1-MANJARO (64 bits)
    - Google Chrome 85.0.4183.102 (Versão oficial) 64 bits

### 1. Funcionalidades implementadas
<!-- Descrever as funcionalidades que eram previstas e foram implementas. -->
  - Autenticação de usuários, com opções de Login e realizar registro de novo usuário;
  - Agendamento de reunião a partir da seleção de sala, data e horários;
  - Listagem das reuniões agendadas;
  - Detalhamento, edição e exlusão de uma reunião;
  - Controle de acesso para usuários, gerando diferentes permissões e visões para cada tipo de usuário.
  
### 2. Funcionalidades previstas e não implementadas
<!-- Descrever as funcionalidades que eram previstas e não foram implementas, apresentando uma breve justificativa do porquê elas não foram incluídas -->
  - Tela para listagem das reuniões agendadas para uma sala específica
    - Não foi implementado pois a visibilidade de reuniões agendadas disponibiliza esse recurso. Pode-se filtrar a sala desejada na lista de reuniões agendadas.
  - Agendamento de reunião a partir de um horário inicial, retornando as salas disponíveis.
    -Não foi priozidada a implementação. A tela de agendamento cumpre o recurso de agendamento de outra forma, sendo essa visibilidade não implementada um recurso adicional e não essencial.

### 3. Outras funcionalidades implementadas
<!-- Descrever as funcionalidades implementas além daquelas que foram previstas, caso se aplique.  -->
  - Tabela de reuniões agendadas com funcionalidades avançadas. Pode-se ordenar a tabela como desejar e filtrar os dados buscados, de forma dinâmica.
  - Horários dinâmicos na tela de agendamento, sendo atualizados os horários de acordo com sala, data e horário inicial escolhido em tempo de execução.

### 4. Principais desafios e dificuldades
<!-- Descrever os principais desafios encontrados no desenvolvimento do trabalho, quais foram as dificuldades e como elas foram superadas e resolvidas. -->
  - O maior desafio foi a implementação de métodos que possibilitassem verificar os horários disponíveis para as reuniões de acordo com a seleção do usuário. Para realizar tal operação foi necessário utilizar rotinas com AJAX, a qual o desenvolvedor não dominava na arquitetura do Laravel, e fazer diversas verificações via Javascript e PHP para que as informações se mostrasse congruentes. Essa implementação foi a que mais demandou tempo na aplicação.

### 5. Instruções para instalação e execução
<!-- Descrever o que deve ser feito para instalar (ou baixar) a aplicação, o que precisa ser configurando (parâmetros, banco de dados e afins) e como executá-la. -->
  Para executar a aplicação deve-se fazer o download do código fonte e instalar as dependêcias do Laravel na pasta baixada. Após a configuração do Laravel, deve-se:
    - Renomear o arquivo '.env.example' para '.env', colar as configurações de BD abaixo no campo especificado no arquivo, alterando o caminho do BD de acordo com a localização da pasta em seu computador e criando um arquivo de BD '.sqlite' na pasta '/Projeto/database/':
    
    ```
      DB_CONNECTION=sqlite
      
      #DB_HOST=127.0.0.1
      
      #DB_PORT=3306
      
      DB_DATABASE="/Caminho_do_Projeto_no_seu_PC/Projeto/database/sistemaagendamentosalas.sqlite"
      
      #DB_USERNAME=root
      
      #DB_PASSWORD=
      
      DB_FOREIGN_KEYS=true
      
    ```

  Após a configuração, deve-se fazer as migrations e executar o servidor, ou seja, utilizar os seguintes comandos em um terminal aberto na pasta do projeto:
    - php artisan migrate:fresh
    - php artisan serve
  
  Feito isso, é só executar a aplicação no navegador e realizar os agendamentos.


### 6. Referências
<!-- Referências podem ser incluídas, caso necessário. Utilize o padrão ABNT. -->

- Bootstrap 4.5 Documentation. Disponível em: <https://getbootstrap.com/docs/4.5/getting-started/introduction/>. Acesso em: 10 de outubro de 2020.
- SB Admin 2 Bootstrap Theme. Disponível em: <https://startbootstrap.com/themes/sb-admin-2/>. Acesso em: 10 de outubro de 2020.

