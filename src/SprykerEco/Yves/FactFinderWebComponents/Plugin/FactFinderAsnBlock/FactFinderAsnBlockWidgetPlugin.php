<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderAsnBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CatalogPage\Dependency\Plugin\FactFinderAsnWidget\FactFinderAsnWidgetInterface;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;

class FactFinderAsnBlockWidgetPlugin extends AbstractWidgetPlugin implements FactFinderAsnWidgetInterface
{
    /**
     * @return void
     */
    public function initialize(): void
    {
        $this->addParameter('asnGroupWidgetConfig', $this->_getOptions(
            FactFinderWebComponentsConfig::ASN_GROUP_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getAsnGroupWidgetConfig()
        ));

        $this->addParameter('asnGroupElementConfig', $this->_getOptions(
            FactFinderWebComponentsConfig::ASN_GROUP_ELEMENT_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getAsnGroupElementConfig()
        ));

        $this->addParameter('asnRemoveAllFilterConfig', $this->_getOptions(
            FactFinderWebComponentsConfig::ASN_REMOVE_ALL_FILTER_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getAsnRemoveAllFilterConfig()
        ));

        $this->addParameter('asnSliderConfig', $this->_getOptions(
            FactFinderWebComponentsConfig::ASN_SLIDER_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getAsnSliderConfig()
        ));

        $this->addParameter('asnSliderControlConfig', $this->_getOptions(
            FactFinderWebComponentsConfig::ASN_SLIDER_CONTROL_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getAsnSliderControlConfig()
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
        return '@FactFinderWebComponents/views/asn-block/asn-block.twig';
    }
}
