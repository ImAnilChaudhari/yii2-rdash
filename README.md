A responsive dashboard for Yii2.
================================
This is a responsive admin dashboard built with twitter bootstrao 3.* .

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist imanilchaudhari/yii2-rdash "dev-master"
```

or add

```
"imanilchaudhari/yii2-rdash": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
'components' => [
    'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/imanilchaudhari/rdash/example-views/yii2-basic-app'
             ],
         ],
    ],
],    
     ]
```