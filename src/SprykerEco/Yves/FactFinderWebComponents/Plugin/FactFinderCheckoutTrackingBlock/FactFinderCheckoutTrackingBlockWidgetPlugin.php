<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCheckoutTrackingBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderCheckoutTrackingBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderCheckoutTrackingWidgetInterface
{
    /**
     * @param array $config
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
