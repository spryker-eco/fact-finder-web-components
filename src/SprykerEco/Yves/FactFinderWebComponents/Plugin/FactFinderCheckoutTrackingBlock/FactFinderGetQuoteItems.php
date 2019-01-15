<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
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
