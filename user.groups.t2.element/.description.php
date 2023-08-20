<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
    'NAME' => 'Описание группы пользователя',
    'DESCRIPTION' => 'Выводим описание группы пользователя',
    'ICON' => '/images/icon.gif',
    'CACHE_PATH' => 'Y',
    'SORT' => 40,
    'COMPLEX' => 'N',
    'PATH' => array(
        'ID' => 'other_components',
        'NAME' => 'Прочие компоненты',
        'CHILD' => array(
            'ID' => 'other_iblock',
            'NAME' => 'Описание группы пользователя'
        )
    )
);