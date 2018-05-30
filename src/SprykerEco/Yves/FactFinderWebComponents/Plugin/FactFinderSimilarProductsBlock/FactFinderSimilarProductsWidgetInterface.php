<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSimilarProductsBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderSimilarProductsWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderSimilarProductsWidgetPlugin';

    /**
     * @param array  $similarProductsConfig
     * @param string $similarProductId
     */
    public function initialize(array $similarProductsConfig = array(), string $similarProductId = ''): void;
}