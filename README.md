# TestPHP

TestPHP é uma aplicação web simples desenvolvida com o uso do framework Laravel e Bootstrap para gerenciar um catálogo de produtos. Com esta aplicação, você pode:

- Adicionar produtos ao catálogo.
- Visualizar a lista de produtos existentes.
- Editar informações de produtos.
- Excluir produtos do catálogo.

## Requisitos

- PHP 7.0 ou superior (Foi usado o Php 8.2.4)
- Foi utilizado o Laravel 5.1.3
- Banco de dados MySQL ou outro sistema de gerenciamento de banco de dados
- XAMPP ou outro servidor web compatível (No projeto foi utilizado o Xampp)

## Instalação

1. Clone este repositório: `git clone https://github.com/seu-usuario/TestPHP.git`
2. Configure seu servidor web (como o XAMPP) para servir o diretório raiz do projeto.
3. Crie um banco de dados MySQL chamado `testphp` e configure as credenciais no arquivo `.env`.
4. Execute as migrações para criar as tabelas do banco de dados: `php artisan migrate`.
5. Inicie o servidor web: `php artisan serve`.

Certifique-se de editar o arquivo `.env` com suas próprias configurações de banco de dados antes de executar as migrações.

## Uso

1. Acesse a aplicação em seu navegador.
2. Clique em "Catálogo de Produtos" para visualizar a lista de produtos.
3. Para adicionar um novo produto, clique em "Adicionar Produto".
4. Para editar ou excluir um produto existente, clique nas opções "Editar" ou "Excluir" na lista de produtos.