<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderPushedProductsBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderPushedProductsWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderPushedProductsWidgetPlugin';

    /**
     * @return void
     */
    public function initialize(): void;
}
