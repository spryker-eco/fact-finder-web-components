<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSortBoxBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderSortBoxBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderSortBoxWidgetInterface
{
    /**
     * @param array $config
     */
    public function initialize(array $config = array()): void
    {
        $this->addParameter('config', $this->getOptions(
            FactFinderWebComponentsConfig::SORT_BOX_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getSortBoxWidgetConfig(),
            $config
        ));
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/sort-box-block/sort-box-block.twig';
    }
}
