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



<div class="container-sm" style="margin-top: 2rem; margin-bottom: 5rem;">
    <div class="row detail_news">
        <div class="card" style="width: 100%;">
            <div class="back-button" style="width: 4%;"><a href="../"><img style="width: 100%;" src="<?=$this->GetFolder()?>/img/back_button2.png""></a></div>
            <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="card-img-top" style="width: 50%; align-self: center;">
            <div class="card-body">
                <h3 class="card-title"><?=$arResult["NAME"];?></h3>
                <p class="card-text"><?=$arResult["DETAIL_TEXT"];?></p>
            </div>
        </div>
    </div>
</div>