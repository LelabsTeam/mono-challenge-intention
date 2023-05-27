# Serviços de intenção e produto
## Serviço de Intenção
### Principais tecnologias utilizadas
 - PHP 8.2
 - Composer 2
 - Laravel 10
 - Mysql 8.0
 - Docker 20.10.22
 - Git
 ### Rotas de api
- post /api/v1/intention-service/intentions  - cria uma intenção
- get /api/v1/intention-service/intentions - lista as intenções
- post /api/v1/intention-service/login - login (o token recebido será necessário para as rotas de intenção)
- post /api/v1/intention-service/logout - desloga do sistema
- post /api/v1/intention-service/register - cria um novo usuário
## Serviço de Produtos
### Principais tecnologias utilizadas
 - PHP 8.2
 - Composer 2
 - Lumen 10
 - Docker 20.10.22
 - Git
 ### Rotas de api

- get /api/v1/product-service/products - lista os produtos
- post /api/v1/product-service/intentions - envia a requisição pra o serviço de intenções
### Como instalar (necessário ter docker instalado):
 1. Clonar o projeto
 2. `cd project folder`
 3. `./dev-install.sh`
 4. `docker compose exec laravel php artisan migrate --seed` 
 6. A aplicação estará disponível em: [http://localhost](http://localhost)
 - Executando comandos do serviço de intenção: `docker compose exec laravel php artisan tinker`
 - Executando comandos do serviço de produtos: `docker compose exec lumen php artisan tinker`
### Usuário padrão
- login: admin@admin.com
- senha: password
