<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinder\Plugin\FactFinderSearchboxBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CatalogPage\Dependency\Plugin\FactFinderSearchboxWidget\FactFinderSearchboxWidgetInterface;

class FactFinderSearchboxBlockWidgetPlugin extends AbstractWidgetPlugin implements FactFinderSearchboxWidgetInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductViewTransfer $productViewTransfer
     *
     * @return void
     */
    public function initialize(array $product): void
    {
        $this->addParameter('suggestOnfocus', $this->getConfig()->getSuggestOnfocus());
        $this->addParameter('hideSuggestOnblur', $this->getConfig()->getHideSuggestOnblur());
        $this->addParameter('selectOnclick', $this->getConfig()->getSelectOnclick());
        $this->addParameter('useSuggest', $this->getConfig()->getUseSuggest());
        $this->addParameter('suggestDelay', $this->getConfig()->getSearchImmediate());
        $this->addParameter('searchbutton', $this->getConfig()->getSearchbutton());
        $this->addParameter('searchbuttonAlign', $this->getConfig()->getSearchbuttonAlign());
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
        return '@FactFinder/views/searchbox-block/searchbox-block.twig';
    }
}
