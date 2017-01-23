<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? $i = 0; ?>

<?php foreach ($arResult["ITEMS"] as $post): ?>
    <?php if ($i == 0): ?>
        <div class="first-post-blog">
            <div class="text-post">
                <h2><a href="<?=$post["DETAIL_PAGE_URL"]?>"><?=$post["NAME"]?></a></h2>
                <div class="data"><?=$post["DISPLAY_ACTIVE_FROM"]?></div>
                <p><?=$post["PREVIEW_TEXT"]?></p>
            </div>
            <div class="thrum-post">
                <a href="<?=$post["DETAIL_PAGE_URL"]?>">
                    <?php if ( count($post["PREVIEW_PICTURE"]) > 0 ): ?>
                        <img src="<?=$post["PREVIEW_PICTURE"]["BIG"]["src"]?>" alt="<?=$post["PREVIEW_PICTURE"]["ALT"]?>">
                    <?php endif ?>
                </a>
            </div>
        </div>
    <?php elseif ($i > 0 && $i < 4) : ?>

        <?php if ($i == 1 ): ?>
            <div class="list-post">
        <?php endif ?>

                <div class="item-post">
                    <div class="thrum-post">
                        <a href="<?=$post["DETAIL_PAGE_URL"]?>">

                            <?php if ( count($post["PREVIEW_PICTURE"]) > 0 ): ?>
                                <img src="<?=$post["PREVIEW_PICTURE"]["SML"]["src"]?>" alt="<?=$post["PREVIEW_PICTURE"]["ALT"]?>">
                            <?php endif ?>

                        </a>
                    </div>
                    <h3><a href="<?=$post["DETAIL_PAGE_URL"]?>"><?=$post["NAME"]?></a></h3>
                    <div class="data"><?=$post["DISPLAY_ACTIVE_FROM"]?></div>
                </div>

        <?php if ($i == 3 || (count($arResult["ITEMS"]) > 1 && $i == count($arResult["ITEMS"]) ) ): ?>
            </div>
        <?php endif ?>

    <?php else : ?>
        <?php if ($i == 4): ?>

            <div class="other-post">
                <h3>Другие записи в блоге</h3>
                <ul class="list-unstyled">

        <?php endif ?>

                    <li><a href="<?=$post["DETAIL_PAGE_URL"]?>"><?=$post["NAME"]?></a><span class="data"><?=$post["DISPLAY_ACTIVE_FROM"]?></span></li>

    <?php endif; ?>
    <? $i++; ?>
<?php endforeach ?>

    <?php if ($i >= 4): ?>
                </ul>
            </div>
    <?php endif ?>
                


<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <br/><?= $arResult["NAV_STRING"] ?>
<? endif; ?>