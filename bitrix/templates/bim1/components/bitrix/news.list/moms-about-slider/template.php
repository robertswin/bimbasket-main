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
$this->setFrameMode(true);
?>
<link  rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/magnific-popup.css"></link>
<style>
.white-popup{position:relative;margin:20px auto;padding:20px;background:#fff;box-shadow:3px 3px 0 1px #323232}.white-popup img{display:block;float:left}.white-popup p.usertag:before{font-family:FontAwesome;font-size:20px;position:relative;padding-right:10px;content:'\f292'}.white-popup p.usertag{font-size:20px;text-transform:uppercase;color:#64c8a4}
</style>
<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<!-- POP1 ------- -->
<div id="testmonial<?=$arItem['ID']?>" class="container white-popup mfp-hide animated slideInDown">
	<div class="row"> 
		<div class="col-xs-2">
			<img src="<?echo $arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
		</div>
	<div class="col-xs-10">
		<p class="usertag"><b><?echo $arItem["NAME"]?></b></p>
		<p><?echo $arItem["PREVIEW_TEXT"];?></p>
	</div>
	</div>
</div>
<!-- POP1 ------- -->
<?endforeach;?>
<!-- // SLIDER -------- -->
<div id="moms-about" class="hidden-xs">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h3 class="text-center">Мамы о Бимбаскет</h3>
				<div class="row">
				<ul id="moms-about-slider" class="list-unstyled">
					<?foreach($arResult["ITEMS"] as $arItem):?>
					<?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
					<li class="col-xs-2">
						<a href="#testmonial<?=$arItem['ID']?>" class="mfpp">
							<img src="<?echo $arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" width="100%" height="auto" class="img-responsive img-rounded">
						</a>
					</li>
					<?endforeach;?>							
				</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
			<h3 class="subtitle text-center">Более 100 000 мам выбирают Бимбаскет. <br>Попробуйте и вы!</h3>
			</div>
		</div>
	</div>
</div>
<!-- // SLIDER -------- -->