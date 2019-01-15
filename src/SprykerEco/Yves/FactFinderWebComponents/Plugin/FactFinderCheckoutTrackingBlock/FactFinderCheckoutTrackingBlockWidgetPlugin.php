<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCheckoutTrackingBlock;

use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderCheckoutTrackingBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderCheckoutTrackingWidgetInterface
{
    /**
     * @param array $config
     *
     * @return void
     */
    public function initialize(array $config = []): void
    {
        $this->addParameter('items', $this->getQuoteItems());
    }

    /**
     * Return quote items
     */
    public function getQuoteItems()
    {
        return $this->getFactory()->createQuoteItems()->getQuoteItems();
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/checkout-tracking-block/checkout-tracking-block.twig';
    }
}
