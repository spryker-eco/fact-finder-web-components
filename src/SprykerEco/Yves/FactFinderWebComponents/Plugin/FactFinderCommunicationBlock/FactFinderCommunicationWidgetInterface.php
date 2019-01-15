<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
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
