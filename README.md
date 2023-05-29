## DESCRIÇÃO DOS COMANDOS 
1. git clone https://github.com/WellitonCunha/mono-challenge-intention.git
2. renomear o arquivo <b>.env.example</b> para <b>.env</b> e alterar os dados abaixa: <br>
DB_CONNECTION=pgsql <br>
DB_HOST=db <br>
DB_PORT=5432 <br>
DB_DATABASE=lebiscuit <br>
DB_USERNAME=postgres <br>
DB_PASSWORD=lebiscuit <br>
3. docker-compose up -d
<br> Esse comando inicia todos os containers disponivel em segundo plano
<br> Observação: (em alguns casos é preciso compartilhar a pasta do projeto no docker (<i>Settings->Resources->File sharing</i>))
4. docker-compose run composer update
<br> Esse comando é para atualizar a pasta vendor do laravel e suas dependencias.
5. docker-compose run artisan migrate
<br> Esse comando cria todas as tabelas disponivel na migrations do laravel.
6. http://localhost:7020/api/v1/product/index
<br> Esse endpoint acima é do tipo <b>GET</b>, serve para listar todos os produtos.
7. http://localhost:7020/api/v1/buy_intention/store
<br> Esse endpoint acima é do tipo <b>POST</b>, serve para criar a intenção de compra, foi usado o postman para testar os parametros, como mostra o exemplo abaixo:
<br> {<br>
    &nbsp;&nbsp;"client_name":"Welliton",<br>
    &nbsp;&nbsp;"address":"Rua A, 1741  - Santa Rita imperatriz-MA",<br>
    &nbsp;&nbsp;"product_id":[1,2]<br>
}
8. http://localhost:7020/api/v1/buy_intention/index
<br> Esse endpoint acima é do tipo <b>GET</b>, serve para listar todas as intenções de 
compra e todos os seus respectivos produtos escolhidos.
