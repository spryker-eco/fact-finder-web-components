<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents;

use Spryker\Yves\Kernel\AbstractFactory;
use SprykerEco\Yves\FactFinderWebComponents\Form\WebComponentConfigToTwigConfigTransformer;
use Symfony\Component\Form\DataTransformerInterface;

/**
 * @method \SprykerEco\Yves\FactFinderWebComponents\FactFinderWebComponentsConfig getConfig()
 */
class FactFinderWebComponentsFactory extends AbstractFactory
{
    /**
     * @return \SprykerEco\Yves\FactFinderWebComponents\WebComponentsConfigInterface
     */
    public function createWebComponentsConfig(): WebComponentsConfigInterface
    {
        return $this->getConfig();
    }

    /**
     * @return \Symfony\Component\Form\DataTransformerInterface
     */
    public function createWebComponentConfigToTwigConfigTransformer(): DataTransformerInterface
    {
        return new WebComponentConfigToTwigConfigTransformer();
    }
}
