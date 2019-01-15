<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderPushedProductsBlock;

use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

/**
 * @method \SprykerEco\Yves\FactFinderWebComponents\FactFinderWebComponentsConfig getConfig()
 */
class FactFinderPushedProductsBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderPushedProductsWidgetInterface
{
    /**
     * @param array $config
     *
     * @return void
     */
    public function initialize(array $config = []): void
    {
        $this->addParameter('config', $this->getOptions(
            FactFinderWebComponentsConfig::PUSHED_PRODUCTS_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getPushedProductsWidgetConfig(),
            $config
        ));
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/pushed-products-block/pushed-products-block.twig';
    }
}
