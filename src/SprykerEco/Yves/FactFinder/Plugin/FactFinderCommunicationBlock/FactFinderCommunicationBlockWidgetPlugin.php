<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinder\Plugin\FactFinderCommunicationBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CatalogPage\Dependency\Plugin\FactFinderCommunicationWidget\FactFinderCommunicationWidgetInterface;

class FactFinderCommunicationBlockWidgetPlugin extends AbstractWidgetPlugin implements FactFinderCommunicationWidgetInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductViewTransfer $productViewTransfer
     *
     * @return void
     */
    public function initialize(array $product): void
    {
        $this->addParameter('url', $this->getConfig()->getUrl());
        $this->addParameter('version', $this->getConfig()->getVersion());
        $this->addParameter('query', $this->getConfig()->getDefaultQuery());
        $this->addParameter('channel', $this->getConfig()->getChannel());
        $this->addParameter('searchImmediate', $this->getConfig()->getSearchImmediate());
    }

    /**
     * @return string
     */
    public static function getName(): string
    {
        return static::NAME;
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinder/views/communication-block/communication-block.twig';
    }
}
