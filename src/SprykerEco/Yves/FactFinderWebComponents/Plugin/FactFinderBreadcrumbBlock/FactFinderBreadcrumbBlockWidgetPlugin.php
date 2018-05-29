<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderBreadcrumbBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderBreadcrumbBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderBreadcrumbWidgetInterface
{
    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/breadcrumb-block/breadcrumb-block.twig';
    }
}
