# Projeto-Biblioteca

## Descrição

Projeto em construção com o objetivo de criar uma biblioteca para os projetos de extensão.

## Requisitos necessários

É necessário instalar o PHP, eu utilizei o chocolatey a fim de manter tudo na versão mais atual.

Para instalar o chocolatey, utilize esse website aqui https://chocolatey.org/install

Após isso, no powershell como administrador, rode choco install PHP.

Também será necessário usar o composer, rode choco install composer

## para rodar o projeto.

Ao chamar para a sua máquina, rode composer install na pasta do projeto.

Para o servidor backEnd:

O projeto roda usando MYSQL.

configure um usuário na base de dados.

Nome: projetos
Senha: projetobiblioteca1

não se esqueça de colocar ele como local.

Configure um banco de dados, sendo:

Nome: biblioteca

Para ele funcionar, é necessário rodar os seguintes comando apenas uma vez:


  php artisan migrate
  php artisan db:seed Pagprincipal

Feito isso, rode no projeto o seguinte comando

php artisan db:seed 

Repita esse ultimo umas 3 vezes para gerar bastante dado de teste, caso haja necessidade (ele gera 10 por vez, tanto em cursos quanto em projetos)

Por ultimo, rode php artisan serve para executar.
