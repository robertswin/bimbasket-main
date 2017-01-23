<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация аффилиата");
?>

<link rel="stylesheet" href="style.css">
<div id="aff-main">
<h3 class="text-center">Партнерская программа Бимбаскет</h3>
<h4 class="text-center">Участвуй в партнерской программе компании Бимбаскет получай бонусы и подарки.</h4>

<div id="aff-how-to">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		<img src="images/aff-how-to.png" alt="" style="float:left;">
		
		
		</div>
		
		
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
		<h5><b>Что такое партнерская программа Бимбаскет?</b></h5>
		<p>Партнерская программа Бимбаскет - это новый способ совершать покупки в нашем интернет магазине. У вас есть сайт или блог? А может быть толпа подписчиков в соц. сетях? Да, тогда эта программа для вас! Размещайте партнерскую ссылку и привлекайте ваших друзей к покупкам на сайте Бимбаскет. </p>
		</div>
	</div>
</div>


<div id="aff-changes">
	<div class="row">
		<div class="col-xs12 col-sm-12 col-md-9 col-lg 9">
			
			<h5><b>Партнерский счет</b></h5>
			<p>Отслеживайте изменение баланса в личном кабинете. В любой момент узнавайте актуальную информацию о накопленных бонусах.</p>
			
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<img src="images/aff-spy.png" alt="">
		</div>
	</div>
</div>
<div id="aff-result">
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h3 class="text-center">Регистрация в партнерской программе</h3>
	</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		<img src="images/success-aff-1.png" alt="" class="img-responsive">
		
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
		<?$APPLICATION->IncludeComponent(
	"bitrix:sale.affiliate.register",
	"",
	Array(
		"AGREEMENT_TEXT_FILE" => "/bitrix/components/bitrix/sale.affiliate.register/agreement-ru.htm",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"REDIRECT_PAGE" => $_REQUEST["REDIRECT_PAGE"],
		"SET_TITLE" => "Y"
	)
);?>
		</div>
		
	</div>
</div>



<br>
<br>
<br>
<br>






<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>