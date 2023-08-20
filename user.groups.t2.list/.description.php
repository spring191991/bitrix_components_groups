<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
    'NAME' => 'Список групп пользователей',
    'DESCRIPTION' => 'Выводим список групп пользователей',
    'ICON' => '/images/icon.gif',
    'CACHE_PATH' => 'Y',
    'SORT' => 40,
    'COMPLEX' => 'N',
    'PATH' => array(
        'ID' => 'other_components',
        'NAME' => 'Прочие компоненты',
        'CHILD' => array(
            'ID' => 'other_iblock',
            'NAME' => 'Список групп пользователей'
        )
    )
);