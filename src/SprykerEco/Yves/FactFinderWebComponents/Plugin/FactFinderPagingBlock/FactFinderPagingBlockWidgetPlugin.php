<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderPagingBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderPagingBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderPagingWidgetInterface
{
    /**
     * @param array $config
     */
    public function initialize(array $config = array()): void
    {
        $this->addParameter('config', $this->getOptions(
            FactFinderWebComponentsConfig::PAGING_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getPagingWidgetConfig(),
            $config
        ));
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/paging-block/paging-block.twig';
    }
}
