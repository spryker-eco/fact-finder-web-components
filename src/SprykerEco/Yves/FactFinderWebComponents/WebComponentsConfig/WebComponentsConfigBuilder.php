<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\WebComponentsConfig;

use Symfony\Component\Form\DataTransformerInterface;
use SprykerEco\Yves\FactFinderWebComponents\FactFinderWebComponentsConfig;

class WebComponentsConfigBuilder implements WebComponentsConfigBuilderInterface
{
    /**
     * @var \SprykerEco\Yves\FactFinderWebComponents\FactFinderWebComponentsConfig
     */
    protected $webComponentsConfig;

    /**
     * @var \Symfony\Component\Form\DataTransformerInterface
     */
    protected $configToTwigConfigTransformer;

    public function __construct(
        FactFinderWebComponentsConfig $config,
        DataTransformerInterface $configToTwigConfigTransformer
    ) {
        $this->webComponentsConfig = $config;
        $this->configToTwigConfigTransformer = $configToTwigConfigTransformer;
    }

    /**
     * @inheritdoc
     *
     * @return array
     */
    public function build(): array
    {
        $webComponentsConfig = $this->webComponentsConfig;
        $twigConfigTransformer = $this->configToTwigConfigTransformer;

        return [
            'facetsAsn' => $twigConfigTransformer->transform(
                $webComponentsConfig->getAsnSliderComponentConfig()
            ),
            'breadcrumb' => $twigConfigTransformer->transform(
                $webComponentsConfig->getBreadcrumbComponentConfig()
            ),
            'campaign' => $twigConfigTransformer->transform(
                $webComponentsConfig->getCampaignWidgetComponentConfig()
            ),
            'communication' => $twigConfigTransformer->transform(
                $webComponentsConfig->getCommunicationComponentConfig()
            ),
            'headerNavigation' => $twigConfigTransformer->transform(
                $webComponentsConfig->getHeaderNavigationWidgetComponentConfig()
            ),
            'paging' => $twigConfigTransformer->transform(
                $webComponentsConfig->getPagingWidgetComponentConfig()
            ),
            'productsPerPage' => $twigConfigTransformer->transform(
                $webComponentsConfig->getProductsPerPageWidgetComponentConfig()
            ),
            'pushedProducts' => $twigConfigTransformer->transform(
                $webComponentsConfig->getPushedProductsWidgetComponentConfig()
            ),
            'recommendation' => $twigConfigTransformer->transform(
                $webComponentsConfig->getRecommendationComponentConfig()
            ),
            'recordList' => $twigConfigTransformer->transform(
                $webComponentsConfig->getRecordListComponentConfig()
            ),
            'suggest' => $twigConfigTransformer->transform(
                $webComponentsConfig->getSuggestComponentConfig()
            ),
            'checkoutTracking' => $twigConfigTransformer->transform(
                $webComponentsConfig->getCheckoutTrackingComponentConfig()
            ),
            'searchbox' => $twigConfigTransformer->transform(
                $webComponentsConfig->getSearchBoxComponentConfig()
            ),
            'similarProducts' => $twigConfigTransformer->transform(
                $webComponentsConfig->getSimilarProductsComponentConfig()
            ),
            'sortBox' => $twigConfigTransformer->transform(
                $webComponentsConfig->getSortBoxWidgetComponentConfig()
            ),
            'tagCloud' => $twigConfigTransformer->transform(
                $webComponentsConfig->getTagCloudWidgetComponentConfig()
            ),
        ];
    }
}
