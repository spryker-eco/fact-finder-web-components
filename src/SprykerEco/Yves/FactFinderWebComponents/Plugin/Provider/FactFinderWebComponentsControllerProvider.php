<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\Provider;

use Silex\Application;
use Spryker\Yves\Application\Plugin\Provider\YvesControllerProvider;

class FactFinderWebComponentsControllerProvider extends YvesControllerProvider
{
    public const ROUTE_FACT_FINDER_WEB_COMPONENTS = 'fact-finder-web-components';

    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    protected function defineControllers(Application $app)
    {
        $this->createController(
            '/fact-finder-web-components',
            static::ROUTE_FACT_FINDER_WEB_COMPONENTS,
            'fact-finder-web-components',
            'index'
        );
    }
}
