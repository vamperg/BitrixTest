<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>



<? if ($arResult["isFormNote"] === "Y"): ?>
    <script>
        var modal=document.querySelector(".modal");
        modal.style.display = "block";
        function openModal() {
            modal.style.display = "block";
        }
        function closeModal(){
            modal.style.display = "none";
        }
    </script>
    <div class="modal" tabindex="1" style="background: rgba(0,0,0,0.6)">
        <div class="modal-dialog modal-dialog-centered" >
            <div class="modal-content modal-box" >
                <div class="modal-header">
                    <button type="button" class="btn-close" onclick="closeModal();"  aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><?=sprint_options_get('FORM_MESSAGE')?></p>
                </div>
            </div>
        </div>
    </div>

    <?=$arResult["FORM_HEADER"]?>
    <input type="hidden" name="web_form_submit" value="Y">

    <div class="container-sm container-form" style="margin-top: 6rem; background: url(<?=$templateFolder?>/image/forms-bg.png);" >
        <div class="row">
            <div class="col">
                <div class="form-box">
                    <div class="row" style="margin-bottom: 1rem;" >
                        <h3 style="padding: 0;">Оставляйте заявку<br> на подключение к Яндекс.Такси</h3>
                    </div>
                    <div class="row form-feed">
                        <div class="row form-row">
                            <?=$arResult["QUESTIONS"]['NAME']['CAPTION']?>
                            <?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['NAME'], $arResult['arrVALUES'])?>
                        </div>
                        <br>
                        <div class="row form-row">
                            <?=$arResult["QUESTIONS"]['TEL']['CAPTION']?>
                            <?/*=$arResult["QUESTIONS"]['TEL']['HTML_CODE']*/?>
                            <?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['TEL'], $arResult['arrVALUES'])?>
                        </div>
                        <br>
                        <div class="row form-row" style="padding: 0;">
                            <div class="col-1">
                                <?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['CHECK'], $arResult['arrVALUES'])?>
                            </div>
                            <div class="col">
                                <?=$arResult["QUESTIONS"]['CHECK']['CAPTION']?>
                            </div>
                            <?/*=$arResult["QUESTIONS"]['CHECK']['STRUCTURE'][0]['MESSAGE'];*/?>
                        </div>

                        <br>
                        <input class="form-button" type="submit"  data-bs-toggle="modal"  data-bs-target="#exampleModal" value="<?=$arResult["arForm"]["BUTTON"]?>">
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?=$arResult["FORM_FOOTER"]?>
<? else: ?>

    <?=$arResult["FORM_HEADER"]?>
    <input type="hidden" name="web_form_submit" value="Y">

    <div class="container-sm container-form" style="margin-top: 6rem; background: url(<?=$templateFolder?>/image/forms-bg.png);" >
        <div class="row">
            <div class="col">
                <div class="form-box">
                    <div class="row" style="margin-bottom: 1rem;" >
                        <h3 style="padding: 0;">Оставляйте заявку<br> на подключение к Яндекс.Такси</h3>
                    </div>
                    <div class="row form-feed">
                        <div class="row form-row">
                        <?=$arResult["QUESTIONS"]['NAME']['CAPTION']?>
                        <?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['NAME'], $arResult['arrVALUES'])?>
                        </div>
                        <br>
                        <div class="row form-row">
                        <?=$arResult["QUESTIONS"]['TEL']['CAPTION']?>
                        <?/*=$arResult["QUESTIONS"]['TEL']['HTML_CODE']*/?>
                        <?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['TEL'], $arResult['arrVALUES'])?>
                        </div>
                        <br>
                        <div class="row form-row" style="padding: 0;">
                            <div class="col-1">
                         <?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['CHECK'], $arResult['arrVALUES'])?>
                            </div>
                            <div class="col">
                         <?=$arResult["QUESTIONS"]['CHECK']['CAPTION']?>
                            </div>
                         <?/*=$arResult["QUESTIONS"]['CHECK']['STRUCTURE'][0]['MESSAGE'];*/?>
                        </div>

                        <br>
                        <input class="form-button" type="submit"  data-bs-toggle="modal"   data-bs-target="#exampleModal" value="<?=$arResult["arForm"]["BUTTON"]?>">
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?=$arResult["FORM_FOOTER"]?>
<? endif;?>

<script>
    window.addEventListener("DOMContentLoaded", function() {
        [].forEach.call( document.querySelectorAll('.phone'), function(input) {
            var keyCode;
            function mask(event) {
                event.keyCode && (keyCode = event.keyCode);
                var pos = this.selectionStart;
                if (pos < 3) event.preventDefault();
                var matrix = "+7 (___) ___ ____",
                    i = 0,
                    def = matrix.replace(/\D/g, ""),
                    val = this.value.replace(/\D/g, ""),
                    new_value = matrix.replace(/[_\d]/g, function(a) {
                        return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                    });
                i = new_value.indexOf("_");
                if (i != -1) {
                    i < 5 && (i = 3);
                    new_value = new_value.slice(0, i)
                }
                var reg = matrix.substr(0, this.value.length).replace(/_+/g,
                    function(a) {
                        return "\\d{1," + a.length + "}"
                    }).replace(/[+()]/g, "\\$&");
                reg = new RegExp("^" + reg + "$");
                if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
                if (event.type == "blur" && this.value.length < 5)  this.value = ""
            }

            input.addEventListener("input", mask, false);
            input.addEventListener("focus", mask, false);
            input.addEventListener("blur", mask, false);
            input.addEventListener("keydown", mask, false)

        });

    });
</script>
