<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderPagingBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderPagingWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderPagingWidgetPlugin';

    /**
     * @param array $config
     */
    public function initialize(array $config = []): void;
}
