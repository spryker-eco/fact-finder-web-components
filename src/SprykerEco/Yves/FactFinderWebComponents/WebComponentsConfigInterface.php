<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents;

interface WebComponentsConfigInterface
{
    /**
     * Return communcation config.
     *
     * @return array
     */
    public function getCommunicationConfig(): array;

    /**
     * Return search box config.
     *
     * @return array
     */
    public function getSearchBoxConfig(): array;

    /**
     * Return search box config.
     *
     * @return array
     */
    public function getBreadcrumbConfig(): array;

    /**
     * Return search button config.
     *
     * @return array
     */
    public function getSearchButtonConfig(): array;

    /**
     * Return record list config.
     *
     * @return array
     */
    public function getRecordListConfig(): array;

    /**
     * Return record list config.
     *
     * @return array
     */
    public function getCheckoutTrackingConfig(): array;

    /**
     * Return record config.
     *
     * @return array
     */
    public function getRecordConfig(): array;

    /**
     * Return record config.
     *
     * @return array
     */
    public function getSuggestConfig(): array;

    /**
     * Return ASN group widget config.
     *
     * @return array
     */
    public function getAsnGroupWidgetConfig(): array;

    /**
     * Return ASN group element config.
     *
     * @return array
     */
    public function getAsnGroupElementConfig(): array;

    /**
     * Return ASN remove all filter config.
     *
     * @return array
     */
    public function getAsnRemoveAllFilterConfig(): array;

    /**
     * Return ASN slider config.
     *
     * @return array
     */
    public function getAsnSliderConfig(): array;

    /**
     * Return ASN slider control config.
     *
     * @return array
     */
    public function getAsnSliderControlConfig(): array;

    /**
     * Return record config.
     *
     * @return array
     */
    public function getPagingWidgetConfig(): array;

    /**
     * Return products per page config.
     *
     * @return array
     */
    public function getProductsPerPageWidgetConfig(): array;

    /**
     * Return sort box config.
     *
     * @return array
     */
    public function getSortBoxWidgetConfig(): array;

    /**
     * Return similar products config.
     *
     * @return array
     */
    public function getSimilarProductsConfig(): array;

    /**
     * Return similar product ID config.
     *
     * @return array
     */
    public function getSimilarProductIdConfig(): array;

    /**
     * Return recommendation config.
     *
     * @return array
     */
    public function getRecommendationConfig(): array;

    /**
     * Return recommendation record ID config.
     *
     * @return array
     */
    public function getRecommendationRecordIdConfig(): array;

    /**
     * Return recommendation record ID config.
     *
     * @return array
     */
    public function getHeaderNavigationWidgetConfig(): array;

    /**
     * Return tag cloud config.
     *
     * @return array
     */
    public function getTagCloudWidgetConfig(): array;

    /**
     * Return pushed products config.
     *
     * @return array
     */
    public function getPushedProductsWidgetConfig(): array;

    /**
     * Return campaign config.
     *
     * @return array
     */
    public function getCampaignWidgetConfig(): array;
}
