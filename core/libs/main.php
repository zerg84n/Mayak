<?php
/**
 * main.php
 * Библиотека общих функций 
 */

/**
 * Функция загрузки страницы
 *
 * @param object $smarty Объект шаблонизатора
 * @param string $controllerName Имя контроллера
 * @param string $actionName Имя экшена
 */
function loadPage($smarty, $controllerName, $actionName = 'index') {
	if(!file_exists(PATH_PREFIX . $controllerName . PATH_POSTFIX)) echo '<script>document.location.href = "/pagenotfound/";</script>';
    include_once PATH_PREFIX . $controllerName . PATH_POSTFIX;
    $not = array('', 'index', 'login', 'exit', 'ajax', 'settings');
	$ok = 1;
	foreach($not as $item) if($actionName == $item) $ok = 0;
	$controllerName == 'Admin' ? $function = 'adminpageAction' : $function = 'frontendAction';
	if($controllerName == 'Admin') $ok == 1 ? $function = 'adminpageAction' : $function = $actionName.'Action';
	if($controllerName == 'Admin') {
		$letters = q("SELECT COUNT(*) AS cnt FROM `contacts` WHERE `visible`='0'", "main");
		$orders = q("SELECT COUNT(*) AS cnt FROM `orders` WHERE `visible`='0'", "main");
		$opts = q("SELECT COUNT(*) AS cnt FROM `opts` WHERE `visible`='0'", "main");
		$arr = array('letters' => $letters['data'][0]['cnt'], 'opts' => $opts['data'][0]['cnt'], 'ordrs' => $orders['data'][0]['cnt'], 'all' => (int)$letters['data'][0]['cnt'] + (int)$orders['data'][0]['cnt'] + (int)$opts['data'][0]['cnt']);
		$smarty->assign('notify', $arr);
	};
    $function($smarty);
}

/**
 * Загрузка шаблона
 *
 * @param object $smarty Объект шаблонизатора
 * @param string $templateName Имя шаблона
 */
function loadTemplate($smarty, $templateName) {
    $smarty->display($templateName . TEMPLATE_POSTFIX);
}

function rawq($query, $dest="main") {
	global $db;
	$i = 0;
	$mysqli = new mysqli($db[$dest]['host'], $db[$dest]['user'], $db[$dest]['pass'], $db[$dest]['name']);
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    };
	$mysqli->set_charset('UTF8');
	$res = $mysqli->query($query);
	if($res === true || $res === false) {
	    $result = $res;
	} else {
	    while($row = $res->fetch_assoc()) {
		    $result[$i] = $row;
			$i++;
		}
		$res->close();
	}
	$mysqli->close();
	return $result;
}

/**
 * Выполнение sql-Запроса
 *
 * @param string $query sql-запрос
 * @param string $dest нужная нам БД
 * @return $result array Результат выполнения sql-запроса
 */
function q($query, $dest="main") {
	global $db;
	$mysqli = new mysqli($db[$dest]['host'], $db[$dest]['user'], $db[$dest]['pass'], $db[$dest]['name']);
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    };
	$mysqli->set_charset('UTF8');
	$i = 0;
	$qq = explode(" ", $query);
	$res = $mysqli->query($query);
	if($res) {
		$result['status'] = 'success';
		if(mb_strtolower($qq[0], 'UTF-8') == 'select') {
		    $result['count'] = $res->num_rows;
		    if($result['count'] > 0) {
		    	while($row = $res->fetch_assoc()) {
		    		$result['data'][$i] = $row;
		    		$i++;
		    	}
		    } else {
		    	$result['data'] = array();
		    }
		    $res->close();
		};
	} else {
		$result['status'] = $mysqli->error;
	}
	$mysqli->close();
	return $result;
}

/**
 * Выполнение sql-Мультизапроса
 *
 * @param string $query sql-запрос
 * @param string $dest нужная нам БД
 * @return $result array Результат выполнения sql-запроса
 */
function mq($query, $dest="main") {
	global $db;
	$mysqli = new mysqli($db[$dest]['host'], $db[$dest]['user'], $db[$dest]['pass'], $db[$dest]['name']);
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    };
	$mysqli->set_charset('UTF8');
	$res = $mysqli->multi_query($query);
	$res ? $result['status'] = 'success' : $result['status'] = 'error';
	return $result;
}

/**
 * Функция отладки. Останавливает программу выводя значение переменной $value
 *
 * @param variant $value Переменная для вывода на страницу
 * @param integer $die Флаг, если == 1, то останавливает работу сайта
 */
function d($value = null, $die = 1) {
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';
    
    if($die) die;
}

/**
 * Обрезка длинного текста до n символов
 *
 * @param string $string Исходная строка
 * @param integer $maxlen До какого количества символов нужно обрезать
 * @return string $cutStr Обрезанная строка
 */
function cutString($string, $maxlen) {
	if(trim($string) != '')
	{
	    //$string = stripslashes(strip_tags($string));
	    $len = (mb_strlen($string) > $maxlen) ? mb_strripos(mb_substr($string, 0, $maxlen), ' ') : $maxlen;
        $cutStr = mb_substr($string, 0, $len);
        return (mb_strlen($string) > $maxlen) ? $cutStr.'...' : $cutStr;
	} else {
	    return $string;
	}
}

/*
 * Обрабатываем текст перед тем, как занести его в базу
 * @param $txt string Исходная строка
 * @return string $txt Обработанная строка
 */
function sip($txt) {
    $txt = strip_tags($txt);
    $txt = htmlspecialchars($txt);
    $txt = stripslashes($txt);
    $txt = addslashes($txt);
    return $txt;
}

/*
 * Убираем экранирование из данных БД перед показом на странице
 * @param $txt string строка из БД
 * @return string $txt Обработанная строка
 */
function isip($txt) {
    $txt = stripslashes($txt);
	$txt = htmlspecialchars_decode($txt);
    return html_entity_decode($txt);
}

/*
 * TimeStamp в читаемом виде
 * 
 * @return string $date Время в читаемом виде
 */
function timeNow() {
		$dt = new DateTime();
		$now = $dt->format('H:i');
        $td = date('d').'.'.date('m').'.'.date('Y');
		$date = $td.' - '.$now;
		
	return $date;
}

/*
 * Переводим дату из UNIXTIMESTAMP в читаемый вид
 * @param $date string
 * @return string Время в читаемом виде
 */
function normaldate($date) {
    $date = new DateTime($date);
	return $date->format('Y-m-d');
}


function rusdate($date) {
	$rus = array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
	$onlydate = explode(" ", $date);
	$date_part = explode("-", $onlydate[0]);
	$rusdate = ((int)$date_part[2]).' '.($rus[(((int)$date_part[1])-1)]).' '.((int)$date_part[0]).' в '.$onlydate[1];
	return $rusdate;
}

function rusdate2($date) {
	$onlydate = explode(" ", $date);
	$date_part = explode("-", $onlydate[0]);
	$rusdate = $date_part[2].'.'.$date_part[1].'.'.$date_part[0];
	return $rusdate;
}

function rusdate3($date) {
	$onlydate = explode(" ", $date);
	$date_part = explode("-", $onlydate[0]);
	$tt = explode(":", $onlydate[1]);
	$rusdate = $date_part[2].'.'.$date_part[1].'.'.$date_part[0].' в '.$tt[0].':'.$tt[1];
	return $rusdate;
}

function endate($date) {
	$onlydate = explode(" ", $date);
	return $onlydate[0];
}

/*
 * Переводим кириллицу в транслит
 * @param $string string Строка с русскими символами
 * @return string Строка в транслите
 */
function rus2translit($string) {
    $converter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    );
    return strtr($string, $converter);
}

/*
 * Формируем ЧПУ из строки, переведённой в транслит
 * @param $str string Исходная строка в транслите
 * @return $str string Изменённая строка для вставки в адресную строку
 */
function str2url($str) {
	$str = rus2translit($str);
    $str = strtolower($str);
    $str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
	$str = trim($str);
    $str = trim($str, "-");
	$pos = strpos($str, "-");
	if($pos === false) $str = '-'.$str;
	
    return '/'.$str.'/';
}

/*
 * Вытаскиваем из текста первые одно-два предложения
 * @param $str string Исходная строка
 * @param $num integer Количество символов для предварительной обрезки текста
 * @return $str string Изменённая строка
 */
function croptext($str, $num) {
	$healthy = array("&amp;", "&lt;", "&gt;", "&quot;", "&#039;");
	$yummy = array("&", "<", ">", '"', "'");
	$str = str_replace($healthy, $yummy, $str);
	$str = strip_tags($str);
	if(trim($str) != '') {
	    $separator = array('?', '!', '.');
	    $str = preg_replace("'<pre[^>]*?>.*?</pre>'si", "",$str);
		$str2 = $str;
		$str = strip_tags($str);
	    $str = substr($str, 0, $num);
        $i = strlen($str);
        do {$i--;} while(!in_array($str[$i], $separator) && $i >= 0);
        $string = substr($str, 0, ($i+1));
	    (strlen($string) <= 1) ? $str = cutString($str2, $num) : $str = $string;
	    return html_entity_decode($str);
	} else {
	    return $str;
	}
}

function descr_unsafe($text) {
	$healthy = array("&amp;", "&lt;", "&gt;", "&quot;", "&#039;");
	$yummy = array("&", "<", ">", '"', "'");
	return str_replace($healthy, $yummy, $text);
}
/*
 * Вытаскиваем из текста первые одно-два предложения без обрезки тегов
 * @param $str string Исходная строка
 * @param $num integer Количество символов для предварительной обрезки текста
 * @return $str string Изменённая строка
 */
function croptext2($str, $num) {
	if(trim($str) != '') {
	    $separator = array('?', '!', '.');
	    $str2 = $str;
	    $str = substr($str, 0, $num);
        $i = strlen($str);
        do {$i--;} while(!in_array($str[$i], $separator) && $i >= 0);
        $string = substr($str, 0, ($i+1));
	    (strlen($string) <= 1) ? $str = cutString($str2, $num) : $str = $string;
	    return html_entity_decode($str);
	} else {
	    return $str;
	}
}

/**
 * Склонение слов относительно их количества(указываем 3 формы слова)
 * 
 * @example echo rustxt('число', 'числа', 'чисел', $count);
 *
 * @param string $word1 единственное число
 * @param string $word2 от 2 до 4 включительно
 * @param string $word3 5 и более
 * @param integer $count количество
 *
 * @return string $plural "склонённое" слово
 */
function rustxt($word1, $word2, $word3, $n) {
    $plural = $n%10==1&&$n%100!=11?$word1:($n%10>=2&&$n%10<=4&&($n%100<10||$n%100>=20)?$word2:$word3);
	return $plural;
}

function rgb($red="0:255",$green="0:255",$blue="0:255") {
    $r = explode(":", $red);
	$g = explode(":", $green);
	$b = explode(":", $blue);
	return sprintf( '#%02X%02X%02X', rand((int)$r[0],(int)$r[1]), rand((int)$g[0],(int)$g[1]), rand((int)$b[0],(int)$b[1]) );
}

/**
 * Функция для загрузки файлов на сервер
 *
 * @param file $file Загружаемый файл
 * @return string $success Сообщение об итоге операции
 */
function uploadFile($file, $dir='general', $crop=array(), $d='') {
    $tmp = $file['tmp_name'];
	$ext = substr($file['name'], strrpos($file['name'], '.') + 1);
	$d == 'sitelogo' ? $actual_image_name = 'logo.'.$ext : $actual_image_name = time().'.'.$ext;
	$dir2 = explode("-", $dir);
	if($dir2[0] == 'goods') {
	    if(!is_dir('documents/goods')) mkdir('documents/goods', 0777);
		$dir = implode("/", $dir2);
		if($dir2[2] == 'photos') {
		    if(!is_dir('documents/goods/'.$dir)) mkdir('documents/goods/'.$dir, 0777);
		    if(!is_dir('documents/goods/'.$dir.'/m')) mkdir('documents/goods/'.$dir.'/m', 0777);
		};
	};
    // Если папка не существует - создаём её, притом с правами 777
	$dir == 'general' ? $dir = 'documents' : $dir = 'documents/'.$dir;
    if (!is_dir($dir)) mkdir($dir, 0777);
	if (!is_dir($dir.'/m')) mkdir($dir.'/m', 0777);
    //Загружаем файл в папку
    move_uploaded_file($tmp, $dir.'/'.$actual_image_name) ? $success = json_encode(array('name' => $actual_image_name, 'status' => 'success')) : $success = json_encode(array('name' => $actual_image_name, 'status' => 'error'));
	if(count($crop) > 0) {
	    include_once('../core/libs/SimpleImage.class.php');
	    if(count($crop[0]) == 2 && ((int)$crop[0][0] > 0 && (int)$crop[0][1] > 0)) tocrop($crop[0], $dir.'/'.$actual_image_name, $dir.'/'.$actual_image_name);
	    if(count($crop[1]) == 2 && ((int)$crop[1][0] > 0 && (int)$crop[1][1] > 0)) tocrop($crop[1], $dir.'/'.$actual_image_name, $dir.'/m/'.$actual_image_name);
	};
	return $success;
}

function tocrop($crop, $img, $m) {
    $image = new SimpleImage();
    $image->load($img);
    $image->cropTo((int)$crop[0], (int)$crop[1]);
    $image->save($m);
}

function garbageImage() {
	$posters = array('articles', 'goods_cat1', 'goods_cat2', 'goods_cat3', 'goods_cat4', 'goods_cat5', 'goods_cat6', 'news', 'slider');
	$photos = array('goods_cat1', 'goods_cat2', 'goods_cat3', 'goods_cat4', 'goods_cat5', 'goods_cat6');
	$arr3 = array('poster' => array(), 'photos' => array());
	$arr4 = array();
	foreach($posters as $item) {
		$arr3['poster'][$item] = array();
		foreach(rawq("SELECT * FROM `{$item}`") as $item2) array_push($arr3['poster'][$item], $item2['poster']);
	}
	foreach($photos as $item) {
	    foreach(rawq("SELECT * FROM `{$item}`") as $item2) {
		    $photos2 = explode("-", $item2['photos']);
			$arr3['photos'][$item] = array();
			foreach($photos2 as $item3) if($item3 != '') array_push($arr3['photos'][$item], $item3);
		}
	}
	foreach($posters as $item) {
	    $ok = 0;
		foreach($photos as $item4) {
		    if($item == $item4) {
			    $ok = 1;
				break;
			};
		}
		$ok == 1 ? $dir = 'documents/goods/'.$item : $dir = 'documents/'.$item;
		$dir2 = scandir($dir);
		foreach($dir2 as $item2) {
		    $ok = 0;
			if($item2 == '' && $item2 == '.' && $item2 == '..' && $item2 == 'm') {
			    $ok = 1;
			} else {
			    foreach($arr3['poster'][$item] as $item3) {
			    	if($item2 == $item3) {
			    	    $ok = 1;
			    		break;
			    	};
			    }
			}
			if($ok == 0) {
			    unlink($dir.'/'.$item2);
				unlink($dir.'/m/'.$item2);
			};
		}
	}
	foreach($photos as $item) {
	    $dir = scandir('documents/goods/'.$item);
		foreach($dir as $item2) {
		    $ok = 0;
			if($item2 == '' && $item2 == '.' && $item2 == '..' && $item2 == 'm') {
			    $ok = 1;
			} else {
			    foreach($arr3['poster'][$item] as $item3) {
			    	if($item2 == $item3) {
			    	    $ok = 1;
			    		break;
			    	};
			    }
			}
			if($ok == 0) {
			    unlink('documents/goods/'.$item.'/photos/'.$item2);
				unlink('documents/goods/'.$item.'/photos/m/'.$item2);
			};
		}
	}
}

function garbageImage2($item) {
	$posters = array('articles', 'goods_cat1', 'goods_cat2', 'goods_cat3', 'goods_cat4', 'goods_cat5', 'goods_cat6', 'news', 'slider');
	$photos = array('goods_cat1', 'goods_cat2', 'goods_cat3', 'goods_cat4', 'goods_cat5', 'goods_cat6');
	$arr3 = array('poster' => array(), 'photos' => array());
	$arr4 = array();
	$ok = 0;
	$ok2 = 0;
	$ok3 = 0;
	foreach($posters as $item2) {
	    if($item == $item2) {
		    $ok3 = 1;
			break;
		};
	}
	if($ok3 == 1) {
        $arr3['poster'][$item] = array();
        foreach(rawq("SELECT * FROM `{$item}`") as $item2) array_push($arr3['poster'][$item], $item2['poster']);
        foreach($photos as $item2) {
	        if($item == $item2) {
	    	    $ok2 = 1;
	    	    break;
	    	};
	    }
	    if($ok2 == 1) {
	        foreach(rawq("SELECT * FROM `{$item}`") as $item2) {
	    	    $photos2 = explode("-", $item2['photos']);
	    		$arr3['photos'][$item] = array();
	    		foreach($photos2 as $item3) if($item3 != '') array_push($arr3['photos'][$item], $item3);
	    	}
	    };
        foreach($photos as $item4) {
	        if($item == $item4) {
	    	    $ok = 1;
	    	    break;
	    	};
	    }
        $ok == 1 ? $dir = 'documents/goods/'.$item : $dir = 'documents/'.$item;
        $dir2 = scandir($dir);
        foreach($dir2 as $item2) {
            $ok = 0;
        	if($item2 == '' && $item2 == '.' && $item2 == '..' && $item2 == 'm') {
        	    $ok = 1;
        	} else {
        	    foreach($arr3['poster'][$item] as $item3) {
        	    	if($item2 == $item3) {
        	    	    $ok = 1;
        	    		break;
        	    	};
        	    }
        	}
        	if($ok == 0) {
        	    unlink($dir.'/'.$item2);
        		unlink($dir.'/m/'.$item2);
        	};
        }
	    if($ok2 == 1) {
	        $dir = scandir('documents/goods/'.$item);
	    	foreach($dir as $item2) {
	    	    $ok = 0;
	    		if($item2 == '' && $item2 == '.' && $item2 == '..' && $item2 == 'm') {
	    		    $ok = 1;
	    		} else {
	    		    foreach($arr3['poster'][$item] as $item3) {
	    		    	if($item2 == $item3) {
	    		    	    $ok = 1;
	    		    		break;
	    		    	};
	    		    }
	    		}
	    		if($ok == 0) {
	    		    unlink('documents/goods/'.$item.'/photos/'.$item2);
	    			unlink('documents/goods/'.$item.'/photos/m/'.$item2);
	    		};
	    	}
	    }
	}
}