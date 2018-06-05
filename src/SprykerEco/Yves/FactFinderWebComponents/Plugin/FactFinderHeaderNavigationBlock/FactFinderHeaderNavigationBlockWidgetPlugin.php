<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderHeaderNavigationBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CatalogPage\Dependency\Plugin\FactFinderPagingWidget\FactFinderPagingWidgetInterface;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderHeaderNavigationBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderHeaderNavigationWidgetInterface
{
    /**
     * @param array $config
     */
    public function initialize(array $config = array()): void
    {
        $this->addParameter('config', $this->_getOptions(
            FactFinderWebComponentsConfig::HEADER_NAVIGATION_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getHeaderNavigationWidgetConfig(),
            $config
        ));
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/header-navigation-block/header-navigation-block.twig';
    }
}
