<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCommunicationBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderCommunicationBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderCommunicationWidgetInterface
{
    /**
     * @param array $config
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
