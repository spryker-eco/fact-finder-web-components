<?php
namespace SprykerEco\Shared\FactFinderWebComponents;

use Spryker\Shared\Kernel\AbstractBundleConfig;

class FactFinderWebComponentsConfig extends AbstractBundleConfig
{
    /**
     * Communication widget allowed attributes
     */
    const COMMUNICATION_WIDGET_ALLOWED_ATTRIBUTES = [
        'url',
        'version',
        'default-query',
        'channel',
        'search-immediate'
    ];

    /**
     * Search box widget allowed attributes
     */
    const SEARCH_BOX_WIDGET_ALLOWED_ATTRIBUTES = [
        'suggest-onfocus',
        'hidesuggest-onblur',
        'select-onclick',
        'use-suggest',
        'suggest-delay'
    ];

    /**
     * Searchbox button widget allowed attributes
     */
    const SEARCH_BOX_BUTTON_WIDGET_ALLOWED_ATTRIBUTES = [
        'align'
    ];

    /**
     * Record list widget allowed attributes
     */
    const RECORD_LIST_WIDGET_ALLOWED_ATTRIBUTES = [
        'subscribe',
        'is-recommendation',
        'infinite-scrolling',
        'infinite-debounce-delay',
        'infinite-scroll-margin'
    ];

    /**
     * Record widget allowed attributes
     */
    const RECORD_WIDGET_ALLOWED_ATTRIBUTES = [
        'is-recommendation'
    ];

    /**
     * ASN group widget allowed attributes
     */
    const ASN_GROUP_WIDGET_ALLOWED_ATTRIBUTES = [
        'opened',
        'collapsible',
        'for-group',
        'group',
        'filter-style',
        'lazy-load'
    ];

    /**
     * ASN group element allowed attributes
     */
    const ASN_GROUP_ELEMENT_ALLOWED_ATTRIBUTES = [
        'selected'
    ];

    /**
     * ASN remove all filter allowed attributes
     */
    const ASN_REMOVE_ALL_FILTER_ALLOWED_ATTRIBUTES = [
        'show-always',
        'remove-params'
    ];

    /**
     * ASN slider allowed attributes
     */
    const ASN_SLIDER_ALLOWED_ATTRIBUTES = [
        'step-size',
        'selected-min-value',
        'selected-max-value',
        'submit-on-release',
        'absolute-min-value',
        'absolute-max-value'
    ];

    /**
     * ASN slider control allowed attributes
     */
    const ASN_SLIDER_CONTROL_ALLOWED_ATTRIBUTES = [
        'submit-on-input'
    ];
}