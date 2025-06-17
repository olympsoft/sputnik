# Тестовое задание

Проект на основе текущей версии Laravel 12.0.


```bash
php artisan migrate
php artisan db:seed --class=PricesSeeder
```

## Список файлов

* [routes/api.php](https://github.com/olympsoft/sputnik/blob/master/routes/api.php)
* [App\\Http\\Controllers\\PriceController.php](https://github.com/olympsoft/sputnik/blob/master/app/Http/Controllers/PriceController.php)
* [App\\Http\\Resources\\PriceResource.php](https://github.com/olympsoft/sputnik/blob/master/app/Http/Resources/PriceResource.php)
* [App\\Services\\CurrencyService.php](https://github.com/olympsoft/sputnik/blob/master/app/Services/CurrencyService.php)
* [App\\Models\\Price.php](https://github.com/olympsoft/sputnik/blob/master/app/Models/Price.php)
* [Database\\Factories\\PriceFactory.php](https://github.com/olympsoft/sputnik/blob/master/database/factories/PriceFactory.php)
* [Database\\Seeders\\PricesSeeder.php](https://github.com/olympsoft/sputnik/blob/master/database/seeders/PricesSeeder.php)
* [database/migrations/2025_06_17_141412_create_prices_table.php](https://github.com/olympsoft/sputnik/blob/master/database/migrations/2025_06_17_141412_create_prices_table.php)

## Примеры работы приложения

### Без параметров / RUR

 ![Без параметров](https://github.com/olympsoft/sputnik/raw/master/example1.png)

### USD

 ![currency=USD](https://github.com/olympsoft/sputnik/raw/master/example2.png)

### EUR

 ![currency=EUR](https://github.com/olympsoft/sputnik/raw/master/example3.png)

### Некорректная валюта

 ![Некорректная валюта](https://github.com/olympsoft/sputnik/raw/master/example4.png)
