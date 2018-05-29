<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderAsnBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderAsnWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderAsnWidgetPlugin';

    /**
     * @param array $asnGroupWidgetConfig
     * @param array $asnGroupElementConfig
     * @param array $asnRemoveAllFilterConfig
     * @param array $asnSliderConfig
     * @param array $asnSliderControlConfig
     */
    public function initialize(array $asnGroupWidgetConfig = array(), array $asnGroupElementConfig = array(), array $asnRemoveAllFilterConfig = array(), array $asnSliderConfig = array(), array $asnSliderControlConfig = array()): void;
}
