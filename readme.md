# Demo Laravel-comment package

* Link to package [yarmat/laravel-comment](https://github.com/yarmat/laravel-comment)
* Link to demo-page [Demo](http://comment-demo.yarmat.su)

## Installing
Step 1
<pre>
git clone https://github.com/yarmat/laravel-comment.git ./
</pre>

Step 2 
<pre>
composer install
</pre>

Step 3
<pre>
npm install
</pre>

Step 4
<pre>
cp .env.example .env
</pre>

Step 5
```php
php artisan key:generate
```

Step 6
Configure the database connection in the .env file
<pre>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
</pre>

Step 7
```php
php artisan migrate
```

Step 8
```php
php artisan db:seed
```

## Screenshots

![comment-form](screenshots/1.png)

![comment-item](screenshots/2.png)

![comment-tree](screenshots/3.png)

![comment-load-more](screenshots/4.png)

![comment-answer-form](screenshots/5.png)

![comment-sort-newest](screenshots/6.png)

![comment-sort-oldest](screenshots/7.png)

## License

The Demo Laravel-comment is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
