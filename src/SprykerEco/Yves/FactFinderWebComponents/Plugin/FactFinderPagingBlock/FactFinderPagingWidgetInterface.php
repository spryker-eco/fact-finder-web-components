<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderPagingBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderPagingWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderPagingWidgetPlugin';

    /**
     * @param array $config
     */
    public function initialize(array $config = []): void;
}
