<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSimilarProductsBlock;

use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderSimilarProductsBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderSimilarProductsWidgetInterface
{
    /**
     * @param array $similarProductsConfig
     * @param string $similarProductId
     *
     * @return void
     */
    public function initialize(array $similarProductsConfig = [], string $similarProductId = ''): void
    {
        $this->addParameter('similarProductsConfig', $this->getOptions(
            FactFinderWebComponentsConfig::SIMILAR_PRODUCTS_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getSimilarProductsConfig(),
            $similarProductsConfig
        ));

        $similarProductId = ($similarProductId) ? $similarProductId : $this->getConfig()->getSimilarProductIdConfig();
        $this->addParameter('similarProductId', $similarProductId);
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/similar-products-block/similar-products-block.twig';
    }
}
