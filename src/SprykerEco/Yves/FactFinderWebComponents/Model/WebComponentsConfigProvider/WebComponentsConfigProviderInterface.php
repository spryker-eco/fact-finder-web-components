<?php

namespace SprykerEco\Yves\FactFinderWebComponents\Model\WebComponentsConfigProvider;

interface WebComponentsConfigProviderInterface
{
    /**
     * @return array
     */
    public function getAsnWidgetConfig(): array;

    /**
     * @return array
     */
    public function getBreadcrumbConfig(): array;

    /**
     * @return array
     */
    public function getCampaignWidgetConfig(): array;

    /**
     * @return array
     */
    public function getQuoteItems(): array;

    /**
     * @return array
     */
    public function getCommunicationConfig(): array;

    /**
     * @return array
     */
    public function getHeaderNavigationWidgetConfig(): array;

    /**
     * @return array
     */
    public function getPagingWidgetConfig(): array;

    /**
     * @return array
     */
    public function getProductsPerPageWidgetConfig(): array;

    /**
     * @return array
     */
    public function getPushedProductsWidgetConfig(): array;

    /**
     * @return array
     */
    public function getRecommendationConfig(): array;

    /**
     * @return array
     */
    public function getRecordListConfig(): array;

    /**
     * @return array
     */
    public function getSuggestConfig(): array;

    /**
     * @return array
     */
    public function getCheckoutTrackingConfig(): array;

    /**
     * @return array
     */
    public function getSearchBoxConfig(): array;

    /**
     * @return array
     */
    public function getSimilarProductsConfig(): array;

    /**
     * @return array
     */
    public function getSortBoxWidgetConfig(): array;

    /**
     * @return array
     */
    public function getTagCloudWidgetConfig(): array;
}
