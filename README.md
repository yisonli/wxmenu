# An editor for WeChat Menu.

This is a `laravel-admin` extension that integrates [wx_menu](http://www.jq22.com/jquery-info21835) into `laravel-admin`.


## Screenshot

<img src="wxmenu.jpg">

## Installation

First, install dependencies:

```bash
composer require yisonli/wxmenu
```

Then, publish the resource directory:

```bash
php artisan vendor:publish --tag=wxmenu --force
```

## Configuration

In the `extensions` section of the `config/admin.php` file, add some configuration that belongs to this extension.

```php
'extensions' => [
    'wxmenu' => [
        // set to false if you want to disable this extension
        'enable' => true,
    ]
]
```


## Usage

Use it in the form form:

```php
$form->wxmenu('content');

// Also you can set default value like this
$form->wxmenu('content')->default($default_value);
```

## License

Licensed under [The MIT License](LICENSE).

## About Me
name: yison.li  
blog: [http://yyeer.com](http://yyeer.com)  
github: [https://github.com/yisonli](https://github.com/yisonli)

![](http://yyeer.com/assets/img/YisonWechat.png)