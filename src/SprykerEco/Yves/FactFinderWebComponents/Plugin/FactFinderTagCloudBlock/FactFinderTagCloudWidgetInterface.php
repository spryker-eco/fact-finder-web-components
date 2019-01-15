<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderTagCloudBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderTagCloudWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderTagCloudWidgetPlugin';

    /**
     * @return void
     */
    public function initialize(): void;
}
