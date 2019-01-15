<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin;

use Spryker\Yves\Kernel\AbstractPlugin;

/**
 * @method \SprykerEco\Yves\FactFinder\FactFinderCommunicationWidgetFactory getFactory()
 */
class FactFinderTwigContentRendererPlugin extends AbstractPlugin implements FactFinderTwigContentRendererPluginInterface
{
    /**
     * @api
     *
     * @param array $contentList
     * @param array $context
     *
     * @return array
     */
    public function render(array $contentList, array $context)
    {
        return $this->getFactory()
            ->createTwigContentRenderer()
            ->render($contentList, $context);
    }
}
