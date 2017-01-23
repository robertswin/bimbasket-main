<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Кабинет аффилиата");
$APPLICATION->SetPageProperty("title", "Кабинет аффилиата");
$APPLICATION->SetPageProperty("keywords", "Кабинет аффилиата");
$APPLICATION->SetPageProperty("description", "Кабинет аффилиата");
$APPLICATION->SetTitle("Кабинет аффилиата");
?><!-- NEW SCHEMA ------------------+ -->
<div class="row">
	<div class="col-xs-4">
		<h1 class="title text-center">Ваша скидка</h1>
	</div>
	<div class="col-xs-4">
		<h1 class="title text-center">Ваш рейтинг</h1>
	</div>
	<div class="col-xs-4">
		<h1 class="title text-center">Ваш счет</h1>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
	</div>
</div>
 <!-- NEW SCHEMA ------------------+ --> br
<div class="row">
	<div class="col-xs-12">
		<h1 style="text-align: center;">Кабинет аффилиата</h1>
		<h4 class="subtitle text-cetnter">Поздравляем! Вы являетесь участником <a href="">Партнерской программы Bimbasket</a></h4>
	</div>
</div>
<div class="row">
	<div class="col-xs-6">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.discsave.info",
	"bonus_programm",
	Array(
		"COMPONENT_TEMPLATE" => "bonus_programm",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"SHOW_NEXT_LEVEL" => "Y",
		"SITE_ID" => "s1",
		"USER_ID" => ""
	)
);?>
	</div>
	<div class="col-xs-6">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:sale.affiliate.instructions",
	"affiliate-instructions",
	Array(
		"AFF_REG_PAGE" => "/dev/affiliat/register.php",
		"COMPONENT_TEMPLATE" => ".default",
		"REGISTER_PAGE" => "register.php",
		"SET_TITLE" => "Y",
		"SHOP_NAME" => "Bimbasket",
		"SHOP_URL" => "bimbasket.ru"
	)
);?>
	</div>
</div>
<div class="row">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:sale.affiliate.account",
	"affiliate_raschet",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"REGISTER_PAGE" => "register.php",
		"SET_TITLE" => "Y"
	)
);?>
</div>
 <br>
 <br>
<br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>