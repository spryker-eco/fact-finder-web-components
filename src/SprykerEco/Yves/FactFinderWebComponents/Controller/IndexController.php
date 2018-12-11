<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;

/**
 * @method \SprykerEco\Yves\FactFinderWebComponents\FactFinderWebComponentsFactory getFactory()
 */
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
           [
               'asn' => $this->getFactory()->createFactFinderWebComponentsConfigProvider()->getAsnWidgetConfig(),
               'campaign' => $this->getFactory()->createFactFinderWebComponentsConfigProvider()->getCampaignWidgetConfig(),
               'communication' => $this->getFactory()->createFactFinderWebComponentsConfigProvider()->getCommunicationConfig(),
               'headerNavigation' => $this->getFactory()->createFactFinderWebComponentsConfigProvider()->getHeaderNavigationWidgetConfig(),
               'paging' => $this->getFactory()->createFactFinderWebComponentsConfigProvider()->getPagingWidgetConfig(),
               'productsPerPage' => $this->getFactory()->createFactFinderWebComponentsConfigProvider()->getProductsPerPageWidgetConfig(),
               'pushedProducts' => $this->getFactory()->createFactFinderWebComponentsConfigProvider()->getPushedProductsWidgetConfig(),
               'recommendation' => $this->getFactory()->createFactFinderWebComponentsConfigProvider()->getRecommendationConfig(),
               'recordList' => $this->getFactory()->createFactFinderWebComponentsConfigProvider()->getRecordListConfig(),
               'searchbox' => $this->getFactory()->createFactFinderWebComponentsConfigProvider()->getSearchBoxConfig(),
               'similarProducts' => $this->getFactory()->createFactFinderWebComponentsConfigProvider()->getSimilarProductsConfig(),
               'sortBox' => $this->getFactory()->createFactFinderWebComponentsConfigProvider()->getSortBoxWidgetConfig(),
               'tagCloud' => $this->getFactory()->createFactFinderWebComponentsConfigProvider()->getTagCloudWidgetConfig(),
           ],
            $this->getFactory()->getFactFinderWidgetPlugins(),
            '@FactFinderWebComponents/views/index/index.twig'
        );
    }
}
