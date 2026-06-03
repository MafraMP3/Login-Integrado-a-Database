# Sistema de login integrado ao MySQL

## Nome do Projeto

Login integrado a Database

## Objetivo da Aplicação

desenvolver um software em PHP e MySQL que, integrado um banco de dados, permita todas as ações de um CRUD em uma tabela de usuários. 
## Tecnologias Utilizadas

* PHP
* MySQL
* HTML
* XAMPP

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
