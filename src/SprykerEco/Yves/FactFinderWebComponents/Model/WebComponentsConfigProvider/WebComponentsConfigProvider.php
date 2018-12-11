<?php

namespace SprykerEco\Yves\FactFinderWebComponents\Model\WebComponentsConfigProvider;

use SprykerEco\Yves\FactFinderWebComponents\FactFinderWebComponentsConfig;

class WebComponentsConfigProvider implements WebComponentsConfigProviderInterface
{
    /**
     * @var FactFinderWebComponentsConfig
     */
    protected $config;

    public function __construct(FactFinderWebComponentsConfig $config)
    {
        $this->config = $config;
    }

    /**
     * @return array
     */
    public function getAsnWidgetConfig(): array
    {
        return array_merge(
            $this->config->getAsnGroupWidgetConfig(),
            $this->config->getAsnGroupElementConfig(),
            $this->config->getAsnRemoveAllFilterConfig(),
            $this->config->getAsnSliderConfig(),
            $this->config->getAsnSliderControlConfig()
        );
    }

    /**
     * @return array
     */
    public function getCampaignWidgetConfig(): array
    {
        return $this->config->getCampaignWidgetConfig();
    }

    /**
     * @return array
     */
    public function getCommunicationConfig(): array
    {
        return $this->config->getCommunicationConfig();
    }

    /**
     * @return array
     */
    public function getQuoteItems(): array
    {
        return $this->config->getQuoteItems();
    }

    /**
     * @return array
     */
    public function getHeaderNavigationWidgetConfig(): array
    {
        return $this->config->getHeaderNavigationWidgetConfig();
    }

    /**
     * @return array
     */
    public function getPagingWidgetConfig(): array
    {
        return $this->config->getPagingWidgetConfig();
    }

    /**
     * @return array
     */
    public function getProductsPerPageWidgetConfig(): array
    {
        return $this->config->getProductsPerPageWidgetConfig();
    }

    /**
     * @return array
     */
    public function getPushedProductsWidgetConfig(): array
    {
        return $this->config->getPushedProductsWidgetConfig();
    }

    /**
     * @return array
     */
    public function getRecommendationConfig(): array
    {
        return $this->config->getRecommendationConfig();
    }

    /**
     * @return array
     */
    public function getRecordListConfig(): array
    {
        return array_merge(
            $this->config->getRecordListConfig(),
            $this->config->getRecordConfig()
        );
    }

    /**
     * @return array
     */
    public function getSearchBoxConfig(): array
    {
        return array_merge(
            $this->config->getSearchBoxConfig(),
            $this->config->getSearchButtonConfig()
        );
    }

    /**
     * @return array
     */
    public function getSimilarProductsConfig(): array
    {
        return $this->config->getSimilarProductsConfig();
    }

    /**
     * @return array
     */
    public function getSortBoxWidgetConfig(): array
    {
        return $this->config->getSortBoxWidgetConfig();
    }

    /**
     * @return array
     */
    public function getTagCloudWidgetConfig(): array
    {
        return $this->config->getTagCloudWidgetConfig();
    }

}
