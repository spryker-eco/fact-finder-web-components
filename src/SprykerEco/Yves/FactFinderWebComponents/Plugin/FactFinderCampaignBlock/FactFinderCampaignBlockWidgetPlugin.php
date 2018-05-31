<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCampaignBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderCampaignBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderCampaignWidgetInterface
{
    /**
     * @param array $config
     */
    public function initialize(array $config = array()): void
    {
        $this->addParameter('config', $this->_getOptions(
            FactFinderWebComponentsConfig::CAMPAIGN_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getCampaignWidgetConfig(),
            $config
        ));
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/campaign-block/campaign-block.twig';
    }
}
