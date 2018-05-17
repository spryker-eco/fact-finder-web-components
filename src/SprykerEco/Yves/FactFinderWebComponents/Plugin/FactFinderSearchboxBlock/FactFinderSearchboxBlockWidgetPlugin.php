<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSearchboxBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CatalogPage\Dependency\Plugin\FactFinderSearchboxWidget\FactFinderSearchboxWidgetInterface;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;

class FactFinderSearchboxBlockWidgetPlugin extends AbstractWidgetPlugin implements FactFinderSearchboxWidgetInterface
{
    /**
     * @return void
     */
    public function initialize(): void
    {
        $this->addParameter('searchBoxParams', $this->_getOptions(
            FactFinderWebComponentsConfig::SEARCH_BOX_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getSearchBoxConfig()
        ));
        $this->addParameter('searchButtonParams', $this->_getOptions(
            FactFinderWebComponentsConfig::SEARCH_BOX_BUTTON_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getSearchButtonConfig()
        ));
    }

    /**
     * Get widget options
     *
     * @param array $allowedAttributes
     * @param array $widgetConfig
     *
     * @return string
     */
    protected function _getOptions($allowedAttributes, $widgetConfig): string
    {
        $options = '';
        foreach ($widgetConfig as $key => $value) {
            if (in_array($key, $allowedAttributes)) {
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
        return '@FactFinderWebComponents/views/searchbox-block/searchbox-block.twig';
    }
}
