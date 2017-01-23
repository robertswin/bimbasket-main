<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("tralex");
?>
<? $APPLICATION->IncludeComponent(
"tralex:shop.box",
"main",
Array(
),
false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>