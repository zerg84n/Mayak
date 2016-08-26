<?php

/**
 * config.php
 * Конфигурационный файл сайта
 * 
 */

// Константы для обращения к контроллерам
define('PATH_PREFIX', '../controllers/');
define('PATH_POSTFIX', 'Controller.php');

//> Используемый шаблон
$template = 'frontend';
$templateAdmin = 'admin';

// Адрес сайта
define('SITEURL', $_SERVER['SERVER_NAME']);

// Временная зона сайта
date_default_timezone_set('Asia/Yekaterinburg');

// Пути к файлам шаблонов (.tpl)
define('TEMPLATE_PREFIX', "../views/{$template}/");
define('TEMPLATE_ADMIN_PREFIX', "../views/{$templateAdmin}/");
define('TEMPLATE_POSTFIX', '.tpl');

// Пути к файлам шаблонов в веб-пространстве
define('TEMPLATE_WEB_PATH', "/templates/{$template}/");
define('TEMPLATE_ADMIN_WEB_PATH', "/templates/{$templateAdmin}/");
//<

//> Инициализация Smarty
require '../core/Smarty/libs/Smarty.class.php';
$smarty = new Smarty();

$smarty->setTemplateDir(TEMPLATE_PREFIX);
$smarty->setCompileDir('../core/tmp/smarty/templates_c');
$smarty->setCacheDir('../core/tmp/smarty/cache');
$smarty->setConfigDir('../core/Smarty/configs');

$smarty->assign('templateWebPath', TEMPLATE_WEB_PATH);
$smarty->assign('siteurl', SITEURL);
//<