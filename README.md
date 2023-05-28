## DESCRIÇÃO DOS COMANDOS 
1. git clone https://github.com/WellitonCunha/mono-challenge-intention.git
2. renomear o arquivo .env.example para .env e alterar os dados abaixa:
DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=lebiscuit
DB_USERNAME=postgres
DB_PASSWORD=lebiscuit
3. docker-compose up -d
- observação: (em alguns casos é preciso compartilhar a pasta do projeto no docker(Settings->Resources->File sharing))
4. docker-compose run composer update
5. docker-compose run artisan migrate
6. http://localhost:7020/api/v1/product/index
- Esse endpoint acima é do tipo GET, serve para listar todos os produtos.
7. http://localhost:7020/api/v1/buy_intention/store
- {
    "client_name":"Welliton",
    "address":"Rua A, 1741  - Santa Rita imperatriz-MA",
    "product_id":[1,2]
}
- Esse endpoint acima é do tipo POST, serve para criar a intenção de compra, foi usado o postman para testar os parametros. 
8. http://localhost:7020/api/v1/buy_intention/index
- Esse endpoint acima é do tipo GET, serve para listar todas as intenções de 
compra e todos os seus respectivos produtos escolhidos.
