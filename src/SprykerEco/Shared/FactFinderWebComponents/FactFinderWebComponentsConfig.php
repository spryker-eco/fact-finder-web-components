<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Shared\FactFinderWebComponents;

use Spryker\Shared\Kernel\AbstractBundleConfig;

class FactFinderWebComponentsConfig extends AbstractBundleConfig
{
    /**
     * Communication widget allowed attributes
     */
    public const COMMUNICATION_WIDGET_ALLOWED_ATTRIBUTES = [
        'url',
        'version',
        'default-query',
        'channel',
        'search-immediate',
    ];

    /**
     * Search box widget allowed attributes
     */
    public const SEARCH_BOX_WIDGET_ALLOWED_ATTRIBUTES = [
        'suggest-onfocus',
        'hidesuggest-onblur',
        'select-onclick',
        'use-suggest',
        'suggest-delay',
    ];

    /**
     * Searchbox button widget allowed attributes
     */
    public const SEARCH_BOX_BUTTON_WIDGET_ALLOWED_ATTRIBUTES = [
        'align',
    ];

    /**
     * Record list widget allowed attributes
     */
    public const RECORD_LIST_WIDGET_ALLOWED_ATTRIBUTES = [
        'subscribe',
        'is-recommendation',
        'infinite-scrolling',
        'infinite-debounce-delay',
        'infinite-scroll-margin',
    ];

    /**
     * Record widget allowed attributes
     */
    public const RECORD_WIDGET_ALLOWED_ATTRIBUTES = [
        'is-recommendation',
    ];

    /**
     * ASN group widget allowed attributes
     */
    public const ASN_GROUP_WIDGET_ALLOWED_ATTRIBUTES = [
        'opened',
        'collapsible',
        'for-group',
        'group',
        'filter-style',
        'lazy-load',
    ];

    /**
     * ASN group element allowed attributes
     */
    public const ASN_GROUP_ELEMENT_ALLOWED_ATTRIBUTES = [
        'selected',
    ];

    /**
     * ASN remove all filter allowed attributes
     */
    public const ASN_REMOVE_ALL_FILTER_ALLOWED_ATTRIBUTES = [
        'show-always',
        'remove-params',
    ];

    /**
     * ASN slider allowed attributes
     */
    public const ASN_SLIDER_ALLOWED_ATTRIBUTES = [
        'step-size',
        'selected-min-value',
        'selected-max-value',
        'submit-on-release',
        'absolute-min-value',
        'absolute-max-value',
    ];

    /**
     * ASN slider control allowed attributes
     */
    public const ASN_SLIDER_CONTROL_ALLOWED_ATTRIBUTES = [
        'submit-on-input',
    ];

    /**
     * paging allowed attributes
     */
    public const PAGING_WIDGET_ALLOWED_ATTRIBUTES = [
        'show-only',
    ];

    /**
     * Products per page widget allowed attributes
     */
    public const PRODUCTS_PER_PAGE_WIDGET_ALLOWED_ATTRIBUTES = [
        'show-only',
    ];

    /**
     * Sort box widget allowed attributes
     */
    public const SORT_BOX_WIDGET_ALLOWED_ATTRIBUTES = [
        'opened',
        'selected',
        'show-selected',
        'show-selected-first',
        'collapse-onblur',
    ];

    /**
     * Similar products widget allowed attributes
     */
    public const SIMILAR_PRODUCTS_WIDGET_ALLOWED_ATTRIBUTES = [
        'max-results',
    ];

    /**
     * Similar product config allowed attributes
     */
    public const SIMILAR_PRODUCT_CONFIG_ALLOWED_ATTRIBUTES = [
        'record-id',
    ];

    /**
     * Recommendation widget allowed attributes
     */
    public const RECOMMENDATION_WIDGET_ALLOWED_ATTRIBUTES = [
        'max-results',
        'use-perso',
        'subscribe',
    ];

    /**
     * Recommendation record ID config allowed attributes
     */
    public const RECOMMENDATION_RECORD_ID_ALLOWED_ATTRIBUTES = [
        'record-id',
    ];

    /**
     * Header navigation record ID config allowed attributes
     */
    public const HEADER_NAVIGATION_WIDGET_ALLOWED_ATTRIBUTES = [
        'group-count',
        'group-size',
        'hide-empty-groups',
        'fetch-initial',
    ];

    /**
     * Tag cloud config allowed attributes
     */
    public const TAG_CLOUD_WIDGET_ALLOWED_ATTRIBUTES = [
        'min-font-size',
        'max-font-size',
        'unit',
        'gradient-color-start',
        'gradient-color-end',
        'word-count',
        'disable-auto',
    ];

    /**
     * Pushed products config allowed attributes
     */
    public const PUSHED_PRODUCTS_WIDGET_ALLOWED_ATTRIBUTES = [
        'name',
        'is-product-campaign',
        'is-shopping-cart-campaign',
    ];

    /**
     * Campaign config allowed attributes
     */
    public const CAMPAIGN_WIDGET_ALLOWED_ATTRIBUTES = [
        'label',
        'is-product-campaign',
        'is-shopping-cart-campaign',
    ];
}
