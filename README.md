# Nome do Projeto

Descrição curta do projeto em uma ou duas frases.

## Sumário

- [Nome do Projeto](#nome-do-projeto)
  - [Sumário](#sumário)
  - [Descrição](#descrição)
  - [Instalação](#instalação)
  - [Configuração](#configuração)
  - [Uso](#uso)
  - [Recursos](#recursos)
  - [Contribuição](#contribuição)
  - [Licença](#licença)
  - [Contato](#contato)

## Descrição

Breve descrição do projeto e suas funcionalidades principais. Explique o propósito do projeto, o problema que ele resolve e sua relevância.

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

## Configuração

Explique aqui como configurar o projeto, caso haja outras configurações além da instalação mencionada acima.

## Uso

Demonstre como usar o projeto, com exemplos e instruções passo a passo para que os usuários possam tirar o máximo proveito do mesmo.

## Recursos

Liste aqui os recursos principais do projeto, bem como suas funcionalidades.

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

Email: thallysbandeira97@gmail.com

