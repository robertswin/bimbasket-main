<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="section-page simple">
	<div class="main-work-box">
		<div class="title-header post-topic"><a href="<?=$arParams["IBLOCK_URL"]?>" class="back">Вернуться в блог</a><div class="data"><?=$arResult["ACTIVE_FROM"]?></div></div>
		<div class="clear"></div>
		<div class="method-content wtbg">
		

				<div class="blog-page">
					
					<div class="cont">
						<h1><?=$arResult["NAME"]?></h1>
						<? if(isset($arResult["PREVIEW_PICTURE"]["SRC"]) ): ?>
							<img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arResult["PREVIEW_PICTURE"]["ALT"]?>" style="margin:0 20px 20px 0;" />
						<? endif; ?>

						<?=$arResult["DETAIL_TEXT"];?>
						<br>
						<br>
						<div class="addthis_sharing_toolbox"></div>
            <br>
            <div class="block programm commercial">
              <h2>Развивайте малыша с наборами Бимбаскет, и он будет расти здоровым и умным!</h2>
              <div class="magenta">
                <a href="/about/programs/" class="detail">Развивающая программа <br> на каждый месяц <br> от 0 до 3 лет</a>
              </div>
              <div class="magenta">
                <a href="/promo/giftboxes/" class="detail">Подарочные и <br> тематические наборы <br> от 2 до 4 лет</a>
              </div>
              <div class="magenta">
                <a href="/products/?section_id=157" class="detail">Магазин развивающих игрушек</a>
              </div>
            </div>
            <div style="clear:both"></div>
					</div>
				</div>

			
			<div class="clear"></div>
		</div>
	</div>
</div>
