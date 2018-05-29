<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\Provider;

use Silex\Application;
use Spryker\Yves\Application\Plugin\Provider\YvesControllerProvider;

class FactFinderWebComponentsControllerProvider extends YvesControllerProvider
{
    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    protected function defineControllers(Application $app)
    {
        $this->createController('/fact-finder-web-components', 'fact-finder-web-components', 'fact-finder-web-components', 'index');
    }
}
