<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderHeaderNavigationBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderHeaderNavigationWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderHeaderNavigationWidgetPlugin';

    /**
     * @param array $config
     */
    public function initialize(array $config): void;
}
