<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{$ss_sitename} | Административная панель | {$title}</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <!-- Bootstrap Core CSS -->
    <link href="{$templateAdminWebPath}bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{$templateAdminWebPath}bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{$templateAdminWebPath}dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{$templateAdminWebPath}dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{$templateAdminWebPath}bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{$templateAdminWebPath}bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="{$templateAdminWebPath}add.css" rel="stylesheet" type="text/css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: auto; }
  #sortable li { margin: 3px 3px 3px 0; padding: 1px; float: left;  font-size: 4em; text-align: center; }
  </style>

</head>

<body>
{if isset($modal) && $modal != ''}{$modal}{/if}
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin/">{$ss_sitename} | Административная панель</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a id="users" class="dropdown-toggle" data-toggle="dropdown" href="#">
					    {if $notify.all > 0}<button style="position: absolute; z-index: 2; margin-left: -8px;" type="button" class="btn btn-xs btn-danger" OnClick="return false;">+{$notify.all}</button>{/if}
                        <i class="fa fa-users fa-fw"></i>  Клиенты <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li id="contacts"><a href="/admin/contacts/">
						    {if $notify.letters > 0}<button style="position: absolute; z-index: 2; margin-left: 100px;" type="button" class="btn btn-xs btn-danger" OnClick="document.location.href = '/admin/contacts/';">+{$notify.letters}</button>{/if}
						    <i class="fa fa-envelope-o fa-fw"></i> Письма
						</a></li>
                        <li id="orders"><a href="/admin/orders/">
						    {if $notify.ordrs > 0}<button style="position: absolute; z-index: 2; margin-left: 100px;" type="button" class="btn btn-xs btn-danger" OnClick="document.location.href = '/admin/orders/';">+{$notify.ordrs}</button>{/if}
						    <i class="fa fa-money fa-fw"></i> Заказы
						</a></li>
						<li id="opts"><a href="/admin/opts/">
						    {if $notify.opts > 0}<button style="position: absolute; z-index: 2; margin-left: 100px;" type="button" class="btn btn-xs btn-danger" OnClick="document.location.href = '/admin/opt/';">+{$notify.opts}</button>{/if}
						    <i class="fa fa-user fa-fw"></i> Оптовики
						</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <li class="dropdown">
                    <a id="info" class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-list fa-fw"></i>  Информация <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li id="news"><a href="/admin/news/"><i class="fa fa-edit fa-fw"></i> Новости</a></li>
                        <li id="articles"><a href="/admin/articles/"><i class="fa fa-list-alt fa-fw"></i> Статьи</a></li>
                        <li id="slider"><a href="/admin/slider/"><i class="fa fa-th-large fa-fw"></i> Слайдер</a></li>
                        <li id="custompages"><a href="/admin/custompages/"><i class="fa fa-file-text fa-fw"></i> Текстовые страницы</a></li>
                        <li id="menu"><a href="/admin/menu/"><i class="fa fa-th-list fa-fw"></i> Меню</a></li>
						<li id="pools"><a href="/admin/pools/"><i class="fa fa-tasks fa-fw"></i> Опросы</a></li>
						<li id="transport"><a href="/admin/transport/"><i class="fa fa-car fa-fw"></i> Транспортные компании</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <li class="dropdown">
                    <a id="goods" class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-th fa-fw"></i>  Товары <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li id="goods_cat1"><a href="/admin/goods/goods_cat1/"><i class="fa fa-road fa-fw"></i> Лыжи и сопутствующие товары</a></li>
                        <li id="goods_cat2"><a href="/admin/goods/goods_cat2/"><i class="fa fa-cube fa-fw"></i> Черновые мебельные заготовки</a></li>
                        <li id="goods_cat3"><a href="/admin/goods/goods_cat3/"><i class="fa fa-list-ol fa-fw"></i>Трехслойная отделочная доска</a></li>
                        <li id="goods_cat4"><a href="/admin/goods/goods_cat4/"><i class="fa fa-arrows-alt fa-fw"></i>Клееный пол</a></li>
                        <li id="goods_cat5"><a href="/admin/goods/goods_cat5/"><i class="fa fa-archive fa-fw"></i>Мебель</a></li>
                        <li id="goods_cat6"><a href="/admin/goods/goods_cat6/"><i class="fa fa-tint fa-fw"></i>КФК клей</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <li id="settings">
                    <a href="/admin/settings/">
                        <i class="fa fa-gear fa-fw"></i>
                    </a>
                </li>
                <li id="exit">
                    <a href="/admin/exit/">
                        <i class="fa fa-power-off fa-fw"></i>
                    </a>
                </li>
                <li><i class="fa fa-user fa-fw"></i> {$admin.nickname}</li>
            </ul>
        </nav>