<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
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
