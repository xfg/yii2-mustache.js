Yii2 mustache.js
================
Yii2-extension for [mustache.js](https://github.com/janl/mustache.js)

This project is distributed under the terms of the
[Apache Software License, Version 2](LICENSE.md).

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xfg/yii2-mustache.js "*"
```

or add

```
"xfg/yii2-mustache.js": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply add next code to your asset bundle  :

```
public $depends = [
    'xfg\mustachejs\MustachejsAsset',
];
```