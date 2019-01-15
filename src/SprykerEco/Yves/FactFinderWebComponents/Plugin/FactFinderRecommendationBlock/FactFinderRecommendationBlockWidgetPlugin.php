<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderRecommendationBlock;

use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderRecommendationBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderRecommendationWidgetInterface
{
    /**
     * @inheritdoc
     *
     * @return void
     */
    public function initialize(array $widgetLocalConfig = [], string $recordId = ''): void
    {
        $this->addParameter('recommendationConfig', $this->getOptions(
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
