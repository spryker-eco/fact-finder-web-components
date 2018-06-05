<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderTagCloudBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderTagCloudWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderTagCloudWidgetPlugin';

    /**
     * @return void
     */
    public function initialize(): void;
}
