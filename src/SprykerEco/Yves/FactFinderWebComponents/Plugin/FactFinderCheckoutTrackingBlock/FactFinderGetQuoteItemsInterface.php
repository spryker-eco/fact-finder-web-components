<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCheckoutTrackingBlock;

use ArrayObject;
use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderGetQuoteItemsInterface
{
    /**
     * Get quote items
     *
     * @return ArrayObject
     */
    public function getQuoteItems(): ArrayObject;
}
