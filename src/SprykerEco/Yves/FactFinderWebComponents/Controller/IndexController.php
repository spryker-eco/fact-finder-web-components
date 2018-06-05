<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;

class IndexController extends AbstractController
{

    /**
     * Index action
     *
     * @return \Spryker\Yves\Kernel\View\View
     */
    public function indexAction()
    {
        return $this->view(
            array(),
            $this->getFactory()->getFactFinderWidgetPlugins(),
            '@FactFinderWebComponents/views/index/index.twig'
        );
    }
}