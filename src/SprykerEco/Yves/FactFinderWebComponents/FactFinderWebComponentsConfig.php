<?php
namespace SprykerEco\Yves\FactFinderWebComponents;

use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConstants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class FactFinderWebComponentsConfig extends AbstractBundleConfig
{
    /**
     * Return communcation config
     *
     * @return array
     */
    public function getCommunicationConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::COMMUNICATION_WIDGET_CONFIG);
    }

    /**
     * Return search box config
     *
     * @return array
     */
    public function getSearchBoxConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::SEARCH_BOX_WIDGET_CONFIG);
    }

    /**
     * Return search button config
     *
     * @return array
     */
    public function getSearchButtonConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::SEARCH_BUTTON_WIDGET_CONFIG);
    }

    /**
     * Return record list config
     *
     * @return array
     */
    public function getRecordListConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::RECORD_LIST_WIDGET_CONFIG);
    }

    /**
     * Return record config
     *
     * @return array
     */
    public function getRecordConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::RECORD_WIDGET_CONFIG);
    }

    /**
     * Return ASN group widget config
     *
     * @return array
     */
    public function getAsnGroupWidgetConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::ASN_GROUP_WIDGET_CONFIG);
    }

    /**
     * Return ASN group element config
     *
     * @return array
     */
    public function getAsnGroupElementConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::ASN_GROUP_ELEMENT_CONFIG);
    }

    /**
     * Return ASN remove all filter config
     *
     * @return array
     */
    public function getAsnRemoveAllFilterConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::ASN_REMOVE_ALL_FILTER_CONFIG);
    }

    /**
     * Return ASN slider config
     *
     * @return array
     */
    public function getAsnSliderConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::ASN_SLIDER_CONFIG);
    }

    /**
     * Return ASN slider control config
     *
     * @return array
     */
    public function getAsnSliderControlConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::RECORD_WIDGET_CONFIG);
    }

    /**
     * Return record config
     *
     * @return array
     */
    public function getPagingWidgetConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::PAGING_WIDGET_CONFIG);
    }

    /**
     * Return products per page config
     *
     * @return array
     */
    public function getProductsPerPageWidgetConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::PRODUCTS_PER_PAGE_WIDGET_CONFIG);
    }

    /**
     * Return sort box config
     *
     * @return array
     */
    public function getSortBoxWidgetConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::SORT_BOX_WIDGET_CONFIG);
    }

    /**
     * Return similar products config
     *
     * @return array
     */
    public function getSimilarProductsConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::SIMILAR_PRODUCTS_WIDGET_CONFIG);
    }

    /**
     * Return similar product ID config
     *
     * @return array
     */
    public function getSimilarProductIdConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::SIMILAR_PRODUCT_ID_CONFIG);
    }

    /**
     * Return recommendation config
     *
     * @return array
     */
    public function getRecommendationConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::RECOMMENDATION_CONFIG);
    }

    /**
     * Return recommendation record ID config
     *
     * @return array
     */
    public function getRecommendationRecordIdConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::RECOMMENDATION_RECORD_ID_CONFIG);
    }
}