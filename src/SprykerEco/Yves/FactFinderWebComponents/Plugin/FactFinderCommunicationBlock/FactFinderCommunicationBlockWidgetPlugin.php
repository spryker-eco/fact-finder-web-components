<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCommunicationBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CatalogPage\Dependency\Plugin\FactFinderCommunicationWidget\FactFinderCommunicationWidgetInterface;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;

class FactFinderCommunicationBlockWidgetPlugin extends AbstractWidgetPlugin implements FactFinderCommunicationWidgetInterface
{
    /**
     * @return void
     */
    public function initialize(): void
    {
        $this->addParameter('params', $this->_getOptions());
    }

    /**
     * Get widget options
     *
     * @return string
     */
    protected function _getOptions(): string
    {
        $communicationWidgetConfig = $this->getConfig()->getCommunicationConfig();
        $options = '';
        foreach ($communicationWidgetConfig as $key => $value) {
            if (in_array($key, FactFinderWebComponentsConfig::COMMUNICATION_WIDGET_ALLOWED_ATTRIBUTES)) {
                $options .= sprintf(' %s="%s"', $key, $value);
            }
        }

        return $options;
    }

    /**
     * @return string
     */
    public static function getName(): string
    {
        return static::NAME;
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/communication-block/communication-block.twig';
    }
}
