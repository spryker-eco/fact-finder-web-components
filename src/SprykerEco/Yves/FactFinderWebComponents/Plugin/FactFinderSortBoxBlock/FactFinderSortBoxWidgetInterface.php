<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSortBoxBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderSortBoxWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderSortBoxWidgetPlugin';

    /**
     * @param array $config
     */
    public function initialize(array $config = []): void;
}
