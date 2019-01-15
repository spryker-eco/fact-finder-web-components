<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderAsnBlock;

use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

/**
 * @method \SprykerEco\Yves\FactFinderWebComponents\FactFinderWebComponentsConfig getConfig()
 */
class FactFinderAsnBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderAsnWidgetInterface
{
    /**
     * @param array $asnGroupWidgetConfig
     * @param array $asnGroupElementConfig
     * @param array $asnRemoveAllFilterConfig
     * @param array $asnSliderConfig
     * @param array $asnSliderControlConfig
     *
     * @return void
     */
    public function initialize(array $asnGroupWidgetConfig = [], array $asnGroupElementConfig = [], array $asnRemoveAllFilterConfig = [], array $asnSliderConfig = [], array $asnSliderControlConfig = []): void
    {
        $this->addParameter('asnGroupWidgetConfig', $this->getOptions(
            FactFinderWebComponentsConfig::ASN_GROUP_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getAsnGroupWidgetConfig(),
            $asnGroupWidgetConfig
        ));

        $this->addParameter('asnGroupElementConfig', $this->getOptions(
            FactFinderWebComponentsConfig::ASN_GROUP_ELEMENT_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getAsnGroupElementConfig(),
            $asnGroupElementConfig
        ));

        $this->addParameter('asnRemoveAllFilterConfig', $this->getOptions(
            FactFinderWebComponentsConfig::ASN_REMOVE_ALL_FILTER_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getAsnRemoveAllFilterConfig(),
            $asnRemoveAllFilterConfig
        ));

        $this->addParameter('asnSliderConfig', $this->getOptions(
            FactFinderWebComponentsConfig::ASN_SLIDER_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getAsnSliderConfig(),
            $asnSliderConfig
        ));

        $this->addParameter('asnSliderControlConfig', $this->getOptions(
            FactFinderWebComponentsConfig::ASN_SLIDER_CONTROL_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getAsnSliderControlConfig(),
            $asnSliderControlConfig
        ));
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/asn-block/asn-block.twig';
    }
}
