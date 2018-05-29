<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderProductsPerPageBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CatalogPage\Dependency\Plugin\FactFinderProductsPerPageWidget\FactFinderProductsPerPageWidgetInterface;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderProductsPerPageBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderProductsPerPageWidgetInterface
{
    /**
     * @param array $config
     */
    public function initialize(array $config = array()): void
    {
        $this->addParameter('config', $this->_getOptions(
            FactFinderWebComponentsConfig::PRODUCTS_PER_PAGE_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getProductsPerPageWidgetConfig(),
            $config
        ));
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/products-per-page-block/products-per-page-block.twig';
    }
}
