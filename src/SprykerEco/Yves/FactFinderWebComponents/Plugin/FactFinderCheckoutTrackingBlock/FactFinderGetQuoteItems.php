<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCheckoutTrackingBlock;

use Spryker\Yves\Kernel\AbstractPlugin;
use ArrayObject;
use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

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
