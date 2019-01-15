<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Model\WebComponentsConfigProvider;

use SprykerEco\Yves\FactFinderWebComponents\FactFinderWebComponentsConfig;

class WebComponentsConfigProvider implements WebComponentsConfigProviderInterface
{
    /**
     * @var \SprykerEco\Yves\FactFinderWebComponents\FactFinderWebComponentsConfig
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
        return $this->config->getAsnSliderConfig();
    }

    /**
     * @return array
     */
    public function getBreadcrumbConfig(): array
    {
        return $this->config->getBreadcrumbConfig();
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
        return array_merge(
            $this->config->getRecommendationConfig(),
            $this->config->getRecommendationRecordIdConfig()
        );
    }

    /**
     * @return array
     */
    public function getRecordListConfig(): array
    {
        return $this->config->getRecordListConfig();
    }

    /**
     * @return array
     */
    public function getSuggestConfig(): array
    {
        return $this->config->getSuggestConfig();
    }

    /**
     * @return array
     */
    public function getCheckoutTrackingConfig(): array
    {
        return $this->config->getCheckoutTrackingConfig();
    }

    /**
     * @return array
     */
    public function getSearchBoxConfig(): array
    {
        return $this->config->getSearchBoxConfig();
    }

    /**
     * @return array
     */
    public function getSimilarProductsConfig(): array
    {
        return array_merge(
            $this->config->getSimilarProductIdConfig(),
            $this->config->getSimilarProductsConfig()
        );
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
