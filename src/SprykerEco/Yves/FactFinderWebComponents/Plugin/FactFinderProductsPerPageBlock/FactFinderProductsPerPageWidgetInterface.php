<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderProductsPerPageBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderProductsPerPageWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderProductsPerPageWidgetPlugin';

    /**
     * @param array $widgetLocalConfig
     */
    public function initialize(array $widgetLocalConfig = array()): void;
}
