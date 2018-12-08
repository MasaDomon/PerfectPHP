<?php
/**
 * Created by PhpStorm.
 * User: masamichidomon
 * Date: 2018/11/23
 * Time: 16:29
 */

require 'core/ClassLoader.php';

$loader = new ClassLoader();
$loader->registerDir(dirname(__FILE__) . '/core');
$loader->registerDir(dirname(__FILE__) . '/models');
$loader->register();