<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderBreadcrumbBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderBreadcrumbWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderBreadcrumbWidgetPlugin';

    /**
     * @return void
     */
    public function initialize(): void;
}
