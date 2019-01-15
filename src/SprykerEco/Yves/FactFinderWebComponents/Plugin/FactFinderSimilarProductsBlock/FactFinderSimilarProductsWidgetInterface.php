<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSimilarProductsBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderSimilarProductsWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderSimilarProductsWidgetPlugin';

    /**
     * @param array $similarProductsConfig
     * @param string $similarProductId
     */
    public function initialize(array $similarProductsConfig = [], string $similarProductId = ''): void;
}
