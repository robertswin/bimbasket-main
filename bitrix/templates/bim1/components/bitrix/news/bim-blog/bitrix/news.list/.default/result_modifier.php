<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult["ITEMS"] as $key => $value) {
	if( count( $value["PREVIEW_PICTURE"] ) > 0 ){
		$fileBIG = CFile::ResizeImageGet($value["PREVIEW_PICTURE"]["ID"], array('width'=>520, 'height'=>300), BX_RESIZE_IMAGE_EXACT, true);
		$fileSML = CFile::ResizeImageGet($value["PREVIEW_PICTURE"]["ID"], array('width'=>260, 'height'=>180), BX_RESIZE_IMAGE_EXACT, true);

		$arResult["ITEMS"][$key]["PREVIEW_PICTURE"]["BIG"] = $fileBIG;
		$arResult["ITEMS"][$key]["PREVIEW_PICTURE"]["SML"] = $fileSML;
	}
}