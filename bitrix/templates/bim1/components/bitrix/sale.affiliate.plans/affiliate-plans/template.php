<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

if (count($arResult) > 0)
{
	?>
	<div id="affiliate-plans">
	<ul class="list-unstyled">
	<?
	foreach ($arResult as $arPlan)
	{
		?>
		<li class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><b class="name"><?=$arPlan["NAME"]?></b><br />
		<?
		if (StrLen($arPlan["DESCRIPTION"]) > 0)
		{
		?>
			<small><?=$arPlan["DESCRIPTION"]?></small><br />
		<?
		}
		?>
		<?=GetMessage("SPCAT1_TARIF")?>
		<?=$arPlan["BASE_RATE_FORMAT"] ?>
		<br />
		<?
		if ($arPlan["MIN_PLAN_VALUE"] > 0)
		{?>
			<?=$arPlan["MIN_PLAN_VALUE_FORMAT"]?>
			<br />
		<?
		}
		?>
		<button class="btn btn-register">Участвую!</button>
		</li>
		<?
	}
	?>
	</ul>
	</div>
	<?
}
else
{
	?>
	<?=ShowError(GetMessage("SPCAT1_NO_PLANS"))?>
	<?
}
?>