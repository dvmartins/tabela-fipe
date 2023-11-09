# Tabela Fipe
- Aplicação consiste em consumir  de uma api externa da tabela fipe https://deividfortuna.github.io/fipe/

O projeto foi desenvolvido com Laravel 9 foram desenvolvidas duas interfaces onde o usuario faz a consulta do valor e especificações de um determinado veliculo selecionando a marca, modelo, e ano. Apos selecionar os campos e clicar no botão pesquisar o usuario e redirecionado para pagina de impressão para que ele possa imprimir a descrição geral do veiculo.

## Views
 - /views/default.blade.php
 - /views/carDetails.blade.php
 - /views/cars.blade.php

## Controller
 - [FipeController.php](./app/Http/Controllers/FipeController.php)

## Services
 - FipeService.php

## Rotas criadas
 - /cars'
 - /api/modelos/{marca}
 - /api/anos/{marca}/{modelo}
 - /cars/details'

## Stacks utilizadas
 - Laravel 9
 - PHP 8.1
 - Javasript
 - HTML5
 - Tailwindcss
 



## Instalação
- clone o projeto: git clone https://github.com/nome-de-usuario/nome-do-repositorio.git
- configure o .env
- instale a dependencias do composer: composer install
- acesse o projeto: php artisan serve

