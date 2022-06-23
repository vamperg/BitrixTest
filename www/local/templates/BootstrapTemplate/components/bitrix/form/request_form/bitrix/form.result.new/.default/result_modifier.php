<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arResult['funcGetInputHtml'] = function($question, $arrVALUES) {
    $id = $question['STRUCTURE'][0]['ID'];
    $type = $question['STRUCTURE'][0]['FIELD_TYPE'];
    $answer_text = $question['STRUCTURE'][0]['MESSAGE'];
    $placeholder = $question['STRUCTURE'][0]['VALUE'];
    $caption = $question['CAPTION'];
    $name = "form_{$type}_{$id}";
    $value = isset($arrVALUES[$name]) ? htmlentities($arrVALUES[$name]) : '';
    $required = $question['REQUIRED'] === 'Y' ? 'required' : '';
    $class = ' ' . $question['STRUCTURE'][0]['FIELD_PARAM'];
    switch ($type)
    {
        case 'textarea':
            $input = "<textarea class=\"form-message {$class}\" name=\"{$name}\" {$required} >{$value}</textarea> ";
            break;
        case 'checkbox':
            $input = "<input id=\"{$id}\" class=\"call__form-input {$class} form-check-input\" type=\"checkbox\" name=\"form_checkbox_CHECK[]\" oninvalid=\"this.setCustomValidity('Вы пропустили чекбокс')\" oninput=\"setCustomValidity('')\" value=\"{$id}\" {$required}>";
            break;
        // case 'text':
        default:
                $input = "<input class=\"call__form-input {$class} form-box-input\" type=\"text\" name=\"{$name}\" value=\"{$value}\" {$required} placeholder=\"{$placeholder}\" oninvalid=\"this.setCustomValidity('Вы пропустили {$caption}')\" oninput=\"setCustomValidity('')\"> ";
            break;
    }

    return $input;
};

