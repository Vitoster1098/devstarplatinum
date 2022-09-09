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
//debug($arResult);
?>
<div class="sidebar_top">
    <h3>Blog Categories</h3>
    <div class="sidebar_top_list">
        <ul>
            <? foreach ($arResult["SECTIONS"] as $arItem): ?>
                <? $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"],
                    "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"],
                    "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BLN_ELEMENT_DELETE_CONFIRM')]); ?>
                <li id="<?=$this->GetEditAreaId($arItem['ID']);?>"><a href="<?= $arItem['SECTION_PAGE_URL']; ?>"><span class="category-name"><?= $arItem['NAME']; ?></span>
                <? if($arParams["COUNT_ELEMENTS"]): ?>
                    <span class="count">(<?= $arItem['ELEMENT_CNT']; ?>)</span><div class="clear"></div></a></li>
                <? endif; ?>
            <? endforeach; ?>
        </ul>
    </div>
</div>
