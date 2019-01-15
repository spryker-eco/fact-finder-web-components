<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSearchboxBlock;

use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

/**
 * @method \SprykerEco\Yves\FactFinderWebComponents\FactFinderWebComponentsConfig getConfig()
 */
class FactFinderSearchboxBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderSearchboxWidgetInterface
{
    /**
     * @param array $searchBoxConfig
     * @param array $searchButtonConfig
     *
     * @return void
     */
    public function initialize(array $searchBoxConfig = [], array $searchButtonConfig = []): void
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
