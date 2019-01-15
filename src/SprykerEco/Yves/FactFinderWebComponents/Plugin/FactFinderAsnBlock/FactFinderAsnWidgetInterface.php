<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
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
     *
     * @return void
     */
    public function initialize(
        array $asnGroupWidgetConfig = [],
        array $asnGroupElementConfig = [],
        array $asnRemoveAllFilterConfig = [],
        array $asnSliderConfig = [],
        array $asnSliderControlConfig = []
    ): void;
}
