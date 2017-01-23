<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<div class="input-group search">
<form action="<?=$arResult["FORM_ACTION"]?>">
	<table border="0" cellspacing="0" cellpadding="2" align="center">
		<tr>
			<td align="center"><?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
				"bitrix:search.suggest.input",
				"",
				array(
					"NAME" => "q",
					"VALUE" => "",
					"INPUT_SIZE" => 15,
					"DROPDOWN_SIZE" => 10,
				),
				$component, array("HIDE_ICONS" => "Y")
			);?><?else:?><input type="text" name="q" value="" size="15" maxlength="50" class="search-inpt pull-right" /><?endif;?></td>
		</tr>
		<tr>
			<td align="right"><button name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>"  class="search-btn btn "/></td>
		</tr>
	</table>
</form>
</div>



<div class="input-group search">
<form action="<?=$arResult["FORM_ACTION"]?>">
									<input type="text" name="q" value="" class="search-inpt pull-right">
									<span class="input-group-btn">
								<button class="search-btn btn " type="submit"></button>
	</span>
	</form>
								</div>