<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderRecommendationBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderRecommendationWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderRecommendationWidgetPlugin';

    /**
     * @param array $widgetLocalConfig
     * @param string $recordId
     */
    public function initialize(array $widgetLocalConfig = [], string $recordId = ''): void;
}
