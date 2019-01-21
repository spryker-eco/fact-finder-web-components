<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;
use Spryker\Yves\Kernel\View\View;

/**
 * @method \SprykerEco\Yves\FactFinderWebComponents\FactFinderWebComponentsFactory getFactory()
 */
class IndexController extends AbstractController
{
    /**
     * @return \Spryker\Yves\Kernel\View\View
     */
    public function indexAction(): View
    {
        $twigConfigTransformer = $this->getFactory()->createWebComponentConfigToTwigConfigTransformer();
        $configProvider = $this->getFactory()->createWebComponentsConfigProvider();

        return $this->view(
            [
                'facetsAsn' => $twigConfigTransformer->transform(
                    $configProvider->getAsnWidgetConfig()
                ),
                'breadcrumb' => $twigConfigTransformer->transform(
                    $configProvider->getBreadcrumbConfig()
                ),
                'campaign' => $twigConfigTransformer->transform(
                    $configProvider->getCampaignWidgetConfig()
                ),
                'communication' => $twigConfigTransformer->transform(
                    $configProvider->getCommunicationConfig()
                ),
                'headerNavigation' => $twigConfigTransformer->transform(
                    $configProvider->getHeaderNavigationWidgetConfig()
                ),
                'paging' => $twigConfigTransformer->transform(
                    $configProvider->getPagingWidgetConfig()
                ),
                'productsPerPage' => $twigConfigTransformer->transform(
                    $configProvider->getProductsPerPageWidgetConfig()
                ),
                'pushedProducts' => $twigConfigTransformer->transform(
                    $configProvider->getPushedProductsWidgetConfig()
                ),
                'recommendation' => $twigConfigTransformer->transform(
                    $configProvider->getRecommendationConfig()
                ),
                'recordList' => $twigConfigTransformer->transform(
                    $configProvider->getRecordListConfig()
                ),
                'suggest' => $twigConfigTransformer->transform(
                    $configProvider->getSuggestConfig()
                ),
                'checkoutTracking' => $twigConfigTransformer->transform(
                    $configProvider->getCheckoutTrackingConfig()
                ),
                'searchbox' => $twigConfigTransformer->transform(
                    $configProvider->getSearchBoxConfig()
                ),
                'similarProducts' => $twigConfigTransformer->transform(
                    $configProvider->getSimilarProductsConfig()
                ),
                'sortBox' => $twigConfigTransformer->transform(
                    $configProvider->getSortBoxWidgetConfig()
                ),
                'tagCloud' => $twigConfigTransformer->transform(
                    $configProvider->getTagCloudWidgetConfig()
                ),
            ],
            [],
            '@FactFinderWebComponents/views/index/index.twig'
        );
    }
}
