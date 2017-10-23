Yii 2 Pug (ex Jade) extension (Forked by rmrevin/yii2-pug)
==========================================================

This extension provides a view renderer for [Pug](https://pugjs.org/) templates
for [Yii framework 2.0](http://www.yiiframework.com/) applications.

For license information check the [LICENSE](https://github.com/drdim/yii2-pug/blob/master/LICENSE)-file.

[![License](https://poser.pugx.org/drdim/yii2-pug/license.svg)](https://packagist.org/packages/drdim/yii2-pug)
[![Latest Stable Version](https://poser.pugx.org/drdim/yii2-pug/v/stable.svg)](https://packagist.org/packages/drdim/yii2-pug)
[![Latest Unstable Version](https://poser.pugx.org/drdim/yii2-pug/v/unstable.svg)](https://packagist.org/packages/drdim/yii2-pug)
[![Total Downloads](https://poser.pugx.org/drdim/yii2-pug/downloads.svg)](https://packagist.org/packages/drdim/yii2-pug)

Code Status
-----------
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/drdim/yii2-pug/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/drdim/yii2-pug/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/drdim/yii2-pug/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/drdim/yii2-pug/?branch=master)
[![Travis CI Build Status](https://travis-ci.org/drdim/yii2-pug.svg)](https://travis-ci.org/drdim/yii2-pug)

Support
-------
* [GutHub issues](https://github.com/drdim/yii2-pug/issues)

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run

```bash
composer require "drdim/yii2-pug:dev-master"
```

or add

```
"drdim/yii2-pug": "~0.0",
```

to the `require` section of your `composer.json` file.

Configure
---------
```php
<?php

return [
	// ...
	'components' => [
		// ...
		'view' => [
		    // ...
            'renderers' => [
            	'pug' => 'drdim\\yii\\pug\\ViewRenderer',
            ],
		]
	]
];
```

Usage
-----
