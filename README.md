# Serviço de intenção e produto
Este é um teste aplicado para testar os conhecimentos de Laravel.

## Serviço de Intenção

### Principais tecnologias utilizadas
 - PHP 8.2
 - Composer 2
 - Laravel 10
 - Mysql 8.0
 - Docker 20.10.22
 - Git

 ### Rotas de api

- post /api/v1/intention/intentions
- get /api/v1/intention/intentions

## Serviço de Produtos

### Principais tecnologias utilizadas
 - PHP 8.2
 - Composer 2
 - Lumen 10
 - Docker 20.10.22
 - Git

 ### Rotas de api

- get /api/v1/product/products - lista os produtos
- post /api/v1/product/intentions - envia a requisição pra o serviço de intenções

### Como instalar (necessário ter docker instalado):
 1. Clonar o projeto
 2. `cd project folder`
 3. `./.scripts/dev-install.sh`
 4. `docker compose exec laravel php artisan migrate --seed` 
 6. A aplicação estará disponível em: [http://localhost](http://localhost)
 - Executando comandos do serviço de intenção: `docker compose exec laravel php artisan tinker`
 - Executando comandos do serviço de produtos: `docker compose exec lumen php artisan tinker`


### Usuário padrão
- login: admin@admin.com
- senha: password
