<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSortBoxBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderSortBoxWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderSortBoxWidgetPlugin';

    /**
     * @param array $config
     */
    public function initialize(array $config = []): void;
}
