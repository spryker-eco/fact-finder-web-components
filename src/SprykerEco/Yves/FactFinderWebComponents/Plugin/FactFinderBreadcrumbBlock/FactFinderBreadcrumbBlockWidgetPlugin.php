<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderBreadcrumbBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CatalogPage\Dependency\Plugin\FactFinderBreadcrumbWidget\FactFinderBreadcrumbWidgetInterface;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;

class FactFinderBreadcrumbBlockWidgetPlugin extends AbstractWidgetPlugin implements FactFinderBreadcrumbWidgetInterface
{
    /**
     * @return void
     */
    public function initialize(): void {}

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
        return '@FactFinderWebComponents/views/breadcrumb-block/breadcrumb-block.twig';
    }
}
