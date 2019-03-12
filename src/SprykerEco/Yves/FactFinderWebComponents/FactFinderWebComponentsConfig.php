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
     * @return array
     */
    public function getCommunicationComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::COMMUNICATION_COMPONENT_CONFIG);
    }

    /**
     * @return array
     */
    public function getSearchBoxComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::SEARCH_BOX_COMPONENT_CONFIG);
    }

    /**
     * @return array
     */
    public function getBreadcrumbComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::BREADCRUMB_COMPONENT_CONFIG);
    }

    /**
     * @return array
     */
    public function getSearchButtonComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::SEARCH_BUTTON_COMPONENT_CONFIG);
    }

    /**
     * @return array
     */
    public function getRecordListComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::RECORD_LIST_COMPONENT_CONFIG);
    }

    /**
     * @return array
     */
    public function getCheckoutTrackingComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::CHECKOUT_TRACKING_CONFIG);
    }

    /**
     * @return array
     */
    public function getRecordComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::RECORD_COMPONENT_CONFIG);
    }

    /**
     * @return array
     */
    public function getSuggestComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::SUGGEST_CONFIG);
    }

    /**
     * @return array
     */
    public function getAsnGroupWidgetComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::ASN_GROUP_COMPONENT_CONFIG);
    }

    /**
     * @return array
     */
    public function getAsnGroupElementComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::ASN_GROUP_ELEMENT_CONFIG);
    }

    /**
     * @return array
     */
    public function getAsnRemoveAllFilterComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::ASN_REMOVE_ALL_FILTER_CONFIG);
    }

    /**
     * @return array
     */
    public function getAsnSliderComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::ASN_SLIDER_CONFIG);
    }

    /**
     * @return array
     */
    public function getPagingWidgetComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::PAGING_COMPONENT_CONFIG);
    }

    /**
     * @return array
     */
    public function getProductsPerPageWidgetComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::PRODUCTS_PER_PAGE_COMPONENT_CONFIG);
    }

    /**
     * @return array
     */
    public function getSortBoxWidgetComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::SORT_BOX_COMPONENT_CONFIG);
    }

    /**
     * @return array
     */
    public function getSimilarProductsComponentConfig(): array
    {
        return array_merge(
            $this->get(FactFinderWebComponentsConstants::SIMILAR_PRODUCT_ID_CONFIG),
            $this->get(FactFinderWebComponentsConstants::SIMILAR_PRODUCTS_COMPONENT_CONFIG)
        );
    }

    /**
     * @return array
     */
    public function getSimilarProductIdComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::SIMILAR_PRODUCT_ID_CONFIG);
    }

    /**
     * @return array
     */
    public function getRecommendationComponentConfig(): array
    {
        return array_merge(
            $this->get(FactFinderWebComponentsConstants::RECOMMENDATION_CONFIG),
            $this->get(FactFinderWebComponentsConstants::RECOMMENDATION_RECORD_ID_CONFIG)
        );
    }

    /**
     * @return array
     */
    public function getRecommendationRecordIdComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::RECOMMENDATION_RECORD_ID_CONFIG);
    }

    /**
     * @return array
     */
    public function getHeaderNavigationWidgetComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::HEADER_NAVIGATION_COMPONENT_CONFIG);
    }

    /**
     * @return array
     */
    public function getTagCloudWidgetComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::TAG_CLOUD_COMPONENT_CONFIG);
    }

    /**
     * @return array
     */
    public function getPushedProductsWidgetComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::PUSHED_PRODUCTS_COMPONENT_CONFIG);
    }

    /**
     * @return array
     */
    public function getCampaignWidgetComponentConfig(): array
    {
        return $this->get(FactFinderWebComponentsConstants::CAMPAIGN_COMPONENT_CONFIG);
    }
}
