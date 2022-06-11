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

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="container-sm" style="margin-bottom: 30px;">
        <div id="mainPageCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $i = 0; foreach ($arResult["ITEMS"] as $arItem):
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="carousel-item <?php if ($i == 0): echo "active"; endif; $i++; ?> " id="<?=$this->GetEditAreaId($arItem['ID']);?>">

                             <img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" class="d-block w-100" alt="page">

                    </div>
                <?php endforeach; ?>


            <button class="carousel-control-prev" style="left:-35px" type="button" data-bs-target="#mainPageCarousel"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon carousel-arrow"   aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" style="right:-35px" type="button" data-bs-target="#mainPageCarousel"  data-bs-slide="next">
                <span class="carousel-control-next-icon carousel-arrow" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    </div>
<?php endif; ?>

        <script src="//cdn.jsdelivr.net/jquery.touchswipe/1.6.5/jquery.touchSwipe.min.js"></script>
        <script>$(document).ready(function(){
                $(".carousel").swipe( {
                    swipeLeft: function() {
                        $(this).carousel("next");
                    },
                    swipeRight: function() {
                        $(this).carousel("prev");
                    },
                    allowPageScroll: "vertical"
                });
            });</script>
