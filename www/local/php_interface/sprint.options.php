<?php


use Sprint\Options\Builder\Builder;

return (new Builder)
    ->setTitle('Настройки контента')
    ->setSort(60)
    ->addPage('Страница 1')
    ->addTab('О компании')
    ->addOption('EMAIL', [
        'TITLE'   => 'Email компании',
        'DEFAULT' => 'about@example.com',
        'WIDTH'   => '400',
    ])
    ->addOption('OFFICE', [
        'TITLE'   => 'Адрес офиса',
        'DEFAULT' => 'г. Уфа, ул. Тестовая, д. 28, стр. 1, офис 205',
        'WIDTH'   => '600',
        'HEIGHT'  => '100',
    ])
    ->addOption('TIME', [
        'TITLE'   => 'Время работа',
        'DEFAULT' => 'Время работы офиса:<br>Пн-пт с 10:00 до 19:00<br>Время работы диспетчерской:<br>с 9:00 до 21:00, без выходных',
        'WIDTH'   => '600',
        'HEIGHT'  => '100',
    ])
    ->addOption('TEL', [
        'TITLE'   => 'Номер телефона',
        'DEFAULT' => '+7 (999) 123-45-67',
        'WIDTH'   => '400',
        'HEIGHT'  => '20',
    ])
    ->addTab('Общие')
    ->addOption('SELECT1', [
        'TITLE'   => 'Значение из списка',
        'DEFAULT' => 'var2',
        'OPTIONS' => [
            'var1' => 'Вариант 1',
            'var2' => 'Вариант 2',
            'var3' => 'Вариант 3',
            'var4' => 'Вариант 4',
        ],
    ])
    ->addPage('Мессенджеры')
    ->addTab('facebook')
    ->addOption('facebook', [
        'TITLE'   => 'Ссылка на сайт',
        'DEFAULT' => 'about1@example.com',
        'WIDTH'   => '400',
    ])
    ->addTab('youtube')
    ->addOption('youtube', [
        'TITLE'   => 'Ссылка на сайт',
        'DEFAULT' => 'about1@example.com',
        'WIDTH'   => '400',
    ])
    ->addTab('instagram')
    ->addOption('instagram', [
        'TITLE'   => 'Ссылка на сайт',
        'DEFAULT' => 'about1@example.com',
        'WIDTH'   => '400',
    ])
    ->addTab('telegram')
    ->addOption('telegram', [
        'TITLE'   => 'Ссылка на сайт',
        'DEFAULT' => 'about1@example.com',
        'WIDTH'   => '400',
    ])
    ->addTab('ВК')
    ->addOption('vk', [
        'TITLE'   => 'Ссылка на сайт',
        'DEFAULT' => 'about2@example.com',
        'WIDTH'   => '400',
    ]);


?>
