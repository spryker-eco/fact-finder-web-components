<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;

class FactFinderWidgetPlugin extends AbstractWidgetPlugin
{
    /**
     * @param array $widgetConfig
     */
    public function initialize(array $widgetConfig = array()): void {}

    /**
     * Get widget options
     *
     * @param $allowedAttributes
     * @param $widgetGlobalConfig
     * @param $widgetLocalConfig
     *
     * @return string
     */
    protected function _getOptions($allowedAttributes, $widgetGlobalConfig, $widgetLocalConfig): string
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
    public static function getTemplate(): string {}
}
