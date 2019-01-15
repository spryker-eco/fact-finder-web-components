<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderSearchboxBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderSearchboxWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderSearchboxWidgetPlugin';

    /**
     * @param array $searchBoxConfig
     * @param array $searchButtonConfig
     *
     * @return void
     */
    public function initialize(array $searchBoxConfig = [], array $searchButtonConfig = []): void;
}
