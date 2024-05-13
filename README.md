<p align="center">
  <a href="https://www.linkedin.com/in/brunoopetri"><img src="https://img.shields.io/badge/authors-brunoopetri-brightgreen.svg" alt="author"></a> 
  <a href="https://docker.com/"><img src="https://img.shields.io/badge/docker-4.30-blue" alt="vue.js"></a>
  <a href="https://laravel.com/"><img src="https://img.shields.io/badge/laravel_sail-11.X-blue" alt="laravel"></a>
  <a href="https://github.com/brunoopetri"><img src="https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat" alt="contributions"></a>
  <a href="https://opensource.org/license/mit/"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


<h2 align="center">Customer Management</h2>

![customers](https://github.com/brunoopetri/customer-management/assets/98756562/0c7ba4b6-4d90-4d34-aba8-91151443eb14)


 This is a customer management project developed in Laravel Sail, running on Docker environment. The objective of this project is to allow the registration, editing, deletion and listing of customers.

## Prerequisites

Before you begin, make sure your machine meets the following requirements:
- Docker installed

## Prompt commands described

- './vendor/bin/sail up -d': This command starts Docker containers defined in the Sail environment in the background (-d). It creates a network and starts the containers required to run the Laravel application.
- './vendor/bin/sail shell': This command opens a shell inside the Sail environment container. Allows you to interact directly with the Laravel application development environment.
- 'php artisan db:seed --class=CustomerSeeder': This command executes Laravel database seed execution. In the example given, it is running the specific seeder called "CustomerSeeder", which probably populates the customers table with test data.

<img width="1278" alt="ComandoRodarDocker,AcessarShell do Docker,CriarListaSeeder" src="https://github.com/brunoopetri/customer-management/assets/98756562/219ec32b-afd4-4466-8655-def227919d17">

## CustomerSeeder

- Empty Customer List:
<img width="635" alt="ListadeClientesVazia" src="https://github.com/brunoopetri/customer-management/assets/98756562/28b6789a-9815-4cec-82ea-4ce00f3dd6b0">

- Populated Customer List:
<img width="638" alt="ListadeClientes" src="https://github.com/brunoopetri/customer-management/assets/98756562/92f671b7-b6b6-4885-a895-045ca8d80244">

- MySQL Workbench: The customers table with test data:
<img width="1280" alt="MySQL_CustomerSeeder" src="https://github.com/brunoopetri/customer-management/assets/98756562/816eb707-4233-45e1-82ca-eb39d48f2d39">

## Create Customer
- In the application
<img width="635" alt="CriarCliente" src="https://github.com/brunoopetri/customer-management/assets/98756562/640304b2-1a02-4523-8633-bac3c7b087fb">

 
<img width="635" alt="ConfirmaçãoCriarCliente1" src="https://github.com/brunoopetri/customer-management/assets/98756562/d88cdb22-96a6-4361-a22b-b909e6f155cc">

<img width="1279" alt="MySQL_CreateCustomer" src="https://github.com/brunoopetri/customer-management/assets/98756562/ec8a6819-e7d5-4c99-9658-6a9d851ba14e">

## Edit Customer
- In the application
- A more user-friendly method where the customer ID is not exposed in the URL.

<img width="636" alt="editCustomer_1" src="https://github.com/brunoopetri/customer-management/assets/98756562/ecaa608c-167f-417a-bc9b-50d907096baa">

- Edit Customer

<img width="636" alt="edit_Customer1" src="https://github.com/brunoopetri/customer-management/assets/98756562/0901571f-d6b2-4d1a-97e3-2db84da7b60c">

- Confirm client edition in MySQL Workbench

<img width="1277" alt="MySQL EditCustomer1" src="https://github.com/brunoopetri/customer-management/assets/98756562/2923f0f4-ff09-420d-a9a9-5573f7231203">
