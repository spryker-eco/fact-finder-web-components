<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCommunicationBlock;

use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

/**
 * @method \SprykerEco\Yves\FactFinderWebComponents\FactFinderWebComponentsConfig getConfig()
 */
class FactFinderCommunicationBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderCommunicationWidgetInterface
{
    /**
     * @param array $config
     *
     * @return void
     */
    public function initialize(array $config = []): void
    {
        $this->addParameter('config', $this->getOptions(
            FactFinderWebComponentsConfig::COMMUNICATION_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getCommunicationConfig(),
            $config
        ));
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/communication-block/communication-block.twig';
    }
}
