<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Кабинет аффилиата");
$APPLICATION->SetPageProperty("title", "Кабинет аффилиата");
$APPLICATION->SetPageProperty("keywords", "Кабинет аффилиата");
$APPLICATION->SetPageProperty("description", "Кабинет аффилиата");
$APPLICATION->SetTitle("Кабинет аффилиата");
?><br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:sale.affiliate.report",
	"",
	Array(
		"REGISTER_PAGE" => "register.php",
		"SET_TITLE" => "Y"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>