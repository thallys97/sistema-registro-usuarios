# Sistema simples de registro de usuários

## Descrição

O projeto "Sistema de Registro de Usuários" é uma aplicação web desenvolvida em Laravel que permite aos usuários se cadastrarem na plataforma. O objetivo principal do sistema é fornecer uma forma rápida e segura para que novos usuários possam criar contas e acessar a aplicação.

## Instalação

1. Certifique-se de ter os requisitos listados no arquivo `composer.json`.
2. Clone este repositório em sua máquina local usando `git clone https://github.com/thallys97/sistema-registro-usuarios.
3. Acesse o diretório do projeto via terminal: `cd <caminho do projeto>`.
4. Execute o comando `composer install` para instalar as dependências do Laravel.
5. Execute o comando `npm install` para instalar as dependências que estão no package.json
6. Crie um arquivo `.env` na raiz do projeto (você pode se basear no arquivo `.env.example` disponibilizado).
7. Gere a chave da aplicação Laravel executando `php artisan key:generate`.
8. Configure o acesso ao banco de dados no arquivo `.env`.
9. exemplo: no arquivo `.env` comente todas as linhas que tem o prefixo `DB_` exceto a entrada `DB_CONNECTION`
10. continuação: coloque o valor de `DB_CONNECTION` como `sqlite`
11. continuação: crie o arquivo `database.sqlite` (esse vai ser o banco de dados) na pasta `database` 
12. Execute as migrações para criar as tabelas do banco de dados: `php artisan migrate`.
13. Execute o servidor de desenvolvimento: `php artisan serve`.
14. Acesse a aplicação em `http://localhost:8000`.


## Uso


fazendo o registro de um usuário no meu sistema: 

[![Clique para assistir ao vídeo](https://img.youtube.com/vi/aaOZ2cPOppU/0.jpg)](https://www.youtube.com/watch?v=aaOZ2cPOppU)


## Recursos

Registro de Usuários: Os usuários podem criar contas fornecendo informações básicas, como nome, email e senha.

Autenticação: Após o registro, os usuários podem fazer login usando suas credenciais para acessar o sistema.

Segurança: O sistema utiliza medidas de segurança para proteger as senhas dos usuários, como por exemplo, armazenar a senha em forma de hash no banco de dados, garantindo o armazenamento seguro das informações.

algumas regras de validação aplicadas nos campos do fomulário de registro de usuários:

1. Os campos de "nome", "email" e "senha" são obrigatórios.
2. Os campos de "nome", "email" e "senha" precisam de pelo menos três caracteres cada.
3. Os campos de "nome" e "email" precisam ser únicos, ou seja, tem quer ser um valor diferente do que já foi armazenado no banco de dados.
4. O valor do campo de "senha" precisa ser confirmado de novo no campo de confirmação de senha


## Contribuição

Agradecemos sua contribuição para o projeto. Para contribuir, siga os passos abaixo:

1. Faça um fork do repositório.
2. Crie um branch com a feature/bugfix que deseja implementar: `git checkout -b nome-da-sua-feature`.
3. Faça as alterações necessárias e adicione os commits: `git commit -m 'Descrição das alterações'`.
4. Envie as alterações para o seu fork: `git push origin nome-da-sua-feature`.
5. Crie um pull request para este repositório, descrevendo detalhadamente as mudanças propostas.

## Licença

este projeto usa a MIT License 

## Contato

Email: thallysroque@gmail.com

