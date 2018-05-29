<?php
namespace SprykerEco\Yves\FactFinderWebComponents\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;

class IndexController extends AbstractController
{
    public function indexAction()
    {
        return $this->view(
            array(),
            $this->getFactory()->getFactFinderWidgetPlugins(),
            '@FactFinderWebComponents/views/index/index.twig'
        );
    }
}