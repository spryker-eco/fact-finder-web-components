<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSearchboxBlock;

use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderSearchboxBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderSearchboxWidgetInterface
{
    /**
     * @param array $searchBoxConfig
     * @param array $searchButtonConfig
     *
     * @return void
     */
    public function initialize(array $searchBoxConfig = [], array $searchButtonConfig = []): void
    {
        $this->addParameter('searchBoxConfig', $this->getOptions(
            FactFinderWebComponentsConfig::SEARCH_BOX_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getSearchBoxConfig(),
            $searchBoxConfig
        ));
        $this->addParameter('searchButtonConfig', $this->getOptions(
            FactFinderWebComponentsConfig::SEARCH_BOX_BUTTON_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getSearchButtonConfig(),
            $searchButtonConfig
        ));
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/searchbox-block/searchbox-block.twig';
    }
}
