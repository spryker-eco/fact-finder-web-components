<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderTagCloudBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderTagCloudBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderTagCloudWidgetInterface
{
    /**
     * @param array $config
     */
    public function initialize(array $config = array()): void
    {
        $this->addParameter('config', $this->_getOptions(
            FactFinderWebComponentsConfig::TAG_CLOUD_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getTagCloudWidgetConfig(),
            $config
        ));
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/tag-cloud-block/tag-cloud-block.twig';
    }
}
