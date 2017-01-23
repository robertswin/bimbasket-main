<!DOCTYPE html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">

<head>
    <title>
        <?$APPLICATION->ShowTitle()?>
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#64c8a4">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#64c8a4">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#64c8a4">
		<?$APPLICATION->ShowHeadStrings();?>
		<?$APPLICATION->ShowHeadScripts(); ?>
		<?$APPLICATION->ShowHead();?>
             
   <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css">
                <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style-c.css">
                <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/responsive.css">
                <!--[if lte IE 9]><html class="ie9_all" lang="en"><![endif]-->
                <!--[if lte IE 8]><link href="css/ie7.css" rel="stylesheet" type="text/css"/><![endif]-->
			<script src="https://yastatic.net/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>


    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-85811620-1', 'auto');
        ga('send', 'pageview');
        ga('require', 'ecommerce');
    </script>
  
        <div id="panel">
            <?$APPLICATION->ShowPanel();?>
        </div>
        <?if ($_REQUEST["admitad_uid"] !="") :?>
            <script type="text/javascript">
                var adcookiedate = '90'; //90 днейvar addomain='.bimbasket.ru'var date=new Date(new Date().getTime() + adcookiedate*24*60*60*1000); //кол-во дней * часы * минуты * секунды * микросекундыvar cookie_val='<?echo $_REQUEST["admitad_uid"];?>';document.cookie='admitad_cookie=' + cookie_val + '; path=/; domain=' + addomain + ';expires=' + date.toUTCString();
            </script>
            <?endif;?>
                <? //if($USER->IsAdmin()){echo '<pre style="marign:10%;">'; print_r($admitad_uid_id_get); echo '</pre>';}?>
                    <div id="head-block">
                        <div class="infopanel animated slideInDown hidden">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p class="text-center">Строка с текстом акции! Спешите! <i class="fa fa-times pull-right"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="logo-menu-user" class="container ">
                            <div class="row">
                                <div id="m-menu" class="col-xs-2 col-sm-2 visible-xs visible-sm">
                                    <nav class="pushy pushy-left">
                                        <ul class="list-unstyled">
                                            <li class="pushy-submenu"><a href="#">Развивающие наборы</a>
                                                <ul class="list-unstyled">
                                                    <li class="pushy-link"><a href="/catalog/razvivayushchie_nabory/?set_filter=y&arrFilter_48_4196041389=Y">Наборы по методике М.Л.Лазарева</a></li>
                                                    <li class="pushy-link"><a href="/razvivayushchie-programmy/umnoteka/">Серия Умнотека</a></li>
                                                    <li class="pushy-link"><a href="/razvivayushchie-programmy/aktiviki/"> Серия Активики</a></li>
                                                    <li class="pushy-link"><a href="/catalog/ideya_dlya_podarka/">Подарочные наборы</a></li>
                                                </ul>
                                            </li>
                                            <li class="pushy-submenu"><a href="#">Бимшоп</a>
                                                <ul class="list-unstyled">
                                                    <li class="pushy-link"><a href="/catalog/igrushki/">Игрушки</a></li>
                                                    <li class="pushy-link"><a href="/catalog/knigi/">Книги</a></li>
                                                    <li class="pushy-link"><a href="/catalog/muzykalnye_instrumenty/">Музыкальные инструменты</a></li>
                                                    <li class="pushy-link"><a href="/catalog/poleznye_tovary/">Полезные товары</a></li>
                                                    <li class="pushy-link"><a href="/catalog/bimshop/?set_filter=y&arrFilter_49_2118391450=Y">Сопутствующие товары к наборам</a></li>
                                                </ul>
                                            </li>
                                            <li class="pushy-link"><a href="/blog/">Бимблог</a></li>
                                        </ul>
                                        <li id="tagline-in-menu" class="pushy-submenu pushy-submenu-open">
                                            <h1 class="tagline-title-mob">Строка с текстом акции! Спешите!</h1>
                                            <ul class="list-unstyled">
                                                <a href="/catalog/bimshop/?set_filter=y&arrFilter_46_1060745282=Y&arrFilter_46_155395596=Y&arrFilter_46_2944839123=Y">
                                                    <li>0-3</li>
                                                </a>
                                                <a href="/catalog/bimshop/?set_filter=y&arrFilter_46_1112425479=Y">
                                                    <li>3-5</li>
                                                </a>
                                                <a href="/catalog/razvivayushchie_nabory/?set_filter=y&arrFilter_47_4252452532=Y">
                                                    <li>Творчество</li>
                                                </a>
                                                <a href="/catalog/ideya_dlya_podarka/">
                                                    <li>Идеи для подарка</li>
                                                </a>
                                                <li>Подарочные</li>
                                                <a href="/catalog/razvivayushchie_nabory/?set_filter=y&arrFilter_47_4252452532=Y">
                                                    <li>Творческие</li>
                                                </a>
                                                <li>Пробные</li>
                                                <a href="/catalog/razvivayushchie_nabory/?set_filter=y&arrFilter_47_1685985038=Y">
                                                    <li>Музыкальные</li>
                                                </a>
                                                <li>Универсальные</li>
                                            </ul>
                                        </li>
                                    </nav>
                                    <div class="site-overlay"></div><i class="fa fa-bars fa-1x menu-btn" aria-hidden="true"></i></div>
                                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 logo hidden-xs"><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" class="center-block" alt=""></a></div>
                                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 logo visible-xs"><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" class="center-block" alt=""></a></div>
                                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 visible-lg visible-md">
                                    <ul class="list-unstyled row top-menu">
                                        <li class="col-xs-6"><a href="/catalog/razvivayushchie_nabory/" class="nab">Развивающие наборы</a>
                                            <ul id="sub-menu-nabb" class="list-unstyled row">
                                                <div id="back">
                                                    <li><a href="/catalog/razvivayushchie_nabory/?set_filter=y&arrFilter_48_4196041389=Y"><i class="lazarev"></i> Наборы по методике М.Л.Лазарева </li></a>
                                                        <li><a href="/razvivayushchie-programmy/umnoteka/"><i class="umnoteka"></i>Серия Умнотека</li></a>
                                                            <li><a href="/razvivayushchie-programmy/aktiviki/"><i class="activiki"></i>Серия Активики</li></a>
                                                                <li><a href="/razvivayushchie-programmy/korobka-s-harakterom/"><i class="harakter"></i>Коробка с характером</li></a>
                                                                    <li><a href="/razvivayushchie-programmy/monsiki/"><i class="monsiki"></i>Серия Монсики</li></a>
                                                                        <li><a href="/catalog/ideya_dlya_podarka/"><i class="gift"></i> Подарочные наборы </li></a></div>
                                            </ul>
                                            </li>
                                            <li class="col-xs-3"><a href="/catalog/bimshop/">Бимшоп</a>
                                                <ul id="sub-menu-nab" class="list-unstyled row">
                                                    <div id="back">
                                                        <li><a href="/catalog/razvivayushchie_nabory/"><i class="nabory"></i>Развивающие наборы</li></a>
                                                            <li><a href="/catalog/knigi/"><i class="books"></i>Книги</a></li>
                                                            <li><a href="/catalog/igrushki/"><i class="toys"></i>Игрушки</a></li>
                                                            <li><a href="/catalog/muzykalnye_instrumenty/"><i class="mus-instruments"></i>Музыкальные инструменты</a></li>
                                                            <li><a href="/catalog/poleznye_tovary/"><i class="others"></i>Полезные товары</a></li>
                                                    </div>
                                                </ul>
                                                </li>
                                                <li class="col-xs-3"><a href="/blog/">Бимблог</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 ">
                                    <a href="tel:88007758354"></a>
                                    <div class="telephone text-right hidden-xs hidden-sm">8 (800) 775 83 54</div>
                                    <p class="pull-right visible-xs ">
                                        <?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "bimbasket-shortcart", array("HIDE_ON_BASKET_PAGES"=> "N","PATH_TO_BASKET"=> SITE_DIR."personal/cart/","PATH_TO_ORDER"=> SITE_DIR."personal/order/make/","PATH_TO_PERSONAL"=> SITE_DIR."personal/","PATH_TO_PROFILE"=> SITE_DIR."personal/","PATH_TO_REGISTER"=> SITE_DIR."login/","POSITION_FIXED"=> "N","SHOW_AUTHOR"=> "N","SHOW_EMPTY_VALUES"=> "N","SHOW_NUM_PRODUCTS"=> "N","SHOW_PERSONAL_LINK"=> "N","SHOW_PRODUCTS"=> "N","SHOW_TOTAL_PRICE"=> "N","COMPONENT_TEMPLATE"=> "bimbasket-shortcart"),false);?>
                                            <?global $USER;$username=$USER->GetFullName();if ($USER->IsAuthorized()) echo "<a href='/personal/'><img src='/bitrix/templates/bim1/images/user.png'></a>";else echo "<div ><a href='/personal/' name='lk'>Войти</a></div>"?></p>
                                </div>
                                <!-- <div class="overlayer"></div>--></div>
                        </div>
                        <div id="tagline" class="hidden-xs hidden-sm">
                            <div class="overlay">
                                <div class="container">
                                    <div class="row-fluid">
                                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                                            <ul class="list-unstyled">
                                                <li class="col-xs-3 col-sm-3 col-md-2 col-lg-2 ">
                                                    <a href="/catalog/bimshop/?set_filter=y&arrFilter_46_1060745282=Y&arrFilter_46_155395596=Y&arrFilter_46_2944839123=Y">
                                                        <p>0-3 года</p>
                                                    </a>
                                                </li>
                                                <li class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
                                                    <a href="/catalog/bimshop/?set_filter=y&arrFilter_46_1112425479=Y">
                                                        <p>3-5 лет</p>
                                                    </a>
                                                </li>
                                                <li class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                    <a href="/catalog/bimshop/?set_filter=y&arrFilter_49_1860791280=Y">
                                                        <p class="newyear">Новый год</p>
                                                    </a>
                                                </li>
                                                <li class="col-xs-3 col-sm-4 col-md-3 col-lg-3">
                                                    <a href="/catalog/razvivayushchie_nabory/?set_filter=y&arrFilter_47_1685985038=Y">
                                                        <p>Музыкальное развитие</p>
                                                    </a>
                                                </li>
                                                <li class="col-xs-3 col-sm-3 col-md-2 col-lg-2 yellow">
                                                    <a href="http://bimbasket.ru/happymoments/?utm_term=happymoments_button">
                                                        <p>Конкурс</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-2 visible-lg visible-md">
                                            <p class="text-right">
                                                <div class="input-group search ">
                                                    <input type="text" class="search-inpt pull-right"><span class="input-group-btn"><button class="search-btn btn " type="button"></button></span></div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div <?if ($APPLICATION->GetCurDir()=='/' || $APPLICATION->GetCurDir()=='/razvivayushchie-programmy/aktiviki/' || $APPLICATION->GetCurDir()=='/happymoments/' || $APPLICATION->GetCurDir()=='/razvivayushchie-programmy/umnoteka/' ||$APPLICATION->GetCurDir()=='/razvivayushchie-programmy/korobka-s-harakterom/' ||$APPLICATION->GetCurDir()=='/razvivayushchie-programmy/monsiki/' ) :?>class=""
                        <?endif;?>class="container">
                            <div <?if ($APPLICATION->GetCurDir()=='/' || $APPLICATION->GetCurDir()=='/razvivayushchie-programmy/aktiviki/' || $APPLICATION->GetCurDir()=='/razvivayushchie-programmy/umnoteka/' ||$APPLICATION->GetCurDir()=='/razvivayushchie-programmy/korobka-s-harakterom/' ||$APPLICATION->GetCurDir()=='/happymoments/' || $APPLICATION->GetCurDir()=='/razvivayushchie-programmy/monsiki/' ):?>class=""
                                <?endif;?>class="row">