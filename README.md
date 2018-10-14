Framework: Yii2

My code in "/src" folder.

Sent mails in "/runtime/mail"

Configuration
------------

### Database
~~~
/config/db.php
~~~
Default values
~~~
'dsn' => 'mysql:host=localhost;dbname=chart',
'username' => 'dbuser',
'password' => 'dbpasswd',
~~~

INSTALLATION
------------

#### Install via Composer
~~~
composer install
./yii migrate
~~~

#### Run server
~~~
./yii serve
~~~
