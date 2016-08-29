<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="{if $lang == 'ru'}{$keywords_ru}{else}{$keywords_en}{/if}">
	<meta name="description" content="{if $lang == 'ru'}{$descr_ru}{else}{$descr_en}{/if}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{$ss_sitename} | {if $lang == 'ru'}{$title_ru}{else}{$title_en}{/if}</title>

    <!-- Bootstrap -->
    <link href="{$templateWebPath}css/bootstrap.css" rel="stylesheet">
    <link href="{$templateWebPath}css/style.css" rel="stylesheet">
	<link href="{$templateWebPath}css/add.css" rel="stylesheet">
	<link href="/templates/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://vk.com/js/api/openapi.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <input id="vkgid" type="hidden" value="{$ss_vk_group_id}" />
  <input id="vkappid" type="hidden" value="{$ss_vk_appid}" />