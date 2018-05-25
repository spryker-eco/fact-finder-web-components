<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSortBoxBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CatalogPage\Dependency\Plugin\FactFinderSortBoxWidget\FactFinderSortBoxWidgetInterface;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;

class FactFinderSortBoxBlockWidgetPlugin extends AbstractWidgetPlugin implements FactFinderSortBoxWidgetInterface
{
    /**
     * @return void
     */
    public function initialize(): void
    {
        $this->addParameter('sortBoxConfig', $this->_getOptions(
            FactFinderWebComponentsConfig::SORT_BOX_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getSortBoxWidgetConfig()
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
            if (in_array($key, $allowedAttributes) && $value) {
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
        return '@FactFinderWebComponents/views/sort-box-block/sort-box-block.twig';
    }
}
