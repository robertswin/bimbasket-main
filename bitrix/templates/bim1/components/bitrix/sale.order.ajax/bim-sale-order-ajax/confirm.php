<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 * @var array $arResult
 * @var $APPLICATION CMain
 */

if ($arParams["SET_TITLE"] == "Y")
	$APPLICATION->SetTitle(Loc::getMessage("SOA_ORDER_COMPLETE"));
?>
<? if (!empty($arResult["ORDER"])): ?>
<?//CPAExchange pixel frame?>
<iframe src="https://partners.cpaex.ru/track?offer_id=21&track_id=<?=$arResult["ORDER_ID"];?>" height="1" width="1" frameborder="0" scrolling="no"></iframe>

<?
// корзин для текущего заказа

$arBasketItems = array();

$dbBasketItems = CSaleBasket::GetList(
    array(
            "NAME" => "ASC",
            "ID" => "ASC"
        ),
    array(
            "LID" => SITE_ID,
            "ORDER_ID"=> $arResult["ORDER_ID"]
        ),
    false,
    false,
    array("ID",
          "CALLBACK_FUNC", 
          "MODULE", 
          "PRODUCT_ID", 
          "QUANTITY", 
          "CURRENCY",
          "DELAY", 
          "CAN_BUY", 
          "PRICE", 
          "WEIGHT")
    );

while ($arItems = $dbBasketItems->Fetch())
{
    if (strlen($arItems["CALLBACK_FUNC"]) > 0)
    {

        $arItems = CSaleBasket::GetByID($arItems["ID"]);
    }

    $arBasketItems[] = $arItems;
}?>

<?//вывод елементов корзины со свойствами в pre?>
<?// echo "<pre class='basel' style='display:none'>"; ?>
<?// echo $var = count($arBasketItems); ?>
<?// echo "</pre>"; ?>

<?//вывод свойств заказа в pre?>
<?// echo "<pre class='orderbasel' style='display:none'>"; ?>
<?// print_r($arResult); ?>
<?// echo "</pre>"; ?>

<script type="text/javascript">
(function (d, w) {
		
        w._admitadPixel = {
            response_type: 'img',     // 'script' or 'img'. Default: 'img'
            action_code: '1',
            campaign_code: 'b95f05e807'
        };
        w._admitadPositions = w._admitadPositions || [];
        <? foreach ($arBasketItems as $k => $v) { ?>
        	w._admitadPositions.push({
            uid: '<?=$_COOKIE["admitad_cookie"];?>',
            tariff_code: '1',
            order_id: '<?=$arResult["ACCOUNT_NUMBER"];?>',
            position_id: '<?=$k+1?>', //массив начинается с 0, поэтому приписываем 1
            currency_code: '<?=$v["CURRENCY"];?>',
            position_count: '<?=count($arBasketItems);?>',
            price: '<?=round($v["PRICE"], 0);?>',
            quantity: '<?=$v["QUANTITY"];?>',
            product_id: '<?=$v["PRODUCT_ID"];?>',
            payment_type: 'sale'
        });
        <? } ?>
        
        var id = '_admitad-pixel';
        if (d.getElementById(id)) { return; }
        var s = d.createElement('script');
        s.id = id;
        var r = (new Date).getTime();
        var protocol = (d.location.protocol === 'https:' ? 'https:' : 'http:');
        s.src = protocol + '//cdn.asbmit.com/static/js/pixel.min.js?r=' + r;
        var head = d.getElementsByTagName('head')[0];
        head.appendChild(s);
    })(document, window)
</script>
<noscript>
 <? $thank_you_retag_arr = array(); ?>
 <? foreach ($arBasketItems as $k => $v) { ?>
    <img src="//ad.admitad.com/r?campaign_code=b95f05e807&action_code=1&payment_type=sale&response_type=img&tariff_code=1&uid=<?=$_COOKIE["admitad_cookie"];?>&order_id=<?=$arResult["ACCOUNT_NUMBER"];?>&position_id=<?=$k+1?>&currency_code=<?=$v["CURRENCY"];?>&position_count=<?=count($arBasketItems);?>&price=<?=round($v["PRICE"],0);?>&quantity=<?=$v["QUANTITY"];?>&product_id=<?=$v["PRODUCT_ID"];?>" width="1" height="1" alt="">
    <?
     $thank_you_retag_arr[$k]["id"] = $v["PRODUCT_ID"];
     $thank_you_retag_arr[$k]["number"] = $v["QUANTITY"];
    ?>
 <? } ?>
</noscript>

<?//просто проверка посмотреть на правильную структуру данных?>
<?// echo "<pre class='ty' style='display:none'>"; ?>
<?// print_r($thank_you_retag_arr); ?>
<?//=json_encode($thank_you_retag_arr)?>
<?// echo "</pre>"; ?>

<script type="text/javascript">
    window.ad_order = "<?=$arResult["ACCOUNT_NUMBER"];?>";    // required
    window.ad_amount = "<?=round($arResult["ORDER"]["PRICE"],0);?>";
    window.ad_products = <?=json_encode($thank_you_retag_arr)?>;

    window._retag = window._retag || [];
    window._retag.push({code: "9ce8887779", level: 4});
    (function () {
        var id = "admitad-retag";
        if (document.getElementById(id)) {return;}
        var s = document.createElement("script");
        s.async = true; s.id = id;
        var r = (new Date).getDate();
        s.src = (document.location.protocol == "https:" ? "https:" : "http:") + "//cdn.lenmit.com/static/js/retag.min.js?r="+r;
        var a = document.getElementsByTagName("script")[0]
        a.parentNode.insertBefore(s, a);
    })()
</script>

	
	<table class="sale_order_full_table">
		<tr>
			<td>
				<?=Loc::getMessage("SOA_ORDER_SUC", array(
					"#ORDER_DATE#" => $arResult["ORDER"]["DATE_INSERT"],
					"#ORDER_ID#" => $arResult["ORDER"]["ACCOUNT_NUMBER"]
				))?>
				<? if (!empty($arResult['ORDER']["PAYMENT_ID"])): ?>
					<?=Loc::getMessage("SOA_PAYMENT_SUC", array(
						"#PAYMENT_ID#" => $arResult['PAYMENT'][$arResult['ORDER']["PAYMENT_ID"]]['ACCOUNT_NUMBER']
					))?>
				<? endif ?>
				<br /><br />
				<?=Loc::getMessage("SOA_ORDER_SUC1", array("#LINK#" => $arParams["PATH_TO_PERSONAL"]))?>
			</td>
		</tr>
	</table>

	<?
	if (!empty($arResult["PAYMENT"]))
	{
		foreach ($arResult["PAYMENT"] as $payment)
		{
			if ($payment["PAID"] != 'Y')
			{
				if (!empty($arResult['PAY_SYSTEM_LIST'])
					&& array_key_exists($payment["PAY_SYSTEM_ID"], $arResult['PAY_SYSTEM_LIST'])
				)
				{
					$arPaySystem = $arResult['PAY_SYSTEM_LIST'][$payment["PAY_SYSTEM_ID"]];

					if (empty($arPaySystem["ERROR"]))
					{
					?>
						<br /><br />

						<table class="sale_order_full_table">
							<tr>
								<td class="ps_logo">
									<div class="pay_name"><?= Loc::getMessage("SOA_PAY") ?></div>
									<?= CFile::ShowImage($arPaySystem["LOGOTIP"], 100, 100, "border=0\" style=\"width:100px\"", "", false) ?>
									<div class="paysystem_name"><?= $arPaySystem["NAME"] ?></div>
									<br/>
								</td>
							</tr>
							<tr>
								<td>
									<? if (strlen($arPaySystem["ACTION_FILE"]) > 0 && $arPaySystem["NEW_WINDOW"] == "Y" && $arPaySystem["IS_CASH"] != "Y"): ?>
										<?
										$orderAccountNumber = urlencode(urlencode($arResult["ORDER"]["ACCOUNT_NUMBER"]));
										$paymentAccountNumber = $payment["ACCOUNT_NUMBER"];
										?>
										<script>
											window.open('<?=$arParams["PATH_TO_PAYMENT"]?>?ORDER_ID=<?=$orderAccountNumber?>&PAYMENT_ID=<?=$paymentAccountNumber?>');
										</script>
										<?=Loc::getMessage("SOA_PAY_LINK", array("#LINK#" => $arParams["PATH_TO_PAYMENT"]."?ORDER_ID=".$orderAccountNumber."&PAYMENT_ID=".$paymentAccountNumber))?>
										<? if (CSalePdf::isPdfAvailable() && $arPaySystem['IS_AFFORD_PDF']): ?>
											<br/>
											<?=Loc::getMessage("SOA_PAY_PDF", array("#LINK#" => $arParams["PATH_TO_PAYMENT"]."?ORDER_ID=".$orderAccountNumber."&pdf=1&DOWNLOAD=Y"))?>
										<? endif ?>
									<? else: ?>
										<?=$arPaySystem["BUFFERED_OUTPUT"]?>
									<? endif ?>
								</td>
							</tr>
						</table>
						
					<?
					}
					else
					{
					?>
						<span style="color:red;"><?= Loc::getMessage("SOA_ORDER_PS_ERROR")?></span>
					<?
					}
				}
				else
				{
				?>
					<span style="color:red;"><?= Loc::getMessage("SOA_ORDER_PS_ERROR")?></span>
				<?
				}
			}
		}
	}
	?>
	
<? else: ?>
	
	<b><?=Loc::getMessage("SOA_ERROR_ORDER")?></b>
	<br /><br />

	<table class="sale_order_full_table">
		<tr>
			<td>
				<?=Loc::getMessage("SOA_ERROR_ORDER_LOST", array("#ORDER_ID#" => $arResult["ACCOUNT_NUMBER"]))?>
				<?=Loc::getMessage("SOA_ERROR_ORDER_LOST1")?>
			</td>
		</tr>
	</table>
	
<? endif ?>