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
 */
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
        $twigConfigTransformer = $this->getFactory()->createWebComponentConfigToTwigConfigTransformer();
        $webComponentsConfig = $this->getFactory()->createWebComponentsConfig();

        return $this->view(
            [
                'facetsAsn' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getAsnSliderConfig()
                ),
                'breadcrumb' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getBreadcrumbConfig()
                ),
                'campaign' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getCampaignWidgetConfig()
                ),
                'communication' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getCommunicationConfig()
                ),
                'headerNavigation' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getHeaderNavigationWidgetConfig()
                ),
                'paging' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getPagingWidgetConfig()
                ),
                'productsPerPage' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getProductsPerPageWidgetConfig()
                ),
                'pushedProducts' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getPushedProductsWidgetConfig()
                ),
                'recommendation' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getRecommendationConfig()
                ),
                'recordList' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getRecordListConfig()
                ),
                'suggest' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getSuggestConfig()
                ),
                'checkoutTracking' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getCheckoutTrackingConfig()
                ),
                'searchbox' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getSearchBoxConfig()
                ),
                'similarProducts' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getSimilarProductsConfig()
                ),
                'sortBox' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getSortBoxWidgetConfig()
                ),
                'tagCloud' => $twigConfigTransformer->transform(
                    $webComponentsConfig->getTagCloudWidgetConfig()
                ),
            ],
            [],
            '@FactFinderWebComponents/views/index/index.twig'
        );
    }
}
