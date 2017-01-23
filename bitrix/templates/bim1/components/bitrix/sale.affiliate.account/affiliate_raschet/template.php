<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
if ($arResult)
{
	?>
	
	

<div id="result-filter-form" class="row">

<h1 class="filter-name"><?=GetMessage("SPCA_FILTER")?></h1>
<form method="GET" action="<?=$arResult["CURRENT_PAGE"]?>" name="bfilter_<?=$arResult["FILTER_ID"]?>">



<div class="col-xs-6">
<?=GetMessage("SPCA_PERIOD")?>

<?$APPLICATION->IncludeComponent(
"bitrix:main.calendar",
"",
Array(
"SHOW_INPUT" => "Y", 
"FORM_NAME" => "bfilter_".$arResult["FILTER_ID"], 
"INPUT_NAME" => "filter_date_from", 
"INPUT_NAME_FINISH" => "filter_date_to", 
"INPUT_VALUE" => $arResult["FILTER"]["filter_date_from"], 
"INPUT_VALUE_FINISH" => $arResult["FILTER"]["filter_date_to"], 
"SHOW_TIME" => "N" 
)
);?>
</div>
<div class="col-xs-6">

<input type="submit" name="filter" class="set" value="<?=GetMessage("SPCA_SET")?>">&nbsp;&nbsp;
<input type="submit" name="del_filter" class="unset" value="<?=GetMessage("SPCA_UNSET")?>">

</div>







</form>

</div>
	
	
	
	
	
<div id="thead">
<div class="col-xs-3">
<?=GetMessage("SPCA_DATE")?>
</div>
<div class="col-xs-3">
<?=GetMessage("SPCA_INCOME")?>
</div>
<div class="col-xs-3">
<?=GetMessage("SPCA_OUTCOME")?>
</div>
<div class="col-xs-3">
<?=GetMessage("SPCA_COMMENT")?>
</div>	
</div>	
	
	
	
	<table class="data-table">
		
		<tbody>
		<?
		if (count($arResult["TRANSACT"]) > 0)
		{
			foreach ($arResult["TRANSACT"] as $arTransact)
			{
				?>
				<tr>
					<td><?=$arTransact["TRANSACT_DATE"]?></td>
					<td><?=$arTransact["AMOUNT_INCOME"]?></td>
					<td><?=$arTransact["AMOUNT_OUTCOME"]?></td>
					<td><?=$arTransact["DESCRIPTION_NOTES"]?></td>
				</tr>
				<?
			}
		}
		else
		{
			?>
			<tr>
				<td colspan="4"><?=ShowNote(GetMessage("SPCA_NO_ACT"))?></td>
			</tr>
			<?
		}
		?>
		</tbody>
		<tfoot>
		<tr>
			<td><?=GetMessage("SPCA_ON_ACCT")?> <?=$arResult["CURRENT_DATE"]?></td>
			<td><?=$arResult["PAID_SUM_INCOME"]?></td>
			<td><?=$arResult["PAID_SUM_OUTCOME"]?></td>
			<td>&nbsp;</td>
		</tr>
		</tfoot>
	</table>
	<?
}
else
{
	?><?=ShowError(GetMessage("SPCA_UNACTIVE_AFF"))?><?
}
?>