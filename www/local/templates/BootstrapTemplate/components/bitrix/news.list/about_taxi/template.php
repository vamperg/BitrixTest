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

<div class="container-sm" style="margin-top: 6rem;">

    <div class="row about-title ">
        <a href="/about"class="center">С нами удобно и выгодно</a>
    </div>
    <?php $i = 1; foreach ($arResult["ITEMS"] as $arItem):?>
        <div class="row card-about card-container <?php if (($i % 2) == 0): echo "card-revers-nobg"; endif; $i++;  ?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="col cardbox-info">
                <div class="row item-title">
                    <div class="col-md-auto">
                        <span>01.</span>
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
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>">
            </div>
        </div>
    <?php endforeach;?>

</div>

