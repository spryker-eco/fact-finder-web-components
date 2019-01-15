<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCheckoutTrackingBlock;

use ArrayObject;

interface FactFinderGetQuoteItemsInterface
{
    /**
     * Get quote items
     *
     * @return \ArrayObject
     */
    public function getQuoteItems(): ArrayObject;
}
