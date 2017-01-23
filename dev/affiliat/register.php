<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Кабинет аффилиата");
$APPLICATION->SetPageProperty("title", "Кабинет аффилиата");
$APPLICATION->SetPageProperty("keywords", "Кабинет аффилиата");
$APPLICATION->SetPageProperty("description", "Кабинет аффилиата");
$APPLICATION->SetTitle("Кабинет аффилиата");
?><br>
<h1 class="text-center">Регистрация в программе Аффилиатов</h1>
 <br>
 <br><?$APPLICATION->IncludeComponent("bitrix:sale.affiliate.register", "af-register", Array(
	"AGREEMENT_TEXT_FILE" => "/bitrix/components/bitrix/sale.affiliate.register/agreement-ru.htm",	// Путь к файлу с пользовательским соглашением
		"REDIRECT_PAGE" => $_REQUEST["REDIRECT_PAGE"],	// Страница для перехода после регистрации
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
	),
	false
);?><br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>