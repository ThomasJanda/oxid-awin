<?php

$sMetadataVersion = '2.0';

$aModule = array(
    'id'          => 'rs-awin',
    'title'       => '*RS awin',
    'description' => 'Affiliate Marketing Awin',
    'thumbnail'   => '',
    'version'     => '1.0.0',
    'author'      => 'Thomas Janda',
    'url'         => 'https://www.awin.com',
    'email'       => '',

    'extend'      => array(
        \OxidEsales\Eshop\Core\ViewConfig::class => rs\awin\Core\ViewConfig::class,
        \OxidEsales\Eshop\Application\Controller\ThankYouController::class => \rs\awin\Core\Controller\ThankYouController::class,
    ),
    'controllers' => array(
    ),
    'blocks'      => array(
        array(
            'template' => 'layout/base.tpl',
            'block'    => 'base_js',
            'file'     => '/views/blocks/layout/base__base_js.tpl',
        ),
    ),
    'settings'    => array(
        array(
            'group' => 'rs-awin_main',
            'name'  => 'rs-awin_id', //advertiserId
            'type'  => 'str',
            'value' => '',
        ),
    ),
);
