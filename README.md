## DESCRIÇÃO DOS COMANDOS 

1. docker-compose up -d
2. docker-compose run composer update
3. renomear o arquivo .env.example para .env e alterar os dados abaixa:
DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=lebiscuit
DB_USERNAME=postgres
DB_PASSWORD=lebiscuit
4. docker-compose run artisan migrate
