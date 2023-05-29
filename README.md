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

baseUrl: <http://localhost/api/v1>

- post /intentions  - cria uma intenção - (rota protegida por autenticação)
- get  /intentions - lista as intenções
- post /login - login (o token recebido será necessário para a rota de criar intenção)
- post /logout - desloga do sistema - (rota protegida por autenticação)
- post /register - cria um novo usuário - (rota protegida por autenticação)
## Serviço de Produtos
### Principais tecnologias utilizadas
 - Node 14
 - Nest Js 9
 - Npm/Yarn 
 - Docker 20.10.22
 - Git
 ### Rotas de api
baseUrl: <http://localhost:3000/api/v1>

- get /products - lista os produtos
- post /intentions - envia a requisição pra o serviço de intenções (necessário enviar o token gerado em /auth)
- post /auth - envia email e senha do usuário para gerar o token de acesso 
### Como instalar (necessário ter docker instalado):
 1. Clonar o projeto
 2. `cd project folder`
 3. `./dev-install.sh`
 4. `docker compose exec laravel php artisan migrate --seed` 
 5. `docker compose exec nest npm install` (se necessário)
 6. A aplicação estará disponível em: <http://localhost>
 - Executando comandos do serviço de intenção: `docker compose exec laravel php artisan tinker`
 - Executando comandos do serviço de produtos: `docker compose exec nest npm install`
### Usuário padrão
- login: admin@admin.com
- senha: password
