# EthereumScraper

## About
EthereumScraper is an application that scrapes data on Ethereum addresses and displays it.

The user inputs an address into the from and the app scrapes the data on the given address, displaying basic infomation (tag, balance, price of ETH balance, total transactions and a table containing paginated transactions). Additionally, user can input a block number, which will limit transactions displayed, showing only transactions from the given block to the current.

Etherscan API was used for getting information on transactions, due to the hight number of transactions certain addresses can have.

Technologies used: PHP, Laravel, JavaScript, jQuery, Goutte, Guzzle, Blade, AJAX, JSON, HTML5, Bootstrap


## Setting The Project Up
This is a Laravel web application, so you will need:
* Composer installed,
* XAMPP, so you can run the app in localhost

After downloading the project you will need to:
* Put the project folder into xampp's htdocs folder to run it in your blowser
* Activate Apache on xampp
* Open terminal and position yourself into the project folder
* Run these commands:
```
composer install 
cp .env.example .env
php artisan key:generate
```
* Open http://localhost/EthereumScraper/public/ in your web browser



# Details About The Project

## On entering the web page
![name-of-you-image](https://github.com/NemanjaKasanov/EthereumScraper/blob/main/images/2021-11-11_23-15.png?raw=true)
This is how the page looks when you enter.
Insert an address, and optionaly a block number to show information.
Clicking on the info sign in the upper right corner opens a modal with instructions.

## Inputting an invalid address
![name-of-you-image](https://github.com/NemanjaKasanov/EthereumScraper/blob/main/images/2021-11-11_23-23.png?raw=true)
This is the display shown when the given address was invalid.

## Address information display
![name-of-you-image](https://github.com/NemanjaKasanov/EthereumScraper/blob/main/images/2021-11-11_23-25.png?raw=true)
![name-of-you-image](https://github.com/NemanjaKasanov/EthereumScraper/blob/main/images/2021-11-11_23-25_1.png?raw=true)
This is how it looks like when the address in the form was valid and scraping was successfull.

Here you can find Laravel models that get the data:
* https://github.com/NemanjaKasanov/EthereumScraper/blob/main/app/Models/Address.php
* https://github.com/NemanjaKasanov/EthereumScraper/blob/main/app/Models/Transaction.php
* https://github.com/NemanjaKasanov/EthereumScraper/blob/main/app/Models/Ethereum.php

Here you can find Laravel Controllers:
* https://github.com/NemanjaKasanov/EthereumScraper/blob/main/app/Http/Controllers/PagesController.php
* https://github.com/NemanjaKasanov/EthereumScraper/blob/main/app/Http/Controllers/AddressesController.php
* https://github.com/NemanjaKasanov/EthereumScraper/blob/main/app/Http/Controllers/TransactionsController.php

Here is the JS code woking on displays:
* https://github.com/NemanjaKasanov/EthereumScraper/blob/main/public/assets/js/main.js
* https://github.com/NemanjaKasanov/EthereumScraper/blob/main/public/assets/js/loading.js
* https://github.com/NemanjaKasanov/EthereumScraper/blob/main/public/assets/js/modal.js
* https://github.com/NemanjaKasanov/EthereumScraper/blob/main/public/assets/js/pagination.js

##
![name-of-you-image](https://github.com/NemanjaKasanov/EthereumScraper/blob/main/images/2021-11-11_23-30.png?raw=true)
When the user clicks on the Txn Hash link in the table, this modal will be diplayed.
It contains information on the selected transaction in more detail than the display in the table.
