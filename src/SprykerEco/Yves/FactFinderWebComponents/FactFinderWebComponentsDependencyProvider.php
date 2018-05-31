<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents;

use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;
use Spryker\Yves\Kernel\Plugin\Pimple;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderAsnBlock\FactFinderAsnBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderHeaderNavigationBlock\FactFinderHeaderNavigationBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderPagingBlock\FactFinderPagingBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCommunicationBlock\FactFinderCommunicationBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderBreadcrumbBlock\FactFinderBreadcrumbBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderRecordListBlock\FactFinderRecordListBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSearchboxBlock\FactFinderSearchboxBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderProductsPerPageBlock\FactFinderProductsPerPageBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSortBoxBlock\FactFinderSortBoxBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSimilarProductsBlock\FactFinderSimilarProductsBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderRecommendationBlock\FactFinderRecommendationBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderTagCloudBlock\FactFinderTagCloudBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderPushedProductsBlock\FactFinderPushedProductsBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCampaignBlock\FactFinderCampaignBlockWidgetPlugin;

class FactFinderWebComponentsDependencyProvider extends AbstractBundleDependencyProvider
{
    const FACT_FINDER_WIDGETS = 'FACT_FINDER_WIDGETS';

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    public function provideDependencies(Container $container)
    {
        $container = $this->addPageWidgetPlugins($container);

        return $container;
    }

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    protected function addPageWidgetPlugins(Container $container)
    {
        $container[static::FACT_FINDER_WIDGETS] = function () {
            return $this->getFactFinderWidgetsPlugins();
        };

        return $container;
    }

    /**
     * @return string[]
     */
    protected function getFactFinderWidgetsPlugins(): array
    {
        return [
            FactFinderBreadcrumbBlockWidgetPlugin::class,
            FactFinderCommunicationBlockWidgetPlugin::class,
            FactFinderSearchboxBlockWidgetPlugin::class,
            FactFinderRecordListBlockWidgetPlugin::class,
            FactFinderAsnBlockWidgetPlugin::class,
            FactFinderPagingBlockWidgetPlugin::class,
            FactFinderProductsPerPageBlockWidgetPlugin::class,
            FactFinderSortBoxBlockWidgetPlugin::class,
            FactFinderSimilarProductsBlockWidgetPlugin::class,
            FactFinderRecommendationBlockWidgetPlugin::class,
            FactFinderHeaderNavigationBlockWidgetPlugin::class,
            FactFinderTagCloudBlockWidgetPlugin::class,
            FactFinderPushedProductsBlockWidgetPlugin::class,
            FactFinderCampaignBlockWidgetPlugin::class,
        ];
    }
}
