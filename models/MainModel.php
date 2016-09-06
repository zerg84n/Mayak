<?php

/**
 * MainModel.php
 * 
 * Общая модель для фронтенда
 */

/**
 * Список настроек сайта
 * 
 * @return array $sections Массив с информацией
 */
function site_settings($smarty, $controllerName, $actionName) {
    $settings = q("SELECT * FROM `settings` WHERE `type` != 'admin' ORDER BY `title`", "main");
    $smarty->assign('settings', $settings['data']);
    foreach($settings['data'] as $item) ((int)$item['visible'] == 0 && $item['template'] == 'textarea') ? $smarty->assign('ss_'.$item['option_alias'],isip($item['value'])) : $smarty->assign('ss_'.$item['option_alias'], $item['value']);
	$menu = q("SELECT * FROM `menu` ORDER BY `pos`", "main");
	foreach($menu['data'] as $key => $val) {
		$healthy = array("/page", "/");
		$yummy = array("", "");
		$menu['data'][$key]['link_id'] = str_replace($healthy, $yummy, $val['link_ru']);
		if($menu['data'][$key]['link_id'] == '') $menu['data'][$key]['link_id'] = 'news';
		$link = explode(":", $menu['data'][$key]['link_id']);
		if(count($link) > 1) unset($menu['data'][$key]['link_id']);
	}
	$downloads = q("SELECT * FROM `downloads` ORDER BY `id` DESC LIMIT 5", "main");
	foreach($downloads['data'] as $key => $val) $downloads['data'][$key]['description'] = descr_unsafe($downloads['data'][$key]['description']);
	$smarty->assign('menu', $menu['data']);
	$smarty->assign('downloads', $downloads['data']);
	$smarty->assign('ss_siteurl', $_SERVER['SERVER_NAME']);
	$title = array('Index' => 'Новости', 'Page' => $_GET['key'], 'News' => $_GET['key'], 'Media' => 'Медиа', 'Bugtracker' => 'Баг-трекер', 'Downloads' => 'Скачать клиент', 'Reportbug' => 'Сообщить о баге', 'Contacts' => 'Связаться с нами');
    foreach($title as $key => $val) {
    	if($controllerName == $key) {
    		if($controllerName == 'Page') {
    			$title = q("SELECT `title` FROM `custompages` WHERE `link`='/".sip($val)."/'", "main");
    			$smarty->assign('title', $title['data'][0]['title']);
				$smarty->assign('title2', $title['data'][0]['title']);
    		} elseif($controllerName == 'News') {
    			$title = q("SELECT `title` FROM `news` WHERE `link`='/".sip($val)."/'", "main");
    			$smarty->assign('title', $title['data'][0]['title']);
				$smarty->assign('title2', 'Новости</li><li class="active">'.$title['data'][0]['title']);
    		} else {
    			$smarty->assign('title', $val);
				$smarty->assign('title2', $val);
    		}
    	};
    }
}

/**
 * Выбираем контент для показа в таблице
 * 
 * @param string $tbl Таблица БД
 * @param integer $p Текущая страница
 * @return array $content['data'] Массив с информацией
 */
function fcontent($tbl, $pp=3, $p=1, $add="", $db="main") {
	$start = ((int)$p * (int)$pp) - (int)$pp;
        $order='id';
        $desc='';
        
         if ($tbl=='goods_cat1') {$order = 'order'; $desc='ASC';}
         
	$content = q("SELECT * FROM `{$tbl}`{$add} ORDER BY `{$order}` {$desc} LIMIT {$start},{$pp}", $db);
	foreach($content['data'] as $key => $val) {
		if(isset($val['description_ru']) || isset($val['description_en'])) {
			$content['data'][$key]['small_description_ru'] = croptext($val['description_ru'], 400);
			$content['data'][$key]['description_ru'] = descr_unsafe($val['description_ru']);
			$content['data'][$key]['small_description_en'] = croptext($val['description_en'], 400);
			$content['data'][$key]['description_en'] = descr_unsafe($val['description_en']);
		};
		if(isset($val['whenadd'])) {
		    $content['data'][$key]['whenadd_ru'] = rusdate3($val['whenadd']);
			$content['data'][$key]['whenadd_en'] = endate($val['whenadd']);
		};
	}
	return $content['data'];
}

/**
 * Постраничная навигация в админке
 * 
 * @param string $tbl Таблица БД
 * @param integer $p Текущая страница
 * @return array $pages Массив с информацией
 */
function fpages($tbl, $pp=3, $p=1, $add = "", $db="main") {
    
	$allitems = q("SELECT * FROM `{$tbl}`{$add} ORDER BY `id` DESC", $db);
	$all = (int)$allitems['count'];
	$all%$pp == 0 ? $allpages = $all/$pp : $allpages = (($all-($all%$pp))/$pp) + 1;
	$p = (int)$p;
	$pages = array('pages' => array_reverse(array(1, $p-1, $p-2, $p-1, $p, $p+1, $p+2, $p+1, $allpages),true),
                    'text' => array_reverse(array('Первая', '←', $p-2, $p-1, $p, $p+1, $p+2, '→', 'Последняя'),true),
					'text2' => array_reverse(array('First', '←', $p-2, $p-1, $p, $p+1, $p+2, '→', 'Last'),true)
			);
	foreach($pages['pages'] as $key => $val) {
		if((int)$val < 1 || (int)$val > $allpages) {
			unset($pages['text'][$key]);
			unset($pages['text2'][$key]);
			unset($pages['pages'][$key]);
		};
	}
	return $pages;
}