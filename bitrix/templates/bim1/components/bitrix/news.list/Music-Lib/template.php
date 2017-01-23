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
<script src="js/audio.min.js"></script>
<script src="js/script.js"></script>
<script>
  audiojs.events.ready(function() {
    var as = audiojs.createAll();
  });
</script>


<br>
<div id="music-Lib" class="music-Lib">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<!-- // PLAYER BODY  -------------------------- -->
<audio id="audioarea"  src=""></audio>
<p class="now-playing">

</p>
<ul id="playlist">
<?foreach($arResult["ITEMS"] as $arItem):?>	
<p class="name">

Музыка для набора на 
 <?
 $res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
	if($ar_res = $res->GetNext()) {
	  echo $ar_res['NAME'];						  
	}
?> 
<?echo $arItem["NAME"];?>





</p>
<?foreach($arItem["DISPLAY_PROPERTIES"]["MUS_IN_BOX"]["FILE_VALUE"] as $pid=>$arFiles):?>
<li songurl="<?=$arFiles['SRC']?>" ><?=$arFiles['ORIGINAL_NAME']?></li><br>
<?endforeach;?>
<?endforeach;?>	
</ul>
<!-- // PLAYER BODY  -------------------------- -->
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<img src="success-aff-2.png" alt="">


</div>
</div>




<?//if($USER->IsAdmin()) {echo '<pre>'; print_r(); echo '</pre>';} ?>

</div>







