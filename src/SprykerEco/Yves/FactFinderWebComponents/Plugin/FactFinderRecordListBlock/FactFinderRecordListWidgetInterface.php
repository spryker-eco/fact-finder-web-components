<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderRecordListBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderRecordListWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderRecordListWidgetPlugin';

    /**
     * @param array $recordListConfig
     * @param array $recordConfig
     *
     * @return void
     */
    public function initialize(array $recordListConfig = [], array $recordConfig = []): void;
}
