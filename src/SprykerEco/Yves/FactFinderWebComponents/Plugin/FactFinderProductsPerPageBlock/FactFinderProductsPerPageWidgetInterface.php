<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderProductsPerPageBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderProductsPerPageWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderProductsPerPageWidgetPlugin';

    /**
     * @param array $widgetLocalConfig
     */
    public function initialize(array $widgetLocalConfig = []): void;
}
