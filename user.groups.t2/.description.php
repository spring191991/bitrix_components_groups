<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
    'NAME' => 'Группы пользователей',
    'DESCRIPTION' => 'Выводим группы пользователей',
    'ICON' => '/images/icon.gif',
    'CACHE_PATH' => 'Y',
    'SORT' => 40,
    'COMPLEX' => 'Y',
    'PATH' => array(
        'ID' => 'other_components',
        'NAME' => 'Прочие компоненты',
        'CHILD' => array(
            'ID' => 'other_iblock',
            'NAME' => 'Группы пользователей'
        )
    )
);