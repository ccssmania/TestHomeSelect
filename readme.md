<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About This Project

The goal of this project is create a inventory module in which, you can have an inventory control, adding and removing stock 

- There are products categories.
- Each product is linked with a category.
- The product could be created with 0 stock.
- A product could be deleted if and only if the stock of that product is 0.
- You may add/remove inventory to a product un the module of inventories.
- In inventory module will appear all the inventories of all products.
- In Product interface you could see the inventory of each product.

This is a Beta version.

## Install
Prerequisites:
- Composer
- PHP 7^

Download the git `git clone https://github.com/ccssmania/TestHomeSelect TestHomeSelect` and put it in "htdocs" folder or "www" depends of ypur local server.
access the `cd TestHomeSelect`  and type
`composer update`

open the `.env` file and modify it according to your apache and `SQL` specifications.
NOTE: You have to have a DB called homeselect
then type
`php artisan migrate`  it will automatically create all the tables needed.
then type
`composer dump-autoload`
And For populate the databases type the following commands.
`php artisan db:seed --class=CategoriesTableSeede`
`php artisan db:seed --class=ProductsTableSeede`
`php artisan db:seed --class=StockTableSeede`

Now you can acces first:
`php artisan serve` and in the browser put `localhost:8000`

Or

Go directly to the browser `localhost/TestHomeSelect/public`

## Easy Way

The project is already uploaded on HEROKU that is a free hosting, it already has some data, just creat a new acount and log in.

[TestHomeSelect](http://salty-depths-77006.herokuapp.com/public/register)

Note: remember that the data was created in a random way.

