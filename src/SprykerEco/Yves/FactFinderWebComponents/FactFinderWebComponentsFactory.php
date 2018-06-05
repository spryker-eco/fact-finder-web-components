<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents;

use Spryker\Client\Quote\QuoteClientInterface;
use Spryker\Yves\Kernel\AbstractFactory;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCheckoutTrackingBlock\FactFinderGetQuoteItems;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCheckoutTrackingBlock\FactFinderGetQuoteItemsInterface;

class FactFinderWebComponentsFactory extends AbstractFactory
{
    /**
     * @return string[]
     */
    public function getFactFinderWidgetPlugins(): array
    {
        return $this->getProvidedDependency(FactFinderWebComponentsDependencyProvider::FACT_FINDER_WIDGETS);
    }

    /**
     * @return \Spryker\Client\Quote\QuoteClientInterface
     */
    public function getQuoteClient(): QuoteClientInterface
    {
        return $this->getProvidedDependency(FactFinderWebComponentsDependencyProvider::CLIENT_QUOTE);
    }

    /**
     * @return \SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCheckoutTrackingBlock\FactFinderGetQuoteItemsInterface
     */
    public function createQuoteItems(): FactFinderGetQuoteItemsInterface
    {
        return new FactFinderGetQuoteItems();
    }
}
