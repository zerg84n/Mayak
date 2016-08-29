<?php

/**
 * AdminController.php
 *  
 * Контроллер страницы админ-панели
 * 
 */

require_once '../models/AdminModel.php';
$settings = q("SELECT * FROM `settings` WHERE `visible`='1' ORDER BY `title`", "main");
$smarty->assign('settings', $settings['data']);
foreach($settings['data'] as $item) $smarty->assign('ss_'.$item['option_alias'], $item['value']);
$settings_tinymce = q("SELECT * FROM `settings` WHERE `visible`='0' AND `template`='textarea'", "main");
foreach($settings_tinymce as $item) $smarty->assign('ss_'.$item['option_alias'], $item['value']);
if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])) $smarty->assign('admin', $_SESSION['admin']);

// Переопределение настроек для Smarty
$smarty->setTemplateDir(TEMPLATE_ADMIN_PREFIX);
$smarty->assign('templateAdminWebPath', TEMPLATE_ADMIN_WEB_PATH);

/**
 * Формирование главной страницы
 * 
 * @param object $smarty Объект шаблонизатора
 */
function indexAction($smarty) {
	($_SESSION['admin']['auth']) ? $go = '<script>document.location.href = "/admin/news/";</script>' : $go = '<script>document.location.href = "/admin/login/";</script>';
	echo $go;
}

/**
 * Формирование страницы админ-панели
 * 
 * @param object $smarty Объект шаблонизатора
 */
function adminpageAction($smarty) {
	$pages = array(
	    'news' => 'Новости',
		'articles' => 'Статьи',
		'menu' => 'Меню',
		'users' => 'Пользователи',
		'custompages' => 'Текстовые страницы',
		'contacts' => 'Письма пользователей',
		'slider' => 'Слайдер',
		'goods' => 'Товары',
		'pools' => 'Опросы',
		'newtable' => 'Новая таблица',
		'orders' => 'Заказы',
		'opts' => 'Оптовики',
		'transport' => 'Транспортные компании'
	);
	$goods = array(
        'goods_cat1' => 'Лыжи и сопутствующие товары',
        'goods_cat2' => 'Черновые мебельные заготовки',
        'goods_cat3' => 'Трехслойная отделочная доска',
        'goods_cat4' => 'Клееный пол',
        'goods_cat5' => 'Мебель',
        'goods_cat6' => 'КФК клей'
	);
	if($_SESSION['admin']['auth'] && isset($pages[sip($_GET['action'])]) && !empty($pages[sip($_GET['action'])])) {
	    isset($_GET['id']) && (int)sip($_GET['id']) > 0 ? $p = (int)sip($_GET['id']) : $p = 1;
	    if(sip($_GET['action']) == 'goods') {
		    $title = $pages[sip($_GET['action'])].' | '.$goods[sip($_GET['key'])];
			$content = content(sip($_GET['key']), $p);
			$pages = pages(sip($_GET['key']), $p);
			$modal = sip($_GET['action']).'/'.sip($_GET['key']);
			$tpl = sip($_GET['action']).'/'.sip($_GET['key']);
			$smarty->assign('goods_cat', sip($_GET['key']));
			if(isset($content[0]['score']) && sip($content[0]['score']) != '') foreach($content as $key => $val) $content[$key]['plural'] = rustxt('просмотр', 'просмотра', 'просмотров', (int)$val['score']);
		} else {
			$title = $pages[sip($_GET['action'])];
			$content = content(sip($_GET['action']), $p);
			$pages = pages(sip($_GET['action']), $p);
			$modal = sip($_GET['action']);
			$tpl = sip($_GET['action']);
			if(isset($content[0]['score']) && sip($content[0]['score']) != '') foreach($content as $key => $val) $content[$key]['plural'] = rustxt('просмотр', 'просмотра', 'просмотров', (int)$val['score']);
			if(sip($_GET['action']) == 'slider') $smarty->assign('goods_cats', $goods);
			if(sip($_GET['action']) == 'pools') {
			    foreach($content as $key => $val) {
				    $content[$key]['info']['ru'] = explode("|", $val['answers_ru']);
					$content[$key]['info']['en'] = explode("|", $val['answers_en']);
					$content[$key]['info']['cnt'] = explode("|", $val['answers_count']);
					$content[$key]['info']['summ'] = 0;
					foreach($content[$key]['info']['cnt'] as $key2 => $val2) $content[$key]['info']['summ'] += (int)$val2;
					foreach($content[$key]['info']['cnt'] as $key2 => $val2) {
					    $content[$key]['info']['percent'][$key2] = round(((int)$content[$key]['info']['cnt'][$key2]/(int)$content[$key]['info']['summ'])*100, 2);
						$content[$key]['info']['color'][$key2] = rgb("50:200","50:200","50:200");
					}
				}
			};
		}
		$smarty->assign('title', $title);
	    $smarty->assign(sip($_GET['action']), $content);
	    $smarty->assign('pages', $pages);
	    $smarty->assign('modal', file_get_contents('../views/admin/'.$modal.'/form.tpl'));
	    loadTemplate($smarty, 'header');
	    loadTemplate($smarty, $tpl.'/main');
	    loadTemplate($smarty, 'footer');
	} else {
		echo '<script>document.location.href = "/admin/login/";</script>';
	}
}

/**
 * Формирование страницы входа
 * 
 * @param object $smarty Объект шаблонизатора
 */
function loginAction($smarty) {
	if($_SESSION['admin']['auth']) echo '<script>document.location.href = "/admin/";</script>';
	$smarty->assign('title', 'Вход');
	loadTemplate($smarty, 'login');
}

/**
 * Формирование страницы выхода
 * 
 * @param object $smarty Объект шаблонизатора
 */
function exitAction($smarty) {
	unset($_SESSION['admin']);
	session_destroy();
	echo '<script>document.location.href = "/admin/";</script>';
}

/**
 * Формирование страницы обработчика ajax-запросов в админ-панели
 * 
 * @param object $smarty Объект шаблонизатора
 */
function ajaxAction($smarty) {
	if(isset($_POST) && !empty($_POST) && trim($_POST['action']) != '' && (trim(sip($_POST['action'])) == 'login' || $_SESSION['admin']['auth'])) {
		foreach($_POST as $key => $val) {
			(sip($key) == 'description_ru' || sip($key) == 'description_en') ? $data[$key] = $val : $data[$key] = sip($val);
			if(sip($key) == 'password' && sip($_POST['table']) == 'users') $data[$key] = md5(md5(sip($val)).'123');
		}
		$action = explode("-", $data['action']);
		count($action) == 1 ? $act = $data['action'] : $act = $action[0];
		unset($data['action']);
		switch($act) {
			case('login'):
			    $result = login($data);
				break;
			case('item'):
				$result = item($data, $action[1]);
				break;
		}
		echo $result;
	} else {
		if(isset($_FILES) && !empty($_FILES) && $_SESSION['admin']['auth']) {

		} else {
		    echo '<script>document.location.href = "/admin/";</script>';
		}
	}
}

/**
 * Формирование страницы настроек
 * 
 * @param object $smarty Объект шаблонизатора
 */
function settingsAction($smarty) {
	if($_SESSION['admin']['auth']) {
		$arr = array(
		    'xlsfiz' => array('title' => '.xls для физ.лиц', 'filename' => 'fiz.xls', 'status' => ''),
			'zipfiz' => array('title' => '.zip для физ.лиц', 'filename' => 'fiz.zip', 'status' => ''),
			'xlsopt' => array('title' => '.xls для оптовиков', 'filename' => 'opt.xls', 'status' => ''),
			'zipopt' => array('title' => '.zip для оптовиков', 'filename' => 'opt.zip', 'status' => '')
		);
		foreach($arr as $key => $val) file_exists('documents/prices/'.$val['filename']) ? $arr[$key]['status'] = '<span style="color: #00AA00; font-weight: normal; font-size: 12px;"><i class="fa fa-check"></i> Загружен</span>' : $arr[$key]['status'] = '<span style="color: #AA0000; font-weight: normal; font-size: 12px;"><i class="fa fa-close"></i> Отсутствует</span>';
		$smarty->assign('pricelists',$arr);
	    $smarty->assign('title', 'Настройки');
	    loadTemplate($smarty, 'header');
	    loadTemplate($smarty, 'settings');
	    loadTemplate($smarty, 'footer');
		garbageImage();
	} else {
		echo '<script>document.location.href = "/admin/login/";</script>';
	}
}