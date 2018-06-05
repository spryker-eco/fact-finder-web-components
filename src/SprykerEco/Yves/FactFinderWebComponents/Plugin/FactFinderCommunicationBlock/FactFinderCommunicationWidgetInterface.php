<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCommunicationBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderCommunicationWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderCommunicationWidgetPlugin';

    /**
     * @param array $config
     */
    public function initialize(array $config): void;
}
