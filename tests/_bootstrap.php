<?php
// This is global bootstrap for autoloading

define('YII_ENV', 'test');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../console/config/main.php');

$application = new yii\console\Application( $config );

Yii::setAlias('@tests', dirname(__DIR__));