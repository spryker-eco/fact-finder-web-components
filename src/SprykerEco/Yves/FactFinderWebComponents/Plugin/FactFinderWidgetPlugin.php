<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;

class FactFinderWidgetPlugin extends AbstractWidgetPlugin
{
    /**
     * @param array $widgetConfig
     *
     * @return void
     */
    public function initialize(array $widgetConfig = []): void
    {
    }

    /**
     * Get widget options
     *
     * @param $allowedAttributes
     * @param $widgetGlobalConfig
     * @param $widgetLocalConfig
     *
     * @return string
     */
    public function getOptions($allowedAttributes, $widgetGlobalConfig, $widgetLocalConfig): string
    {
        $widgetConfig = array_replace($widgetGlobalConfig, $widgetLocalConfig);
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
    }
}
