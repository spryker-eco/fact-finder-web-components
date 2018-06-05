<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSearchboxBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderSearchboxBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderSearchboxWidgetInterface
{
    /**
     * @param array $searchBoxConfig
     * @param array $searchButtonConfig
     */
    public function initialize(array $searchBoxConfig = array(), array $searchButtonConfig = array()): void
    {
        $this->addParameter('searchBoxConfig', $this->getOptions(
            FactFinderWebComponentsConfig::SEARCH_BOX_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getSearchBoxConfig(),
            $searchBoxConfig
        ));
        $this->addParameter('searchButtonConfig', $this->getOptions(
            FactFinderWebComponentsConfig::SEARCH_BOX_BUTTON_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getSearchButtonConfig(),
            $searchButtonConfig
        ));
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/searchbox-block/searchbox-block.twig';
    }
}
