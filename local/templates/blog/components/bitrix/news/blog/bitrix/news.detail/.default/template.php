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
//debug($arResult);
?>
<div class="box1">
    <h3><a href="<?= $arResult["DETAIL_PAGE_URL"]; ?>"><?= $arResult["NAME"]; ?></a></h3>
    <span><?= $arResult["PROPERTIES"]["AUTHOR"]["VALUE"]; ?>- <?= substr($arResult["TIMESTAMP_X"], 0, 16); ?><span class="comments">8 Comments</span></span>
    <div class="blog-img">
        <div class="view-back">
            <span class="views" title="views">(<?= $arResult["SHOW_COUNTER"]; ?>)</span>
            <span class="likes" title="likes">(124)</span>
            <span class="link" title="link">(24)</span>
            <a href="<?= $arResult["DETAIL_PAGE_URL"]; ?>"> </a>
        </div>
        <a href="<?= $arResult["DETAIL_PAGE_URL"]; ?>"><img src="<?= $arResult["DETAIL_PICTURE"]["SRC"]; ?>"></a>
    </div>
    <div class="data">
        <p><?= $arResult["DETAIL_TEXT"]; ?></p>
    </div>
    <div class="clear"></div>
</div>