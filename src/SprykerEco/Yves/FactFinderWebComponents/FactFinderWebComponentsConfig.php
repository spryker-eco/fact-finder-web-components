<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents;

use Spryker\Yves\Kernel\AbstractBundleConfig;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConstants;

class FactFinderWebComponentsConfig extends AbstractBundleConfig
{
    /**
     * Return communcation config.
     *
     * @return array
     */
    public function getCommunicationConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::COMMUNICATION_WIDGET_CONFIG);
    }

    /**
     * Return search box config.
     *
     * @return array
     */
    public function getSearchBoxConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::SEARCH_BOX_WIDGET_CONFIG);
    }

    /**
     * Return search box config.
     *
     * @return array
     */
    public function getBreadcrumbConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::BREADCRUMB_WIDGET_CONFIG);
    }

    /**
     * Return search button config.
     *
     * @return array
     */
    public function getSearchButtonConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::SEARCH_BUTTON_WIDGET_CONFIG);
    }

    /**
     * Return record list config.
     *
     * @return array
     */
    public function getRecordListConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::RECORD_LIST_WIDGET_CONFIG);
    }

    /**
     * Return record list config.
     *
     * @return array
     */
    public function getCheckoutTrackingConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::CHECKOUT_TRACKING_CONFIG);
    }

    /**
     * Return record config.
     *
     * @return array
     */
    public function getRecordConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::RECORD_WIDGET_CONFIG);
    }

    /**
     * Return record config.
     *
     * @return array
     */
    public function getSuggestConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::SUGGEST_CONFIG);
    }

    /**
     * Return ASN group widget config.
     *
     * @return array
     */
    public function getAsnGroupWidgetConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::ASN_GROUP_WIDGET_CONFIG);
    }

    /**
     * Return ASN group element config.
     *
     * @return array
     */
    public function getAsnGroupElementConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::ASN_GROUP_ELEMENT_CONFIG);
    }

    /**
     * Return ASN remove all filter config.
     *
     * @return array
     */
    public function getAsnRemoveAllFilterConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::ASN_REMOVE_ALL_FILTER_CONFIG);
    }

    /**
     * Return ASN slider config.
     *
     * @return array
     */
    public function getAsnSliderConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::ASN_SLIDER_CONFIG);
    }

    /**
     * Return ASN slider control config.
     *
     * @return array
     */
    public function getAsnSliderControlConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::RECORD_WIDGET_CONFIG);
    }

    /**
     * Return record config.
     *
     * @return array
     */
    public function getPagingWidgetConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::PAGING_WIDGET_CONFIG);
    }

    /**
     * Return products per page config.
     *
     * @return array
     */
    public function getProductsPerPageWidgetConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::PRODUCTS_PER_PAGE_WIDGET_CONFIG);
    }

    /**
     * Return sort box config.
     *
     * @return array
     */
    public function getSortBoxWidgetConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::SORT_BOX_WIDGET_CONFIG);
    }

    /**
     * Return similar products config.
     *
     * @return array
     */
    public function getSimilarProductsConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::SIMILAR_PRODUCTS_WIDGET_CONFIG);
    }

    /**
     * Return similar product ID config.
     *
     * @return array
     */
    public function getSimilarProductIdConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::SIMILAR_PRODUCT_ID_CONFIG);
    }

    /**
     * Return recommendation config.
     *
     * @return array
     */
    public function getRecommendationConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::RECOMMENDATION_CONFIG);
    }

    /**
     * Return recommendation record ID config.
     *
     * @return array
     */
    public function getRecommendationRecordIdConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::RECOMMENDATION_RECORD_ID_CONFIG);
    }

    /**
     * Return recommendation record ID config.
     *
     * @return array
     */
    public function getHeaderNavigationWidgetConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::HEADER_NAVIGATION_WIDGET_CONFIG);
    }

    /**
     * Return tag cloud config.
     *
     * @return array
     */
    public function getTagCloudWidgetConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::TAG_CLOUD_WIDGET_CONFIG);
    }

    /**
     * Return pushed products config.
     *
     * @return array
     */
    public function getPushedProductsWidgetConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::PUSHED_PRODUCTS_WIDGET_CONFIG);
    }

    /**
     * Return campaign config.
     *
     * @return array
     */
    public function getCampaignWidgetConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::CAMPAIGN_WIDGET_CONFIG);
    }
}
