#Teste Processo Seletivo RevGás

#Como executar o projeto:

1 - Execute as instruções abaixo:

- Após clonar o projeto, abra na raiz e execute os comandos a seguir:
    - composer install
    - php artisan migrate:fresh --seed
    - php artisan serve (deverá executar na url 127.0.0.1:8000)
    - npm install
    - npm start (deverá executar na url http://localhost:3000/)

- Para acessar o projeto acesse as seguintes URLS:
    - 127.0.0.1:8000 (MVC)
    - http://localhost:3000/ (API)

#API
- Listagem de Bancos Cadastrados
- GET http://127.0.0.1:8000/api/bank

- Busca de Bancos por Código
- GET http://127.0.0.1:8000/api/bank?code={code}

#Tecnologias e Padrões Utilizados
- PHP 8.3
- Laravel 11
- Modernize e Material UI
- React
- MVC
- API/Microserviços


##Descrição do que foi pedido no teste:
    1 - Criar uma tabela no banco de dados MySQL e armazenar a lista de bancos, presente no arquivo em anexo.
    2 - Criar uma api utilizando um framework web da sua escolha, para disponibilizar as informações presentes no banco de dados que você criou, com os seguintes endpoints:
    2.1 - Listagem de todos os bancos - método GET;
    2.2 - Consultar um banco passando o código de compensação como parâmetro - método GET;
    3 - Criar uma tela de consulta dos bancos que irá consumir a api, utilizando um framework web da sua escolha;

Obs: Planilha excel com os dados do banco enviados via email
(a planilha esta dentro da pasta documents/bancos.xls)

#Vídeo de Demonstração do Projeto Funcionando
https://www.loom.com/share/7e0874dcac594bd38f0a6e4fc6abafe8
