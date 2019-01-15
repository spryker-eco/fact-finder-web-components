<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderBreadcrumbBlock;

use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderBreadcrumbBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderBreadcrumbWidgetInterface
{
    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/breadcrumb-block/breadcrumb-block.twig';
    }
}
