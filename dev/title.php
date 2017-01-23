<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

?>

<?$APPLICATION->IncludeComponent(
	"bitrix:sender.subscribe",
	"",
	Array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CONFIRMATION" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_HIDDEN" => "N",
		"USE_PERSONALIZATION" => "Y"
	)
);?>