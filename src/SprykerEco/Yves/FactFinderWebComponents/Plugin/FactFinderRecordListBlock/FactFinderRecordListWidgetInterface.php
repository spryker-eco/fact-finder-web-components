<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderRecordListBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderRecordListWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderRecordListWidgetPlugin';

    /**
     * @param array $recordListConfig
     * @param array $recordConfig
     */
    public function initialize(array $recordListConfig = [], array $recordConfig = []): void;
}
