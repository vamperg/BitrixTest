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

<div class="container-sm" style="margin-top: 13rem;">

    <div class="row about-title center">
        <div class="col"><a href="/about">С нами удобно и выгодно</a></div>
    </div>
    <?php $i = 1; $itemTitle = "01"; foreach ($arResult["ITEMS"] as $arItem):

        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="row card-about card-container <?php if (($i % 2) == 0): echo "card-revers-nobg"; endif;  $itemTitle = $i; if ($i < 10){ $itemTitle = "0$i"; } $i++;  ?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="col cardbox-info">
                <div class="row item-title">
                    <div class="col-md-auto">
                        <span><?=$itemTitle;?>.</span>
                    </div>
                    <div class="col-7" style="align-self: center; padding: 0;">
                        <h1><?=$arItem['NAME'];?></h1>
                    </div>
                </div>
                <div class="row item-description">
                    <?=$arItem['PREVIEW_TEXT'];?>
                </div>
            </div>
            <div class="col cardbox-image">
                <a href="<?=$arItem["DETAIL_PAGE_URL"];?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>"></a>
            </div>
        </div>
    <?php endforeach;?>

</div>

