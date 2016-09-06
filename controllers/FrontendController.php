<?php

/**
 * FrontendController.php
 *  
 * Контроллер фронтенда
 * 
 */

// Переопределение настроек для Smarty
$smarty->setTemplateDir(TEMPLATE_PREFIX);
$smarty->assign('templateWebPath', TEMPLATE_WEB_PATH);
$smarty->assign('lang', LANG);
include '../core/config/'.LANG.'.php';
$smarty->assign('text',$text);
(isset($_COOKIE['cartsumm']) && trim(sip($_COOKIE['cartsumm'])) != '') ? $cartsumm = trim(sip($_COOKIE['cartsumm'])) : $cartsumm = 0;
$smarty->assign('cartsumm',$cartsumm);

/**
 * Формирование главной страницы
 * 
 * @param object $smarty Объект шаблонизатора
 */
function frontendAction($smarty) {
    trim(sip($_GET['controller'])) == '' ? $controller = 'index' : $controller = sip($_GET['controller']);
	$tpl = $controller;
	$arr = array('ru', 'en');
	$napp = array(3,4,5,6);
	switch($controller) {
	    case('index'):
		    $pools = q("SELECT * FROM `pools` WHERE `visible`='1' ORDER BY `id` DESC", "main");
			$poolscnt = array();
			$up = explode("|", $_SESSION['guest']['pools']);
			foreach($up as $key2 => $val2) {
			    $up2 = explode("-", $val2);
				$upools[$key2]['id'] = (int)$up2[0];
				$upools[$key2]['answer'] = (int)$up2[1];
			}
			foreach($pools['data'] as $key3 => $val3) {
			    $pools['data'][$key3]['answers']['ru'] = explode("|", $val3['answers_ru']);
				$pools['data'][$key3]['answers']['en'] = explode("|", $val3['answers_en']);
				$pools['data'][$key3]['answers']['cnt'] = explode("|", $val3['answers_count']);
				array_push($poolscnt, 0);
				foreach($pools['data'][$key3]['answers']['cnt'] as $item) $poolscnt[$key3] += (int)$item;
				foreach($pools['data'][$key3]['answers']['cnt'] as $key4 => $val4) {
				    $pools['data'][$key3]['answers']['percent'][$key4] = round(((int)$val4/(int)$poolscnt[$key3])*100, 2);
					$pools['data'][$key3]['answers']['color'][$key4] = rgb("0:200","0:200","0:200");
				}
				foreach($upools as $key4 => $val4) {
				    if((int)$val3['id'] == (int)$val4['id']) {
					    $pools['data'][$key3]['already']['answer'] = (int)$val4['answer'];
					};
				}
			}
			$smarty->assign('poolscnt', $poolscnt);
			$smarty->assign('pools', $pools['data']);
		    $news = q("SELECT * FROM `news` WHERE `visible`='1' ORDER BY `id` DESC LIMIT 3", "main");
			$articles = q("SELECT * FROM `articles` WHERE `visible`='1' ORDER BY `id` DESC LIMIT 2", "main");
			$slider = q("SELECT * FROM `slider` ORDER BY `pos`", "main");
			$arr2 = array();
			$k = 0;
			for($i = 1; $i <= 6; $i++) {
			    $arr2[($i-1)] = q("SELECT * FROM `goods_cat{$i}` ORDER BY `order` ASC, `id` DESC", "main");
				foreach($arr2[($i-1)]['data'] as $key => $val) {
				    $arr2[($i-1)]['data'][$key]['good_cat'] = 'goods_cat'.$i;
					$pr = explode("-", $val['price']);
					if(count($pr) > 1) $arr2[($i-1)]['data'][$key]['price'] = $pr[0];
				}
			}
			for($m = 0; $m <= 10; $m++) {
				for($l = 0; $l < 6; $l++) {
				    if(isset($arr2[$l]['data'][$m]) && !empty($arr2[$l]['data'][$m])) {
				    	$goods['data'][$k] = $arr2[$l]['data'][$m];
                    	$k++;
                    };
				}
				if($k >= 8) break;
			}
			$goods['count'] = count($goods['data']);
			$goods['status'] = 'success';
			foreach($goods['data'] as $key => $val) {
			    $goods['data'][$key]['small_description_ru'] = croptext($goods['data'][$key]['description_ru'], 200);
			    $goods['data'][$key]['small_description_en'] = croptext($goods['data'][$key]['description_en'], 200);
			}
			foreach($news['data'] as $key => $val) {
			    $news['data'][$key]['small_description_ru'] = croptext($news['data'][$key]['description_ru'], 400);
			    $news['data'][$key]['small_description_en'] = croptext($news['data'][$key]['description_en'], 400);
			}
            foreach($slider['data'] as $key2 => $val2) {
                foreach($arr as $key => $val) $slider['data'][$key2]['description_'.$val] = isip($slider['data'][$key2]['description_'.$val]);
            }
			$smarty->assign('news', $news['data']);
			$smarty->assign('articles', $articles['data']);
			$smarty->assign('title_ru', 'Главная');
			$smarty->assign('title_en', 'Home');
			$smarty->assign('slider', $slider['data']);
			$smarty->assign('goods', $goods['data']);
			foreach($arr as $key => $val) {
				$smarty->assign('keywords_'.$val, 'Интернет-магазин Маяк, лыжи, главная');
				$smarty->assign('descr_'.$val, 'Лыжная фабрика Маяк – молодая, динамично развивающаяся компания. Основное направление деятельности предприятия – это производство и продажа промысловых охотничьих лыж.');
			}
			break;
	    case('catalogue'):
		    $pp = 16;
			$tru = 'Каталог';
			$ten = 'Catalogue';
                       // var_dump($_GET);
                       // die();
			if(isset($_GET['key']) && trim(sip($_GET['key'])) != '') {
			    if(isset($_GET['action']) && trim(sip($_GET['action'])) == 'item') {
				    $plink = '/'.$controller.'/'.sip($_GET['key']).'/'.sip($_GET['action']).'/'.sip($_GET['id']).'/';
					$tpl = 'item';
					$item = q("SELECT * FROM `".sip($_GET['key'])."` WHERE `id`='".sip($_GET['id'])."'");
                                        
					$item['data'][0]['description_ru'] = isip($item['data'][0]['description_ru']);
					$item['data'][0]['description_en'] = isip($item['data'][0]['description_en']);
					$photos = explode("-", $item['data'][0]['photos']);
					unset($item['data'][0]['photos']);
					foreach($photos as $key => $val) if(trim($val) == '') unset($photos[$key]);
					$item['data'][0]['photos'] = $photos;
					if(isset($item['data'][0]['rostovka'])) {
					    $rostovka = explode("-",$item['data'][0]['rostovka']);
						unset($item['data'][0]['rostovka']);
						$item['data'][0]['rostovka'] = $rostovka;
					    $rostovka = explode("-",$item['data'][0]['width']);
						unset($item['data'][0]['width']);
						$item['data'][0]['width'] = $rostovka;
					    $rostovka = explode("-",$item['data'][0]['price']);
						unset($item['data'][0]['price']);
						$item['data'][0]['price'] = $rostovka;
					};
                                        if (isset($item['data'][0]['options'])){
                                            $options = explode(",", $item['data'][0]['options']);
                                            $i=1;
                                            $item['data'][0]['options']=array();
                                           //Prepare options from string
                                            foreach ($options as $value) {
                                                if(!empty($value)){ $item['data'][0]['options']['option'.$i]=$value;
                                                $i++;}

                                            }
                                           
                                            
                                        }
					$item['data'][0]['cat'] = sip($_GET['key']);
                                        //var_dump($item);
                                        //die();
					$smarty->assign('good', $item['data'][0]);
					$smarty->assign('photodir', sip($_GET['key']));
					$tru .= ' | '.$item['data'][0]['title_ru'];
					$ten .= ' | '.$item['data'][0]['title_en'];
					$items = q("SELECT * FROM `".sip($_GET['key'])."` WHERE `id`!='".sip($_GET['id'])."'");
					if(count($items['data']) > 0) {
					    count($items['data']) < 4 ? $k = count($items['data']) : $k = 4;
					    count($items['data']) == 1 ? $rand_keys[0] = array_rand($items['data'], $k) : $rand_keys = array_rand($items['data'], $k);
					    for($i = 0; $i < $k; $i++) $similar[$i] = $items['data'][$rand_keys[$i]];
					} else {
					    $similar = array();
					}
					foreach($similar as $key => $val) {
					    $prices = explode("-",$val['price']);
						$similar[$key]['price'] = $prices[0];
						unset($prices);
					    $similar[$key]['small_description_ru'] = croptext($val['description_ru'], 200);
						$similar[$key]['small_description_en'] = croptext($val['description_en'], 200);
					}
					$smarty->assign('cur_cat',sip($_GET['key']));
					$smarty->assign('similar', $similar);
				} else {
				    (isset($_GET['p']) && trim(sip($_GET['p'])) != '' && (int)sip($_GET['p']) > 0) ? $p = (int)sip($_GET['p']) : $p = 1;
				    $goods = fcontent(sip($_GET['key']), $pp, $p);
				    foreach($goods as $key => $val) {
					    $goods[$key]['good_cat'] = sip($_GET['key']);
						$pr = explode("-", $val['price']);
						if(count($pr) > 1) $goods[$key]['price'] = $pr[0];
					}
				    $pages = fpages(sip($_GET['key']), $pp, $p);
                    $plink = '/'.$controller.'/'.sip($_GET['key']).'/?p=';
				}
			} else {
			    (isset($_GET['p']) && trim(sip($_GET['p'])) != '' && (int)sip($_GET['p']) > 0) ? $p = (int)sip($_GET['p']) : $p = 1;
				$k = ((int)$p * (int)$pp) - (int)$pp;
				$arr2 = array();
				$scnt = 0;
			    for($i = 1; $i <= 6; $i++) {
			        $arr2[($i-1)] =q("SELECT * FROM `goods_cat{$i}` ORDER BY `order` ASC", "main");
					$scnt += count($arr2[($i-1)]['data']);
			    	foreach($arr2[($i-1)]['data'] as $key => $val) {
			    	    $arr2[($i-1)]['data'][$key]['good_cat'] = 'goods_cat'.$i;
			    		$pr = explode("-", $val['price']);
			    		if(count($pr) > 1) $arr2[($i-1)]['data'][$key]['price'] = $pr[0];
			    	}
			    }
			    for($m = 0; $m < 16; $m++) {
			    	for($l = 0; $l < 6; $l++) {
			    	    if(isset($arr2[$l]['data'][$k]) && !empty($arr2[$l]['data'][$k])) {
			    	    	$goods['data'][$m] = $arr2[$l]['data'][$k];
                        	$k++;
                        };
			    	}
			    	if($k >= $k+$pp) break;
			    }
				$scnt%$pp == 0 ? $allpages = $scnt/$pp : $allpages = (($scnt-($scnt%$pp))/$pp) + 1;
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
			    $goods['count'] = count($goods['data']);
			    $goods['status'] = 'success';
			    foreach($goods['data'] as $key => $val) {
			        $goods['data'][$key]['small_description_ru'] = croptext($goods['data'][$key]['description_ru'], 200);
			        $goods['data'][$key]['small_description_en'] = croptext($goods['data'][$key]['description_en'], 200);
			    }
				$gg = $goods['data'];
				unset($goods);
				$goods = $gg;
				$plink = '/'.$controller.'/?p=';
			}
            $smarty->assign('goods', $goods);
            $smarty->assign('pages', $pages);
			$smarty->assign('plink', $plink);
			$smarty->assign('title_ru', $tru);
			$smarty->assign('title_en', $ten);
			foreach($arr as $key => $val) {
				$smarty->assign('keywords_'.$val, 'Интернет-магазин Маяк, лыжи, каталог, товары, каталог товаров');
				$smarty->assign('descr_'.$val, 'Каталог товаров лыжной фабрики Маяк.');
			}
			break;
		case('page'):
		    isset($_GET['key']) ? $key = sip($_GET['key']) : $key = sip($_GET['action']);
			$item = q("SELECT * FROM `custompages` WHERE `link_".LANG."`='/page/{$key}/'", "main");
			foreach($arr as $key => $val) {
			    $smarty->assign('title_'.$val, $item['data'][0]['title_'.$val]);
				$smarty->assign('keywords_'.$val, $item['data'][0]['metakeywords']);
				$smarty->assign('descr_'.$val, $item['data'][0]['metacontent']);
				$item['data'][0]['description_'.$val] = isip($item['data'][0]['description_'.$val]);
			}
			$smarty->assign('item', $item['data'][0]);
			$pv = explode("-", $_SESSION['guest']['custompages']);
			$ok = 0;
            foreach($pv as $key2 => $val) {
                if(trim($val) == '') {
            	    unset($pv[$key2]);
            	} else {
            	    if((int)$key == (int)$val) {
            	        $ok = 1;
            	    	break;
            	    };
            	}
            }
			if($ok == 0) {
			    array_push($pv, (int)$key);
				$pv2 = implode("-", $pv);
				mq("UPDATE `hits` SET `custompages`='{$pv2}', `last_mod`=NOW() WHERE `id`='{$_SESSION['guest']['id']}'; UPDATE `custompages` SET `score`='".((int)$item['data'][0]['score']+1)."' WHERE `id`='{$item['data'][0]['id']}';", "main");
			};
			break;
		case('changelang'):
		    if(isset($_POST['lang'])) {
			    setcookie('lang', sip($_POST['lang']), time()+3600*24*365, '/', SITEURL);
				echo 'success';
			} else {
			    echo 'error';
			}
			break;
		case('nppappchange'):
		    if(isset($_POST['npp'])) {
			    setcookie('npp', sip($_POST['npp']), time()+3600*24*365, '/', SITEURL);
				echo 'success';
			} else {
			    echo 'error';
			}
			break;
		case('news'):
		    $pools = q("SELECT * FROM `pools` WHERE `visible`='1' ORDER BY `id` DESC", "main");
			$poolscnt = array();
			$up = explode("|", $_SESSION['guest']['pools']);
			foreach($up as $key2 => $val2) {
			    $up2 = explode("-", $val2);
				$upools[$key2]['id'] = (int)$up2[0];
				$upools[$key2]['answer'] = (int)$up2[1];
			}
			foreach($pools['data'] as $key3 => $val3) {
			    $pools['data'][$key3]['answers']['ru'] = explode("|", $val3['answers_ru']);
				$pools['data'][$key3]['answers']['en'] = explode("|", $val3['answers_en']);
				$pools['data'][$key3]['answers']['cnt'] = explode("|", $val3['answers_count']);
				foreach($pools['data'][$key3]['answers']['cnt'] as $item) $poolscnt[$key3] += (int)$item;
				foreach($pools['data'][$key3]['answers']['cnt'] as $key4 => $val4) {
				    $pools['data'][$key3]['answers']['percent'][$key4] = round(((int)$val4/(int)$poolscnt[$key3])*100, 2);
					$pools['data'][$key3]['answers']['color'][$key4] = rgb("0:200","0:200","0:200");
				}
				foreach($upools as $key4 => $val4) {
				    if((int)$val3['id'] == (int)$val4['id']) {
					    $pools['data'][$key3]['already']['answer'] = (int)$val4['answer'];
					};
				}
			}
			$smarty->assign('poolscnt', $poolscnt);
			$smarty->assign('pools', $pools['data']);
		    if(isset($_GET['action']) && sip($_GET['action']) == 'article') {
			    $tpl = 'newsitem';
				$item = q("SELECT * FROM `news` WHERE `id`='".sip($_GET['id'])."'", "main");
				$nt = array('ru' => 'Новости', 'en' => 'News');
			    foreach($arr as $key => $val) {
			    	$smarty->assign('keywords_'.$val, $item['data'][0]['metakeywords']);
			    	$smarty->assign('descr_'.$val, $item['data'][0]['metacontent']);
					$smarty->assign('title_'.$val, $nt[$val].' | '.$item['data'][0]['title_'.$val]);
		    	    $item['data'][0]['small_description_'.$val] = croptext($item['data'][0]['description_'.$val], 400);
		    	    $item['data'][0]['description_'.$val] = descr_unsafe($item['data'][0]['description_'.$val]);
			    }
				$item['data'][0]['whenadd_ru'] = rusdate2($item['data'][0]['whenadd']);
				$item['data'][0]['whenadd_en'] = endate($item['data'][0]['whenadd']);
				$smarty->assign('newsitem', $item['data'][0]);
                $pv = explode("-", $_SESSION['guest']['news']);
                $ok = 0;
                foreach($pv as $key2 => $val) {
                    if(trim($val) == '') {
					    unset($pv[$key2]);
					} else {
					    if((int)sip($_GET['id']) == (int)$val) {
                	        $ok = 1;
                	    	break;
                	    };
					}
                }
                if($ok == 0) {
                    array_push($pv, (int)sip($_GET['id']));
                	$pv2 = implode("-", $pv);
				mq("UPDATE `hits` SET `news`='{$pv2}', `last_mod`=NOW() WHERE `id`='{$_SESSION['guest']['id']}'; UPDATE `news` SET `score`='".((int)$item['data'][0]['score']+1)."' WHERE `id`='{$item['data'][0]['id']}';", "main");
                };
			} else {
                !isset($_GET['key']) ? $p = 1 : $p = sip($_GET['key']);
				$add = " WHERE `visible`='1'";
				foreach($napp as $key => $val) if((int)$_COOKIE['npp'] == (int)$val) unset($napp[$key]);
				$smarty->assign('news', fcontent('news', (int)$_COOKIE['npp'], $p, $add));
				$smarty->assign('pages', fpages('news', (int)$_COOKIE['npp'], $p, $add));
				$smarty->assign('npp', $_COOKIE['npp']);
				$smarty->assign('nppch', $napp);
			    $smarty->assign('title_ru', 'Новости');
			    $smarty->assign('title_en', 'News');
			    foreach($arr as $key => $val) {
			    	$smarty->assign('keywords_'.$val, 'Интернет-магазин Маяк, лыжи, новости');
			    	$smarty->assign('descr_'.$val, 'Лыжная фабрика Маяк – новости.');
			    }
			}
			break;
		case('articles'):
		    $nt = array('ru' => 'Энциклопедия охоты и рыбалки', 'en' => 'Encyclopedia of hunting and fishing');
			$nt2 = array('ru' => array('hunting' => 'Охота', 'fishing' => 'Рыбалка'), 'en' => array('hunting' => 'Hunting', 'fishing' => 'Fishing'));
			$addinf = '';
			$addkeys = ', статьи, энциклопедия охоты и рыбалки, охота, рыбалка';
		    if(isset($_GET['action']) && sip($_GET['action']) == 'article') {
			    $tpl = 'articlesitem';
				$item = q("SELECT * FROM `articles` WHERE `id`='".sip($_GET['id'])."'", "main");
			    foreach($arr as $key => $val) {
			    	$smarty->assign('keywords_'.$val, $item['data'][0]['metakeywords']);
			    	$smarty->assign('descr_'.$val, $item['data'][0]['metacontent']);
					$smarty->assign('title_'.$val, $nt[$val].' | '.$nt2[$val][$item['data'][0]['cat']].' | '.$item['data'][0]['title_'.$val]);
		    	    $item['data'][0]['small_description_'.$val] = croptext($item['data'][0]['description_'.$val], 400);
		    	    $item['data'][0]['description_'.$val] = descr_unsafe($item['data'][0]['description_'.$val]);
			    }
				$item['data'][0]['whenadd_ru'] = rusdate2($item['data'][0]['whenadd']);
				$item['data'][0]['whenadd_en'] = endate($item['data'][0]['whenadd']);
				$smarty->assign('newsitem', $item['data'][0]);
                $pv = explode("-", $_SESSION['guest']['articles']);
                $ok = 0;
                foreach($pv as $key2 => $val) {
                    if(trim($val) == '') {
					    unset($pv[$key2]);
					} else {
					    if((int)sip($_GET['id']) == (int)$val) {
                	        $ok = 1;
                	    	break;
                	    };
					}
                }
                if($ok == 0) {
                    array_push($pv, (int)sip($_GET['id']));
                	$pv2 = implode("-", $pv);
				mq("UPDATE `hits` SET `articles`='{$pv2}', `last_mod`=NOW() WHERE `id`='{$_SESSION['guest']['id']}'; UPDATE `articles` SET `score`='".((int)$item['data'][0]['score']+1)."' WHERE `id`='{$item['data'][0]['id']}';", "main");
                };
			} else {
			    !isset($_GET['id']) ? $p = 1 : $p = sip($_GET['id']);
				$add = " WHERE `visible`='1'";
				foreach($napp as $key => $val) if((int)$_COOKIE['npp'] == (int)$val) unset($napp[$key]);
				if(isset($_GET['cat']) && trim(sip($_GET['cat'])) != '') {
				    $cn = 'охоте и рыбалке';
					$cn2 = 'Охота и рыбалка';
					if(sip($_GET['cat']) == 'hunting') {
					    $cn = 'охота';
						$cn2 = 'Охота';
						$nt['ru'] = 'Энциклопедия охоты';
						$nt['en'] = 'Encyclopedia of hunting';
					};
					if(sip($_GET['cat']) == 'fishing') {
					    $cn = 'рыбалка';
						$cn2 = 'Рыбалка';
						$nt['ru'] = 'Энциклопедия рыбалки';
						$nt['en'] = 'Encyclopedia of fishing';
					};
				    if(isset($_GET['symbol']) && trim(sip($_GET['symbol'])) != '') {
					    $add = " WHERE `visible`='1' AND `cat`='".sip($_GET['cat'])."' AND LOWER(`title_".LANG."`) LIKE LOWER('".sip($_GET['symbol'])."%')";
						$addkeys = ', статьи, '.$cn.', буква '.sip($_GET['symbol']);
						$addinf = ' '.$cn2.' под буквой '.strtoupper(sip($_GET['symbol']));
					} else {
					    $add = " WHERE `visible`='1' AND `cat`='".sip($_GET['cat'])."'";
						$addkeys = ', статьи по '.$cn;
						$addinf = ' '.$cn2.' с большой буквы';
					}
				} else {
				    $add = "";
				}
				$smarty->assign('news', fcontent('articles', (int)$_COOKIE['npp'], $p, $add));
				$smarty->assign('pages', fpages('articles', (int)$_COOKIE['npp'], $p, $add));
				$smarty->assign('npp', $_COOKIE['npp']);
				$smarty->assign('nppch', $napp);
			    $smarty->assign('title_ru', $nt['ru']);
			    $smarty->assign('title_en', $nt['en']);
			    foreach($arr as $key => $val) {
			    	$smarty->assign('keywords_'.$val, 'Интернет-магазин Маяк, лыжи'.$addkeys);
			    	$smarty->assign('descr_'.$val, 'Лыжная фабрика Маяк – статьи.'.$addinf);
			    }
			}
			break;
		case('ajax'):
		    if(isset($_POST) && !empty($_POST)) {
			    switch(sip($_POST['action'])) {
				    case('pool'):
					    $ok = 1;
						$up = explode("|", $_SESSION['guest']['pools']);
						foreach($up as $item) {
						    if((int)$item == (int)sip($_POST['id'])) {
							    $ok = 0;
								break;
							};
						}
						if($ok == 1) {
						    $pool = q("SELECT * FROM `pools` WHERE `id`='".sip($_POST['id'])."'", "main");
						    $answ = explode("|", $pool['data'][0]['answers_count']);
						    foreach($answ as $key => $val) {
						        if((int)$key == (int)sip($_POST['answer'])) {
						    	    $answ[$key] = ((int)$val)+1;
						    		break;
						    	};
						    }
						    $answ2 = implode("|", $answ);
						    q("UPDATE `pools` SET `answers_count`='{$answ2}' WHERE `id`='".sip($_POST['id'])."'", "main");
						    (trim($_SESSION['guest']['pools']) == '') ? $np = sip($_POST['id']).'-'.sip($_POST['answer']) : $np = $_SESSION['guest']['pools'].'|'.sip($_POST['id']).'-'.sip($_POST['answer']);
						    q("UPDATE `hits` SET `pools`='{$np}' WHERE `id`='{$_SESSION['guest']['id']}'", "main");
						    unset($pool);
						};
                        $pool = q("SELECT * FROM `pools` WHERE `id`='".sip($_POST['id'])."' ORDER BY `id` DESC", "main");
                        $poolscnt = 0;
                        foreach($up as $key2 => $val2) {
                            $up2 = explode("-", $val2);
                        	$upools[$key2]['id'] = (int)$up2[0];
                        	$upools[$key2]['answer'] = (int)$up2[1];
                        }
                        $pool['data'][0]['answers']['ru'] = explode("|", $pool['data'][0]['answers_ru']);
                        $pool['data'][0]['answers']['en'] = explode("|", $pool['data'][0]['answers_en']);
                        $pool['data'][0]['answers']['cnt'] = explode("|", $pool['data'][0]['answers_count']);
                        foreach($pool['data'][0]['answers']['cnt'] as $item) $poolscnt += (int)$item;
                        foreach($pool['data'][0]['answers']['cnt'] as $key4 => $val4) {
                            $pool['data'][0]['answers']['percent'][$key4] = round(((int)$val4/(int)$poolscnt)*100, 2);
                        	$pool['data'][0]['answers']['color'][$key4] = rgb("0:200","0:200","0:200");
                        }
                        foreach($upools as $key4 => $val4) {
                            if((int)$val3['id'] == (int)$val4['id']) {
                        	    $pool['data'][0]['already']['answer'] = (int)$val4['answer'];
                        	};
                        }
                        $smarty->assign('poolscnt', $poolscnt);
                        $smarty->assign('pool', $pool['data'][0]);
						$tpl = 'ajax_pool_result';
						loadTemplate($smarty, $tpl);
						break;
					case('poolmodal'):
                        $pools = q("SELECT * FROM `pools` WHERE `visible`='1' ORDER BY `id` DESC", "main");
                        $poolscnt = array();
                        $up = explode("|", $_SESSION['guest']['pools']);
                        foreach($up as $key2 => $val2) {
                            $up2 = explode("-", $val2);
                        	$upools[$key2]['id'] = (int)$up2[0];
                        	$upools[$key2]['answer'] = (int)$up2[1];
                        }
                        foreach($pools['data'] as $key3 => $val3) {
                            $pools['data'][$key3]['answers']['ru'] = explode("|", $val3['answers_ru']);
                        	$pools['data'][$key3]['answers']['en'] = explode("|", $val3['answers_en']);
                        	$pools['data'][$key3]['answers']['cnt'] = explode("|", $val3['answers_count']);
                        	foreach($pools['data'][$key3]['answers']['cnt'] as $item) $poolscnt[$key3] += (int)$item;
                        	foreach($pools['data'][$key3]['answers']['cnt'] as $key4 => $val4) {
                        	    $pools['data'][$key3]['answers']['percent'][$key4] = round(((int)$val4/(int)$poolscnt[$key3])*100, 2);
                        		$pools['data'][$key3]['answers']['color'][$key4] = rgb("0:200","0:200","0:200");
                        	}
                        	foreach($upools as $key4 => $val4) {
                        	    if((int)$val3['id'] == (int)$val4['id']) {
                        		    $pools['data'][$key3]['already']['answer'] = (int)$val4['answer'];
                        		};
                        	}
                        }
                        $smarty->assign('poolscnt', $poolscnt);
                        $smarty->assign('pools', $pools['data']);
						$tpl = 'news_modal';
						loadTemplate($smarty, $tpl);
					    break;
				}
			} else {
			    $tpl = 'ajax';
			}
			break;
		case('contacts'):
			break;
		case('cart'):
                    
		    $cart = json_decode($_COOKIE['cart']);
                    
			foreach($cart as $key => $val) {
			    $item = q("SELECT * FROM `{$val->cat}` WHERE `id`='{$val->id}'", "main");
                           
				$cart[$key]->info = $item['data'][0];
				if(isset($item['data'][0]['rostovka'])) {
					$rostovka = explode("-",$item['data'][0]['rostovka']);
					$width = explode("-",$item['data'][0]['width']);
                                       
					$cart[$key]->info['rostovka'] = $rostovka[$val->add];
					$cart[$key]->info['width'] =  $width[$val->add];
				};
			}
			$transp = q("SELECT * FROM `transport` ORDER BY `title_".LANG."`", "main");
			$smarty->assign('transport',$transp['data']);
			$smarty->assign('cartitems',$cart);
		    break;
		case('delfromcart'):
		    if(isset($_POST['cartgood']) && trim(sip($_POST['cartgood'])) != '') {
		        $cart = json_decode($_COOKIE['cart']);
				$summ = 0;
				$array = array();
			    unset($cart[(sip($_POST['cartgood']))]);
				foreach($cart as $key => $val) {
				    $summ += (int)$val->summ;
					array_push($array,$val);
				}
				setcookie("cart",json_encode($array),time() + 3600*24*365,"/",SITEURL);
				setcookie("cartsumm",$summ,time() + 3600*24*365,"/",SITEURL);
		        echo $summ;
			} else {
			    loadTemplate($smarty, 'header');
	    	    loadTemplate($smarty, 'header2');
			    loadTemplate($smarty, 'pagenotfound');
	    	    loadTemplate($smarty, 'footer');
			}
		    break;
		case('addtocart'):
                    
		    if(isset($_POST['good']) && trim(sip($_POST['good'])) != '') {
			    $summ = 0;
				$already = false;
				$array = array();
			    $good = json_decode($_POST['good']);
                         
				if(isset($_COOKIE['cart']) && trim($_COOKIE['cart']) != '') {
				    $cart = json_decode($_COOKIE['cart']);
					foreach($cart as $key => $val) {
					    if($val->id == (int)sip($good->id) && $val->cat == sip($good->cat) && $val->price == (int)sip($good->price) && $val->add == sip($good->add)) {
						    $cart[$key]->summ = (int)$val->summ+(int)$good->summ;
							$cart[$key]->cnt = (int)$val->cnt+(int)$good->cnt;
							$already = true;
						};
						$summ += (int)$val->summ;
						array_push($array,$val);
					}
					if(!$already) {
					    array_push($array,$good);
						$summ += (int)sip($good->summ);
					};
				} else {
				    array_push($array, $good);
					$summ = sip($good->summ);
				}
				setcookie("cart",json_encode($array),time() + 3600*24*365,"/",SITEURL);
				setcookie("cartsumm",$summ,time() + 3600*24*365,"/",SITEURL);
				echo $summ;
			} else {
			    loadTemplate($smarty, 'header');
	    	    loadTemplate($smarty, 'header2');
			    loadTemplate($smarty, 'pagenotfound');
	    	    loadTemplate($smarty, 'footer');
			}
		    break;
		case('getprice'):
		    if(isset($_GET['action']) && trim(sip($_GET['action'])) != '' && isset($_GET['key']) && trim(sip($_GET['key'])) != '') {
                sip($_GET['action']) == 'fiz' ? $ok = true : $ok = false;
			    if(!$ok && isset($_GET['fio']) && isset($_GET['email']) && trim(sip($_GET['fio'])) != '' && trim(sip($_GET['email'])) != '') {
			        $cnt = q("SELECT COUNT(*) AS cnt FROM `opts` WHERE `email`='".trim(sip($_GET['email']))."'", "main");
			    	if((int)$cnt['data'][0]['cnt'] == 0) q("INSERT INTO `opts` (`title`,`email`) VALUES ('".trim(sip($_GET['fio']))."','".trim(sip($_GET['email']))."')", "main");
			    	$ok = true;
			    };
			    if($ok) {
				    if(trim(sip($_GET['action'])) != 'fiz') {
					    $sitename = q("SELECT * FROM `settings` WHERE `option_alias`='sitename'", "main");
					    $email = q("SELECT * FROM `settings` WHERE `option_alias`='email_admin'", "main");
					    $message = '
					        <!doctype html>
					    	<html>
					    	<head>
					    	    <meta charset="utf8" />
					    		<title>Новый оптовик зарегистрирован!</title>
					    	</head>
					    	<body>
					    	    <b>Имя: </b>'.sip($_POST['title']).'<br />
								<b>Email: </b>'.sip($_POST['email']).'<br />
					    	</body>
					    	</html>
					    ';
					    $subject = "=?utf-8?b?" . base64_encode('Новый оптовик зарегистрирован! | '.$sitename['data'][0]['value']) . "?=";
                        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
                        $headers .= "From: {$subject} <{$email['data'][0]['value']}>\r\n";
					    $header .= "Subject: {$subject}";
					    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
                        mail($email['data'][0]['value'], $subject, $message, $headers);
                        /*
                        $fp = fopen("uploads/letter.html", "w");
                        fwrite($fp, $message);
                        fclose($fp);*/
					};
			        $file = 'documents/prices/'.sip($_GET['action']).'.'.sip($_GET['key']);
			        $sitename = q("SELECT * FROM `settings` WHERE `option_alias`='sitename'", "main");
                    header ("Content-Type: application/octet-stream");
                    header ("Accept-Ranges: bytes");
                    header ("Content-Length: ".filesize($file));  
                    header ("Content-Disposition: attachment; filename=Прайс-лист ".$sitename['data'][0]['value'].".".sip($_GET['key']));
                    readfile($file);
			    } else {
			        echo 'Ошибка! Попробуйте ещё раз!<br /><br />Это окно закроется автоматически.<script>setTimeout(function(){window.close();},3000);</script>';
			    }
			} else {
			    loadTemplate($smarty, 'header');
	    	    loadTemplate($smarty, 'header2');
			    loadTemplate($smarty, 'pagenotfound');
	    	    loadTemplate($smarty, 'footer');
			}
		    break;
		case('contactsform'):
		    if(isset($_POST) && !empty($_POST)) {
			    $secret = q("SELECT * FROM `settings` WHERE `option_alias`='captcha_secret'", "main");
                $options = array(
                  'http'=>array(
                    'method'=>"POST",
                    'header'=>
                      "Accept-language: en\r\n".
                      "Content-type: application/x-www-form-urlencoded\r\n",
                    'content'=>http_build_query(
                        array('secret' => $secret['data'][0]['value'], 'response' => $_POST['g-recaptcha-response']),'','&'
                    )
                ));
                $context = stream_context_create($options);
                $refno = file_get_contents('https://www.google.com/recaptcha/api/siteverify',false,$context);
				$captcha = json_decode($refno);
				if($captcha->success) {
				    (q("INSERT INTO `contacts`(`name`,`email`,`description`) VALUES ('".sip($_POST['name'])."','".sip($_POST['email'])."','".sip($_POST['message'])."')", "main")) ? $str = 'success' : $str = 'error';
					if($str == 'success') {
					    $sitename = q("SELECT * FROM `settings` WHERE `option_alias`='sitename'", "main");
					    $email = q("SELECT * FROM `settings` WHERE `option_alias`='email_admin'", "main");
					    $message = '
					        <!doctype html>
					    	<html>
					    	<head>
					    	    <meta charset="utf8" />
					    		<title>Письмо от клиента!</title>
					    	</head>
					    	<body>
					    	    <b>Имя: </b>'.sip($_POST['name']).'<br />
								<b>Email: </b>'.sip($_POST['email']).'<br />
								<b>Сообщение: </b><br /><br />
								'.sip($_POST['message']).'
					    	</body>
					    	</html>
					    ';
					    $subject = "=?utf-8?b?" . base64_encode('Письмо от клиента! | '.$sitename['data'][0]['value']) . "?=";
                        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
                        $headers .= "From: {$subject} <{$email['data'][0]['value']}>\r\n";
					    $header .= "Subject: {$subject}";
					    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
                        mail($email['data'][0]['value'], $subject, $message, $headers);
                        /*
                        $fp = fopen("uploads/letter.html", "w");
                        fwrite($fp, $message);
                        fclose($fp);*/
					};
				} else {
				    $str = 'error';
				}
				echo $str;
			} else {
			    loadTemplate($smarty, 'header');
	    	    loadTemplate($smarty, 'header2');
			    loadTemplate($smarty, 'pagenotfound');
	    	    loadTemplate($smarty, 'footer');
			}
		    break;
		case('addorder'):
		    if(isset($_POST) && !empty($_POST)) {
			    $dostavka = 'Транспортная компания';
			    if(isset($_POST['samovivoz']) && trim(sip($_POST['samovivoz'])) != '') $dostavka = trim(sip($_POST['samovivoz']));
				$goods = '
                       <table class="basket-table" style="width: 100%; background: #FFFFFF; color: #333333; border: 1px solid #333333; min-width: 300px; max-width: 800px;">
                           <thead style="background: #333333;">
						        <tr style="background: #333333;">
                                    <th style="padding: 5px; background: #333333; color: #FFFFFF;">Фото</th>
                                    <th style="padding: 5px; background: #333333; color: #FFFFFF;">Описание</th>
                                    <th style="padding: 5px; background: #333333; color: #FFFFFF;">Стоимость</th>
							    </tr>
                           </thead>
                           <tbody>
				';
		        $cart = json_decode($_COOKIE['cart']);
			    foreach($cart as $key => $val) {
			        $item = q("SELECT * FROM `{$val->cat}` WHERE `id`='{$val->id}'", "main");
			    	$cart[$key]->info = $item['data'][0];
			    	if(isset($item['data'][0]['rostovka'])) {
			    		$rostovka = explode("-",$item['data'][0]['rostovka']);
			    		$width = explode("-",$item['data'][0]['width']);
			    		$cart[$key]->info['rostovka'] = $rostovka[$val->add];
			    		$cart[$key]->info['width'] =  $width[$val->add];
			    	};
					$key == count($cart)-1 ? $border = '' : $border = ' style="border-bottom: 1px dashed #CCCCCC;"';
					$goods .= '
                                   <tr'.$border.'>
                                       <td style="padding: 5px; vertical-align: middle; text-align: center; width: 20%;">
                                            <img style="max-width: 100px; max-height: 100px; display: block; margin: 0 auto;" src="/documents/goods/'.$val->cat.'/'.$val->info['poster'].'" alt=""></td>
                                       <td style="padding: 5px;">
				    					   Наименование: <a href="/catalogue/'.$val->cat.'/item/'.$val->id.'/">'.$val->info['title_ru'].'</a><br />
				    					   Количество: '.$val->cnt.' шт.<br />
				    					   Цена за единицу: '.$val->price.' Р<br />
					';
					switch($val->cat) {
					    case('goods_cat1'):
						    $goods .= '
                                        Ростовка: '.$val->info['rostovka'].' см<br />
                                        Ширина: '.$val->info['width'].' см<br />
                                        Опции:  '.$val->info['options'].'<br/>
							';
						    break;
					    case('goods_cat2'):
						    $goods .= 'Размер: '.$val->add.'<br />';
						    break;
					    case('goods_cat3'):
						    $goods .= 'Объём(в кубах): '.$val->add.'<br />';
						    break;
					    case('goods_cat4'):
						    $goods .= 'Площадь в квадратах: '.$val->add.'<br />';
						    break;
					    case('goods_cat6'):
						    $goods .= 'Объём: '.$val->info['volume'].' л<br />';
						    break;
						default: break;
					}
					$goods .= '
                                       </td>
                                       <td style="padding: 5px; width: 20%;">
                                           <b style="color: #00AA00;">'.$val->summ.' Р</b>
                                       </td>
                                   </tr>
					';
			    }
				$goods .= '
				    	   </tbody>
                           <tfoot style="background: #333333;">
                               <tr style="background: #333333;">
                                   <td colspan="2" style="background: #333333;">
                                   </td>
                                   <td style="background: #333333; color: #FFFFFF;">
                                        <b>Итого: </b><b style="color: #FFFF00;">'.$_COOKIE['cartsumm'].' Р</b>
                                   </td>
                               </tr>
                           </tfoot>
                       </table>
				';
			    $description = '
				    <h3>Клиент</h3>
				    <b>Имя:</b> '.sip($_POST['name']).'<br />
					<b>Телефон:</b> '.sip($_POST['phone']).'<br />
					<b>Email:</b> '.sip($_POST['email']).'<br />
					<b>Язык:</b> '.sip($_POST['lang']).'<br />
					<h3>Доставка и оплата</h3>
					<b>Способ доставки:</b> '.$dostavka.'<br />
					<b>Транспортная компания:</b> '.sip($_POST['transport']).'<br />
					<b>Адрес доставки:</b> '.sip($_POST['address']).'<br />
					<b>Форма оплаты:</b> '.sip($_POST['money']).'
					<h3>Товары</h3>
					'.$goods
				;
				if(q("INSERT INTO `orders`(`description`) VALUES ('{$description}')", "main")) {
				    $str = 'success';
				    setcookie("cart",0,time() - 3600,"/",SITEURL);
				    setcookie("cartsumm",0,time() - 3600,"/",SITEURL);
					$sitename = q("SELECT * FROM `settings` WHERE `option_alias`='sitename'", "main");
					$email = q("SELECT * FROM `settings` WHERE `option_alias`='email_admin'", "main");
					$message = '
					    <!doctype html>
						<html>
						<head>
						    <meta charset="utf8" />
							<title>Новый заказ!</title>
						</head>
						<body>
						'.$description.'
						</body>
						</html>
					';
					$subject = "=?utf-8?b?" . base64_encode('Новый заказ! | '.$sitename['data'][0]['value']) . "?=";
                    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
                    $headers .= "From: {$subject} <{$email['data'][0]['value']}>\r\n";
					$header .= "Subject: {$subject}";
					$headers  = "Content-type: text/html; charset=utf-8 \r\n";
                    mail($email['data'][0]['value'], $subject, $message, $headers);
                    /*
                    $fp = fopen("uploads/letter.html", "w");
                    fwrite($fp, $message);
                    fclose($fp);*/
				} else {
				    $str = 'error';
				}
				echo $str;
			} else {
			    loadTemplate($smarty, 'header');
	    	    loadTemplate($smarty, 'header2');
			    loadTemplate($smarty, 'pagenotfound');
	    	    loadTemplate($smarty, 'footer');
			}
		    break;
	}
	if($controller != 'addorder' && $controller != 'changelang' && $controller != 'contactsform' && $controller != 'nppappchange' && $controller != 'ajax' && $controller != 'getprice' && $controller != 'addtocart' && $controller != 'delfromcart') {
	    if(file_exists('../views/frontend/'.$tpl.'.tpl')) {
	        loadTemplate($smarty, 'header');
			if($controller == 'index' || $controller == 'news') loadTemplate($smarty, 'news_modal');
			if($controller == 'cart') loadTemplate($smarty, 'cart_modal_'.LANG);
	    	loadTemplate($smarty, 'price_modal');
	    	loadTemplate($smarty, 'header2');
            loadTemplate($smarty, $tpl);
	    	loadTemplate($smarty, 'footer');
	    } else {
	        if($controller != 'addorder' && $controller != 'getprice' && $controller != 'addtocart' && $controller != 'delfromcart' && $controller != 'contactsform') {
			    loadTemplate($smarty, 'header');
	    	    loadTemplate($smarty, 'header2');
			    loadTemplate($smarty, 'pagenotfound');
	    	    loadTemplate($smarty, 'footer');
			};
	    }
	};
}