<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCheckoutTrackingBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderCheckoutTrackingWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderCheckoutTrackingWidgetPlugin';

    /**
     * @param array $config
     */
    public function initialize(array $config = array()): void;
}