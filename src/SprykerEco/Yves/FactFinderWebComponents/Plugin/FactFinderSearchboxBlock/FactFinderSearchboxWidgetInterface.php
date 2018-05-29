<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSearchboxBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderSearchboxWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderSearchboxWidgetPlugin';

    /**
     * @param array $searchBoxConfig
     * @param array $searchButtonConfig
     */
    public function initialize(array $searchBoxConfig = array(), array $searchButtonConfig = array()): void;
}
