# Projeto-Biblioteca

## Descrição.

Este projeto foi feito no intuito de criar um lugar para armazenar os projetos de extensão realizados por outras pessoas, facilitando a maneira para se encontrar o mesmo.

## Tecnologias utilizadas.

Esse projeto está sendo realizado utilizando laravel com um armazenamento em Mysql para possíveis futuras modificações.

## Como rodar o projeto.

Para o servidor Front-End, é necessário todo o processo de instalação do php e do composer.
Para o servidor Back end, é necessário configurar o banco de dados mysql na porta 3306. 

Deve ser criado uma database chamada **biblioteca**.

Também é necessário criar um perfil de usuário local chamado **projetos** com uma senha definida como **projetobiblioteca1** (para qualquer configuração a mais, altere o arquivo .env do projeto).


## Para criar as tabelas

```
  php artisan migrate
  php artisan db:seed Pagprincipal
```
Feito isso, rode no projeto o seguinte comando
```
php artisan db:seed 
```
Repita esse ultimo umas 3 vezes para gerar bastante dado de teste, caso haja necessidade (ele gera 10 por vez, tanto em cursos quanto em projetos)

Por ultimo, rode php artisan serve para executar.
