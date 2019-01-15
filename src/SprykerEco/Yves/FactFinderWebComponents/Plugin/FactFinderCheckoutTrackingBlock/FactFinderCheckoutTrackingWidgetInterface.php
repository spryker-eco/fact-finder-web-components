<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCheckoutTrackingBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderCheckoutTrackingWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderCheckoutTrackingWidgetPlugin';

    /**
     * @param array $config
     *
     * @return void
     */
    public function initialize(array $config = []): void;
}
