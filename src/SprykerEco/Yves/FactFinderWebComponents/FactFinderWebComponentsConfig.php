<?php
namespace SprykerEco\Yves\FactFinderWebComponents;

use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConstants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class FactFinderWebComponentsConfig extends AbstractBundleConfig
{
    /**
     * Return communcation config
     *
     * @return array
     */
    public function getCommunicationConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::COMMUNICATION_WIDGET_CONFIG);
    }

    /**
     * Return search box config
     *
     * @return array
     */
    public function getSearchBoxConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::SEARCH_BOX_WIDGET_CONFIG);
    }

    /**
     * Return search button config
     *
     * @return array
     */
    public function getSearchButtonConfig()
    {
        return $this->get(FactFinderWebComponentsConstants::SEARCH_BUTTON_WIDGET_CONFIG);
    }
}