<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
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
