<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents;

use Spryker\Client\Quote\QuoteClientInterface;
use Spryker\Yves\Kernel\AbstractFactory;
use SprykerEco\Yves\FactFinderWebComponents\Form\WebComponentConfigToTwigConfigTransformer;
use SprykerEco\Yves\FactFinderWebComponents\Model\WebComponentsConfigProvider\WebComponentsConfigProvider;
use SprykerEco\Yves\FactFinderWebComponents\Model\WebComponentsConfigProvider\WebComponentsConfigProviderInterface;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCheckoutTrackingBlock\FactFinderGetQuoteItems;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCheckoutTrackingBlock\FactFinderGetQuoteItemsInterface;
use Symfony\Component\Form\DataTransformerInterface;

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

    /**
     * @return \SprykerEco\Yves\FactFinderWebComponents\Model\WebComponentsConfigProvider\WebComponentsConfigProviderInterface
     */
    public function createFactFinderWebComponentsConfigProvider(): WebComponentsConfigProviderInterface
    {
        return new WebComponentsConfigProvider($this->getConfig());
    }

    /**
     * @return \Symfony\Component\Form\DataTransformerInterface
     */
    public function createWebComponentConfigToTwigConfigTransformer(): DataTransformerInterface
    {
        return new WebComponentConfigToTwigConfigTransformer();
    }
}
