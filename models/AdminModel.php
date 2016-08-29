<?php

/**
 * AdminModel.php
 * 
 * Общая модель для админ-панели
 */

/**
 * Авторизация
 * 
 * @param array $data Данные с формы
 * @return string $result сообщение об итоге операции
 */
function login($data) {
	$user = q("SELECT * FROM `settings` WHERE `option_alias`='admin_login' OR `option_alias`='admin_password' ORDER BY `option_alias`", "main");
	if($data['email'] == $user['data'][0]['value'] && md5(md5($data['password'].'-king_watsup').'-king_watsup') == $user['data'][1]['value']) {
		unset($user['data'][0]['password']);
		$_SESSION['admin']['nickname'] = $user['data'][0]['value'];
		$_SESSION['admin']['auth'] = true;
		$result = 'success';
	} else {
		$result = 'error';
	}
	return $result;
}

/**
 * Добавление/редактирование/удаление
 * 
 * @param array $data Данные с формы
 * @param string $action Действие
 * @return string $result['status'] сообщение об итоге операции
 */
function item($data, $action) {
	switch($action) {
		case('create'):
		    $query = "INSERT INTO `{$data['table']}` (";
			$tbl = $data['table'];
			if($tbl == 'custompages' || $tbl == 'menu') {
			    (trim($data['link_ru']) == '') ? $data['link_ru'] = str2url($data['title_ru']) : $data['link_ru'] = $data['link_ru'];
				(trim($data['link_en']) == '') ? $data['link_en'] = str2url($data['title_en']) : $data['link_en'] = $data['link_en'];
			};
			if($tbl == 'menu' || $tbl == 'slider') {
				$last = q("SELECT * FROM `{$tbl}` ORDER BY `pos` DESC LIMIT 1", "main");
				$data['pos'] = (int)$last['data'][0]['pos'] + 1;
			};
			unset($data['table']);
			$cells = "";
			$values = "";
			foreach($data as $key => $val) {
				$cells .= "`{$key}`, ";
				$values .= "'{$val}', ";
			}
			$query .= mb_substr($cells, 0, (mb_strlen($cells, 'UTF-8')-2), 'UTF-8').") VALUES (".mb_substr($values, 0, (mb_strlen($values, 'UTF-8')-2), 'UTF-8').")";
			$result = q($query, "main");
			break;
		case('update'):
			$query = "UPDATE `{$data['table']}` SET ";
			$tbl = $data['table'];
			if($tbl == 'custompages' || $tbl == 'menu') {
			    (trim($data['link_ru']) == '') ? $data['link_ru'] = str2url($data['title_ru']) : $data['link_ru'] = $data['link_ru'];
				(trim($data['link_en']) == '') ? $data['link_en'] = str2url($data['title_en']) : $data['link_en'] = $data['link_en'];
			};
			$item = $data['item'];
			$tt = rawq("SELECT `last_mod` FROM `{$tbl}` WHERE `id`='{$item}'");
			if($tt) $data['last_mod'] = "NOW()";
			unset($data['table']);
			unset($data['item']);
			if($tbl == 'news' || $tbl == 'articles' || $tbl == 'goods') {
			    $item2 = q("SELECT * FROM `{$tbl}` WHERE `id`='{$item2}'", "main");
			    if($item2['data'][0]['poster'] != sip($data['poster'])) {
				    unlink("documents/{$tbl}/{$item2['data'][0]['poster']}");
					unlink("documents/{$tbl}/m/{$item2['data'][0]['poster']}");
				};
			};
			$update = "";
			foreach($data as $key => $val) {
			    if($key == 'last_mod') {
				    $update .= "`{$key}`={$val}, ";
				} else {
				    $update .= "`{$key}`='{$val}', ";
				}
			}
			$query .= mb_substr($update, 0, (mb_strlen($update, 'UTF-8')-2), 'UTF-8')." WHERE `id`='{$item}'";
			$result = q($query, "main");
			garbageImage2($tbl);
			break;
		case('delete'):
			if($data['table'] == 'menu' || $data['table'] == 'slider') {
			    q("DELETE FROM `{$data['table']}` WHERE `id`='{$data['item']}'", "main");
				$menu = q("SELECT * FROM `{$data['table']}` ORDER BY `pos`", "main");
				$q = "";
				foreach($menu['data'] as $key => $val) $q .= "UPDATE `{$data['table']}` SET `pos`='".((int)$key+1)."' WHERE `id`='{$val['id']}';";
				$result = mq($q, "main");
			} else {
			    if($data['table'] == 'news' || $data['table'] == 'articles' || $data['table'] == 'goods') {
			        $item2 = q("SELECT * FROM `{$data['table']}` WHERE `id`='{$data['item']}'", "main");
			    	unlink("documents/{$data['table']}/{$item2['data'][0]['poster']}");
			        unlink("documents/{$data['table']}/m/{$item2['data'][0]['poster']}");
			    };
				$result = q("DELETE FROM `{$data['table']}` WHERE `id`='{$data['item']}'", "main");
			}
			garbageImage2($tbl);
			break;
		case('settingsupdate'):
            unset($data['table']);
            unset($data['item']);
			$pass = q("SELECT * FROM `settings` WHERE `option_alias`='admin_password'", "main");
			if(trim(chop(sip($data['admin_password']))) == '' || md5(md5($data['admin_password'].'-king_watsup').'-king_watsup') == $pass['data'][0]['value']) {
				unset($data['admin_password']);
			} else {
				$data['admin_password'] = md5(md5($data['admin_password'].'-king_watsup').'-king_watsup');
			}
			$query = "";
            foreach($data as $key => $val) $query .= "UPDATE `settings` SET `value`='{$val}' WHERE `option_alias`='{$key}';";
			$result = mq($query, "main");
			break;
		case('visible'):
		    $item = q("SELECT * FROM `{$data['table']}` WHERE `id`='{$data['item']}'", "main");
			(int)$item['data'][0]['visible'] == 1 ? $vis = 0 : $vis = 1;
			$result = q("UPDATE `{$data['table']}` SET `visible`='{$vis}' WHERE `id`='{$data['item']}'", "main");
			break;
		case('pos'):
		    $act = explode("-", $data['item']);
			$item = q("SELECT * FROM `{$data['table']}` WHERE `id`='{$act[1]}'", "main");
			if($act[0] == 'plus') {
				q("UPDATE `{$data['table']}` SET `pos`='".((int)$item['data'][0]['pos'])."' WHERE `pos`='".((int)$item['data'][0]['pos']-1)."'", "main");
				q("UPDATE `{$data['table']}` SET `pos`='".((int)$item['data'][0]['pos']-1)."' WHERE `id`='".($item['data'][0]['id'])."'", "main");
			} else {
				q("UPDATE `{$data['table']}` SET `pos`='".((int)$item['data'][0]['pos'])."' WHERE `pos`='".((int)$item['data'][0]['pos']+1)."'", "main");
				q("UPDATE `{$data['table']}` SET `pos`='".((int)$item['data'][0]['pos']+1)."' WHERE `id`='".($item['data'][0]['id'])."'", "main");
			}
			$result = 'success';
			break;
		case('editinfo'):
		    $item = q("SELECT * FROM `{$data['table']}` WHERE `id`='{$data['item']}'", "main");
			$i = 0;
			$rs = array();
			foreach($item['data'][0] as $key => $val) {
				$rs[$i]['name'] = $key;
				$rs[$i]['value'] = $val;
				$i++;
			}
			$result['status'] = json_encode($rs);
			break;
		case('changesitelogo'):
			$result['status'] = uploadFile($_FILES['file'], 'general', array(array(186,105)), 'sitelogo');
		    break;
		case('uploadposter'):
			$size = explode("-", sip($data['size']));
			$o = explode(":", $size[0]);
			$m = explode(":", $size[1]);
			echo uploadFile($_FILES['file'], sip($data['tbl']), array(array($o[0],$o[1]), array($m[0], $m[1])));
		    break;
		case('uploadgoodphoto'):
			$size = explode("-", sip($data['size']));
			$o = explode(":", $size[0]);
			$m = explode(":", $size[1]);
			echo uploadFile($_FILES['file'], sip($data['tbl']).'-photos', array(array($o[0],$o[1]), array($m[0], $m[1])));
		    break;
		case('delgoodphoto'):
			unlink('documents/goods/'.$data['tbl'].'/photos/'.$data['item']);
			unlink('documents/goods/'.$data['tbl'].'/photos/m/'.$data['item']);
			$result['status'] = 'success';
		    break;
		case('pricesupload'):
		    $arr = array(
		        'xlsfiz' => array('title' => '.xls для физ.лиц', 'filename' => 'fiz.xls', 'status' => ''),
		    	'zipfiz' => array('title' => '.zip для физ.лиц', 'filename' => 'fiz.zip', 'status' => ''),
		    	'xlsopt' => array('title' => '.xls для оптовиков', 'filename' => 'opt.xls', 'status' => ''),
		    	'zipopt' => array('title' => '.zip для оптовиков', 'filename' => 'opt.zip', 'status' => '')
		    );
			$dir = 'documents/prices';
			$debug = false;
			$debug ? $add = '<script>setTimeout(function(){document.location.href = "/admin/settings/";},3000);</script></body></html>' : $add = '<script>document.location.href = "/admin/settings/";</script></body></html>';
			if(!is_dir($dir)) mkdir($dir, 0777);
			$str = '<!doctype html><head><meta charset="utf8"><title>Загрузка прайс-листов</title><link href="/templates/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"></head><body>';
			foreach($arr as $key => $val) {
			    if($debug) {
			        $_FILES[$key]['error'] == 0
                    ?
                    (move_uploaded_file($_FILES[$key]['tmp_name'], $dir.'/'.$val['filename']) ? $arr[$key]['status'] = '<span style="color: #00AA00; font-weight: normal; font-size: 12px;"><i class="fa fa-check"></i> '.$val['title'].' успешно загружен!<br />' : $arr[$key]['status'] = '<span style="color: #AA0000; font-weight: normal; font-size: 12px;"><i class="fa fa-close"></i> '.$val['title'].' не был загружен!<br />')
			        :
			        (file_exists($dir.'/'.$val['filename']) ? $arr[$key]['status'] = '<span style="color: #00AA00; font-weight: normal; font-size: 12px;"><i class="fa fa-check"></i> '.$val['title'].' был загружен ранее!<br />' : $arr[$key]['status'] = '<span style="color: #AA0000; font-weight: normal; font-size: 12px;"><i class="fa fa-close"></i> '.$val['title'].' не был загружен!<br />');
				} else {
				    move_uploaded_file($_FILES[$key]['tmp_name'], $dir.'/'.$val['filename']);
				}
				$str .= $arr[$key]['status'];
			}
			$str .= $add;
			echo $str;
		    break;
	}
	return $result['status'];
}

/**
 * Выбираем контент для показа в таблице
 * 
 * @param string $tbl Таблица БД
 * @param integer $p Текущая страница
 * @return array $content['data'] Массив с информацией
 */
function content($tbl, $p=1, $db="main") {
	$perpage = q("SELECT * FROM `settings` WHERE `option_alias`='admin_items_per_page'", "main");
	$start = ((int)$p * (int)$perpage['data'][0]['value']) - (int)$perpage['data'][0]['value'];
	($tbl == 'menu' || $tbl == 'slider') ? $desc = '' : $desc = 'DESC';
	($tbl == 'menu' || $tbl == 'slider') ? $order = 'pos' : $order = 'id';
	$content = q("SELECT * FROM `{$tbl}` ORDER BY `{$order}` {$desc} LIMIT {$start},{$perpage['data'][0]['value']}", $db);
	foreach($content['data'] as $key => $val) {
		if(isset($val['description'])) {
			$content['data'][$key]['small_description'] = croptext($val['description'], 400);
			$content['data'][$key]['description'] = descr_unsafe($val['description']);
		};
		if(isset($val['whenadd'])) $content['data'][$key]['whenadd'] = rusdate($val['whenadd']);
		if($tbl == 'contacts' || $tbl == 'bugtracker') {
			$content['data'][$key]['name'] = descr_unsafe($val['name']);
			$content['data'][$key]['email'] = descr_unsafe($val['email']);
			if($tbl == 'bugtracker') $content['data'][$key]['title'] = descr_unsafe($val['title']);
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
function pages($tbl, $p=1, $db="main") {
	$perpage = q("SELECT * FROM `settings` WHERE `option_alias`='admin_items_per_page'", "main");
	($tbl == 'menu' || $tbl == 'slider') ? $desc = '' : $desc = 'DESC';
	($tbl == 'menu' || $tbl == 'slider') ? $order = 'pos' : $order = 'id';
	$allitems = q("SELECT * FROM `{$tbl}` ORDER BY `{$order}` {$desc}", $db);
	$pp = (int)$perpage['data'][0]['value'];
	$all = (int)$allitems['count'];
	$all%$pp == 0 ? $allpages = $all/$pp : $allpages = (($all-($all%$pp))/$pp) + 1;
	$p = (int)$p;
	$pages = array('pages' => array(1, $p-1, $p-2, $p-1, $p, $p+1, $p+2, $p+1, $allpages),
                    'text' => array('Первая', 'Предыдущая', 'Страница '.($p-2), 'Страница '.($p-1), 'Страница '.$p, 'Страница '.($p+1), 'Страница '.($p+2), 'Следующая', 'Последняя'),
					'text2' => array('fa-angle-double-left', 'fa-angle-left', $p-2, $p-1, $p, $p+1, $p+2, 'fa-angle-right', 'fa-angle-double-right')
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