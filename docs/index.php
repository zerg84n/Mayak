<?php
session_start();
//> Подключение конфигурационных файлов
include_once '../core/config/config.php';
include_once '../core/config/db.php';
include_once '../core/libs/main.php';
//<

// Определяем, с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
$controllerName == 'Admin' ? $controllerName = 'Admin' : $controllerName = 'Frontend';

// Язык
if($controllerName != 'Admin') {
    $dlang = q("SELECT * FROM `settings` WHERE `option_alias`='default_lang'", "main");
    (isset($_COOKIE['lang'])) ? $lang = sip($_COOKIE['lang']) : $lang = $dlang['data'][0]['value'];
	(isset($_COOKIE['npp'])) ? $npp = sip($_COOKIE['npp']) : $npp = 3;
	setcookie('lang', $lang, time()+3600*24*365, '/', SITEURL);
	setcookie('npp', $npp, time()+3600*24*365, '/', SITEURL);
	define('LANG', $lang);
	$ok = 0;
	if(isset($_COOKIE['guest'])) {
	    $g = q("SELECT * FROM `hits` WHERE `hash`='{$_COOKIE['guest']}' AND `ip`='{$_SERVER["REMOTE_ADDR"]}'", "main");
		if(count($g['data']) == 0) $ok = 1;
		unset($g);
	} else {
	    $g = q("SELECT * FROM `hits` WHERE `hash`='".md5($_SERVER['HTTP_USER_AGENT'].$_SERVER["REMOTE_ADDR"])."' AND `ip`='{$_SERVER["REMOTE_ADDR"]}'", "main");
		if(count($g['data']) == 0) $ok = 1;
		unset($g);
	}
	if($ok == 1) {
	    q("INSERT INTO `hits`(`hash`, `agent`, `ip`) VALUES ('".md5($_SERVER['HTTP_USER_AGENT'].$_SERVER["REMOTE_ADDR"])."','{$_SERVER['HTTP_USER_AGENT']}','{$_SERVER["REMOTE_ADDR"]}')", "main");
		setcookie('guest', md5($_SERVER['HTTP_USER_AGENT'].$_SERVER["REMOTE_ADDR"]), time()+3600*24*365, '/', SITEURL);
	};
	q("UPDATE `hits` SET `last_mod`=NOW() WHERE `hash`='{$_COOKIE['guest']}'", "main");
    $g = q("SELECT * FROM `hits` WHERE `hash`='{$_COOKIE['guest']}'", "main");
	setcookie('guest_id', $g['data'][0]['id'], time()+3600*24*365, '/', SITEURL);
	if($_SERVER["REMOTE_ADDR"] != $g['data'][0]['ip']) {
	    q("UPDATE `hits` SET `last_mod`=NOW(), `ip`='{$_SERVER["REMOTE_ADDR"]}', `agent`='{$_SERVER['HTTP_USER_AGENT']}', `hash`='".md5($_SERVER['HTTP_USER_AGENT'].$_SERVER["REMOTE_ADDR"])."' WHERE `hash`='{$_COOKIE['guest']}'", "main");
		$f = q("SELECT * FROM `hits` WHERE `hash`='".md5($_SERVER['HTTP_USER_AGENT'].$_SERVER["REMOTE_ADDR"])."'", "main");
		setcookie('guest', md5($_SERVER['HTTP_USER_AGENT'].$_SERVER["REMOTE_ADDR"]), time()+3600*24*365, '/', SITEURL);
		setcookie('guest_id', $f['data'][0]['id'], time()+3600*24*365, '/', SITEURL);
		$_SESSION['guest'] = $f['data'][0];
	} else {
        $_SESSION['guest'] = $g['data'][0];
	}
};

// Определяем используемый экшн
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

//
require_once '../models/MainModel.php';
site_settings($smarty, $controllerName, $actionName);

loadPage($smarty, $controllerName, $actionName);