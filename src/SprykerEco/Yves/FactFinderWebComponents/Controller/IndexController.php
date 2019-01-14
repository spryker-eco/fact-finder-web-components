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
        $configToStringTransformer = $this->getFactory()->createWebComponentConfigToTwigConfigTransformer();
        $configProvider = $this->getFactory()->createFactFinderWebComponentsConfigProvider();

        return $this->view(
            [
                'facetsAsn' => $configToStringTransformer->transform(
                    $configProvider->getAsnWidgetConfig()
                ),
                'breadcrumb' => $configToStringTransformer->transform(
                    $configProvider->getBreadcrumbConfig()
                ),
                'campaign' => $configToStringTransformer->transform(
                    $configProvider->getCampaignWidgetConfig()
                ),
                'communication' => $configToStringTransformer->transform(
                    $configProvider->getCommunicationConfig()
                ),
                'headerNavigation' => $configToStringTransformer->transform(
                    $configProvider->getHeaderNavigationWidgetConfig()
                ),
                'paging' => $configToStringTransformer->transform(
                    $configProvider->getPagingWidgetConfig()
                ),
                'productsPerPage' => $configToStringTransformer->transform(
                    $configProvider->getProductsPerPageWidgetConfig()
                ),
                'pushedProducts' => $configToStringTransformer->transform(
                    $configProvider->getPushedProductsWidgetConfig()
                ),
                'recommendation' => $configToStringTransformer->transform(
                    $configProvider->getRecommendationConfig()
                   ),
                'recordList' => $configToStringTransformer->transform(
                    $configProvider->getRecordListConfig()
                ),
                'suggest' => $configToStringTransformer->transform(
                    $configProvider->getSuggestConfig()
                ),
                'checkoutTracking' => $configToStringTransformer->transform(
                    $configProvider->getCheckoutTrackingConfig()
                ),
                'searchbox' => $configToStringTransformer->transform(
                    $configProvider->getSearchBoxConfig()
                ),
                'similarProducts' => $configToStringTransformer->transform(
                    $configProvider->getSimilarProductsConfig()
                ),
                'sortBox' => $configToStringTransformer->transform(
                    $configProvider->getSortBoxWidgetConfig()
                ),
                'tagCloud' => $configToStringTransformer->transform(
                        $configProvider->getTagCloudWidgetConfig()
                ),
            ],
            $this->getFactory()->getFactFinderWidgetPlugins(),
            '@FactFinderWebComponents/views/index/index.twig'
        );
    }
}
