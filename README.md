# EthereumScraper


## About
EthereumScraper is an application that scrapes data on Ethereum addresses and displays it.

The user inputs an address into the from and the app scrapes the data on the given address, displaying basic infomation (tag, balance, price of ETH balance, total transactions and a table containing paginated transactions data). Additionally, user can input a block number, which will limit transactions displayed, showing only transactions with block number higher than the given one.

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



























