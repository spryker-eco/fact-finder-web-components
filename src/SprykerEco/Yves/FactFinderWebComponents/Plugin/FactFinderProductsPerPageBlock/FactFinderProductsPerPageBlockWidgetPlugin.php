<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderProductsPerPageBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CatalogPage\Dependency\Plugin\FactFinderProductsPerPageWidget\FactFinderProductsPerPageWidgetInterface;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;

class FactFinderProductsPerPageBlockWidgetPlugin extends AbstractWidgetPlugin implements FactFinderProductsPerPageWidgetInterface
{
    /**
     * @return void
     */
    public function initialize(): void
    {
        $this->addParameter('productsPerPageWidgetConfig', $this->_getOptions(
            FactFinderWebComponentsConfig::PRODUCTS_PER_PAGE_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getProductsPerPageWidgetConfig()
        ));
    }

    /**
     * Get widget options
     *
     * @param array $allowedAttributes
     * @param array $widgetConfig
     *
     * @return string
     */
    protected function _getOptions($allowedAttributes, $widgetConfig): string
    {
        $options = '';
        foreach ($widgetConfig as $key => $value) {
            if (in_array($key, $allowedAttributes) && $value) {
                $options .= sprintf(' %s="%s"', $key, $value);
            }
        }

        return $options;
    }

    /**
     * @return string
     */
    public static function getName(): string
    {
        return static::NAME;
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/products-per-page-block/products-per-page-block.twig';
    }
}
