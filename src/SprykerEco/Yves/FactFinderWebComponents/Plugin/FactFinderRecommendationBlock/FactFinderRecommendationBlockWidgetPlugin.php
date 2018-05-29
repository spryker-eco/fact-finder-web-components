<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderRecommendationBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderRecommendationBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderRecommendationWidgetInterface
{
    /**
     * @param array $config
     */
    public function initialize(array $widgetLocalConfig = array(), string $recordId = ''): void
    {
        $this->addParameter('recommendationConfig', $this->_getOptions(
            FactFinderWebComponentsConfig::RECOMMENDATION_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getRecommendationConfig(),
            $widgetLocalConfig
        ));

        $recordId = ($recordId) ? $recordId : $this->getConfig()->getRecommendationRecordIdConfig();
        $this->addParameter('recordId', $recordId);
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/recommendation-block/recommendation-block.twig';
    }
}
