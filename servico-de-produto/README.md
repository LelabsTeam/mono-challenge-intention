## Projeto Serviço de Produto

Esse projeto foi desenvolvido ultilizando o Framework Laravel 10.8 e o Postman API.

- Descrição

Este é um teste proposto pelo grupo [CVLB](https://www.linkedin.com/company/grupo-cvlb/) para o desenvolvimento de uma aplicação que
atenda aos seguintes requisitos:

- Serviço de Produtos

1. Deverá ser desenvolvido em PHP ou TypeScript usando qualquer framework.
2. Pode ser Rest ou GraphQL.
3. Deve ter no mínimo 1 endpoint (Query ou Mutation) para listar produtos e 1 endpoint (Query ou Mutation) para criar intenção de compra.
4. A listagem de produtos deve buscar os dados internamente da [Fake Store API](https://fakestoreapi.com/docs).
5. O endpoint para criação de intenção de compra deve enviar os dados para o **Serviço de Intenção**, que realizará as operações.
6. Este serviço **NÃO PODE USAR NENHUM BANCO DE DADOS**.

### Ambiente de Desenvolvimento

- Acesse ao diretório no terminal da sua máquina:

   `cd servico-de-produto`
   
- instale as dependências do projeto:

  `composer install`

- Execute as migrations

  `php artisan migrate --seed`

- Rode no seu terminal

  `php artisan serve`

- Rode em seu navegador

  http://127.0.0.1:8000/api/products

## Projeto Serviço de Intenção

Desenvolvido ultilizando a linguagem TypeScript e o MySQL.

- Descrição

Este é um teste proposto pelo grupo [CVLB](https://www.linkedin.com/company/grupo-cvlb/) para o desenvolvimento de uma aplicação que
atenda aos seguintes requisitos:

- Serviço de Intenção

1. Deverá ser desenvolvido em qualquer linguagem, exceto aquela usada no **Serviço de Produtos**.
2. Pode ser Rest ou GraphQL.
3. Deve ter no mínimo 1 endpoint (REST ou GraphQL) para criar intenção e 1 endpoint (REST ou GraphQL) para listar intenções de compra.
4. Este serviço deve usar no mínimo 1 banco de dados (MongoDB ou MySQL). Caso necessário, outros bancos de dados podem ser adicionados, sendo a escolha livre.
5. A intenção de compra deve incluir: nome do cliente, produtos e endereço do cliente.

### Ambiente de Desenvolvimento

Certifique-se de ter as seguintes ferramentas instaladas em sua máquina:

[node](https://nodejs.org)

[npm](https://www.npmjs.com/)

 - Acesse ao diretório no terminal da sua máquina:

   `cd servico-de-intencao`

- Instale as dependências do projeto:

  `npm install`

- rode no seu terminal

  `npm run dev`
