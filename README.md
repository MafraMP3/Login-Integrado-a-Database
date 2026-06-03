# Sistema de login integrado ao MySQL

## Nome do Projeto

Login integrado a Database

## Objetivo da Aplicação

desenvolver um software em PHP e MySQL que, integrado um banco de dados, permita todas as ações de um CRUD em uma tabela de usuários. 
## Tecnologias Utilizadas

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/docs/Web/HTML)
[![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white)](https://www.apachefriends.org/)

## Arquitetura dos arquivos

```text
projeto/
│
├── index.php
├── README.md
│
├── infra/
│   ├── redes/
│   └── db/
│       ├── connect.php
│       └── script.sql
│
└── public/
    ├── home.php
    ├── logout.php
    │
    └── component/
        └── table.php
```
### Descrição dos Arquivos

* **index.php**: tela de login.
* **connect.php**: pagina para guardar a função de iniciar a sessão e a conexão com o banco de dados.
* **home.php**: Pagina inicial, que exibe as funções do CRUD da tabela usuário para o administrador.
* **script.sql**: contém os comandos para criação do banco e da tabela de usuários.
* **logout.php**: Finaliza a sessão do administrador.
* **table.sql**: função que cria e exibe a tabela usuario, com os dados retirados do banco de dados.
