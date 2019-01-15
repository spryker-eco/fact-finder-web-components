<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCheckoutTrackingBlock;

use ArrayObject;
use Spryker\Yves\Kernel\AbstractPlugin;

/**
 * Class FactFinderGetQuoteItems
 *
 * @package SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCheckoutTrackingBlock
 * @method \SprykerEco\Yves\FactFinderWebComponents\FactFinderWebComponentsFactory getFactory()
 */
class FactFinderGetQuoteItems extends AbstractPlugin implements FactFinderGetQuoteItemsInterface
{
    /**
     * Get quote items
     */
    public function getQuoteItems(): ArrayObject
    {
        return $this->getFactory()->getQuoteClient()->getQuote()->getItems();
    }
}
