<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderHeaderNavigationBlock;

use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderHeaderNavigationBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderHeaderNavigationWidgetInterface
{
    /**
     * @param array $config
     *
     * @return void
     */
    public function initialize(array $config = []): void
    {
        $this->addParameter('config', $this->getOptions(
            FactFinderWebComponentsConfig::HEADER_NAVIGATION_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getHeaderNavigationWidgetConfig(),
            $config
        ));
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/header-navigation-block/header-navigation-block.twig';
    }
}
