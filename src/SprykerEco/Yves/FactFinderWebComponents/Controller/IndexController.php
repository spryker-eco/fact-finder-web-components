<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;
use Spryker\Yves\Kernel\View\View;

/**
 * @method \SprykerEco\Yves\FactFinderWebComponents\FactFinderWebComponentsConfig getConfig()
 * @method \SprykerEco\Yves\FactFinderWebComponents\FactFinderWebComponentsFactory getFactory()
 */
class IndexController extends AbstractController
{
    /**
     * @return \Spryker\Yves\Kernel\View\View
     */
    public function indexAction(): View
    {
        return $this->view(
            $this->getFactory()->createWebComponentsConfigBuilder()->build(),
            [],
            '@FactFinderWebComponents/views/index/index.twig'
        );
    }
}
