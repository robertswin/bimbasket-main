<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Кабинет аффилиата инструкции");
$APPLICATION->SetPageProperty("title", "Кабинет аффилиата инструкции");
$APPLICATION->SetPageProperty("keywords", "Кабинет аффилиата инструкции");
$APPLICATION->SetPageProperty("description", "Кабинет аффилиата инструкции");
$APPLICATION->SetTitle("Кабинет аффилиата инструкции");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.affiliate.instructions",
	"",
	Array(
		"AFF_REG_PAGE" => "/affiliate/register.php",
		"REGISTER_PAGE" => "register.php",
		"SET_TITLE" => "Y",
		"SHOP_NAME" => "",
		"SHOP_URL" => ""
	)
);?><br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>