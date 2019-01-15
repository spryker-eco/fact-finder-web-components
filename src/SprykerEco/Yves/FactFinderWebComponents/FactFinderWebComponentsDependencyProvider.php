<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents;

use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;
use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderAsnBlock\FactFinderAsnBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderBreadcrumbBlock\FactFinderBreadcrumbBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCampaignBlock\FactFinderCampaignBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCheckoutTrackingBlock\FactFinderCheckoutTrackingBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCommunicationBlock\FactFinderCommunicationBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderHeaderNavigationBlock\FactFinderHeaderNavigationBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderPagingBlock\FactFinderPagingBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderProductsPerPageBlock\FactFinderProductsPerPageBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderPushedProductsBlock\FactFinderPushedProductsBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderRecommendationBlock\FactFinderRecommendationBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderRecordListBlock\FactFinderRecordListBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSearchboxBlock\FactFinderSearchboxBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSimilarProductsBlock\FactFinderSimilarProductsBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSortBoxBlock\FactFinderSortBoxBlockWidgetPlugin;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderTagCloudBlock\FactFinderTagCloudBlockWidgetPlugin;

class FactFinderWebComponentsDependencyProvider extends AbstractBundleDependencyProvider
{
    public const FACT_FINDER_WIDGETS = 'FACT_FINDER_WIDGETS';

    public const CLIENT_QUOTE = 'CLIENT_QUOTE';

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    public function provideDependencies(Container $container)
    {
        $container = $this->addPageWidgetPlugins($container);
        $container = $this->addQuoteClient($container);

        return $container;
    }

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    protected function addQuoteClient(Container $container)
    {
        $container[static::CLIENT_QUOTE] = function (Container $container) {
            return $container->getLocator()->quote()->client();
        };

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
     * @return \Spryker\Yves\Kernel\Dependency\Widget\WidgetInterface[]
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
            FactFinderCheckoutTrackingBlockWidgetPlugin::class,
        ];
    }
}
