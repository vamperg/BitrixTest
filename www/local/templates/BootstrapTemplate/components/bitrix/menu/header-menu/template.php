<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav top-menu mr-auto mb-2 mb-lg-0"  style="flex:1">
                    <?
                    foreach($arResult as $arItem):
                        if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                            continue;
                    ?>
                        <?if($arItem["SELECTED"]):?>
                            <li class="nav-item ">
                                <a class="nav-link top-menu-link active" aria-current="page" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                            </li>
                        <?else:?>
                            <li class="nav-item">
                                <a class="nav-link  top-menu-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                            </li>
                        <?endif?>
                    <?endforeach?>

                </ul>
            </div>
        </div>
    </nav>

<?endif?>