<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderBreadcrumbBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderBreadcrumbWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderBreadcrumbWidgetPlugin';

    /**
     * @return void
     */
    public function initialize(): void;
}
