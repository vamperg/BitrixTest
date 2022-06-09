<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use \Bitrix\Main\Localization\Loc;
?>

</main>

<footer>
    <div class="container footer">
        <div class="row">
            <div class="col-6 col-md-4">
                <h2><?=Loc::getMessage('TITLE')?></h2>
            </div>
            <div class="col-6 col-md-5">
                <p class="company-info-footer"><?=sprint_options_get('OFFICE')?></p>
            </div>
            <div class="col-6 col-md-3">
                <p class="company-info-footer"><a href="tel:<?=sprint_options_get('TEL')?>"><?=sprint_options_get('TEL')?></a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-4">

            </div>
            <div class="col-6 col-md-5">
                <p class="company-info-footer"><?=sprint_options_get('TIME')?></p>
            </div>
            <div class="col-6 col-md-3 messenger">
                <a href="<?=sprint_options_get('facebook')?>">
                    <img src="<?=SITE_TEMPLATE_PATH . '/img/facebook.svg'?>">
                </a>
                <a href="<?=sprint_options_get('youtube')?>">
                    <img src="<?=SITE_TEMPLATE_PATH . '/img/youtube.svg'?>">
                </a>
                <a href="<?=sprint_options_get('instagram')?>">
                    <img src="<?=SITE_TEMPLATE_PATH . '/img/instagram.svg'?>">
                </a>
                <a href="<?=sprint_options_get('telegram')?>">
                    <img src="<?=SITE_TEMPLATE_PATH . '/img/telegram.svg'?>">
                </a>
                <a href="<?=sprint_options_get('vk')?>">
                    <img src="<?=SITE_TEMPLATE_PATH . '/img/vk.svg'?>">
                </a>
            </div>
        </div>
        <div class="row" style="margin-top:3rem">
            <div class="col-6 col-md-4">
                <p class="company-info-footer">© <?=date("Y")?>  ТКМ парк такси</p>
            </div>
            <div class="col-6 col-md-5">
                <a href="#"><?=Loc::getMessage('PRIVACY')?></a>
            </div>
            <div class="col-6 col-md-3">
                <a href="#"><?=Loc::getMessage('WEBPLACE')?></a>
            </div>
        </div>
    </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>

