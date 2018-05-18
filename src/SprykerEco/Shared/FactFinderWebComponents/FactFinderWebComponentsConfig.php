<?php
namespace SprykerEco\Shared\FactFinderWebComponents;

use Spryker\Shared\Kernel\AbstractBundleConfig;

class FactFinderWebComponentsConfig extends AbstractBundleConfig
{
    const COMMUNICATION_WIDGET_ALLOWED_ATTRIBUTES = [
        'url',
        'version',
        'default-query',
        'channel',
        'search-immediate'
    ];

    const SEARCH_BOX_WIDGET_ALLOWED_ATTRIBUTES = [
        'suggest-onfocus',
        'hidesuggest-onblur',
        'select-onclick',
        'use-suggest',
        'suggest-delay'
    ];


    const SEARCH_BOX_BUTTON_WIDGET_ALLOWED_ATTRIBUTES = [
        'align'
    ];

    const RECORD_LIST_WIDGET_ALLOWED_ATTRIBUTES = [
        'subscribe',
        'is-recommendation',
        'infinite-scrolling',
        'infinite-debounce-delay',
        'infinite-scroll-margin'
    ];

    const RECORD_WIDGET_ALLOWED_ATTRIBUTES = [
        'is-recommendation'
    ];
}