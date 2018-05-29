<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents;

use Spryker\Yves\Kernel\AbstractFactory;

class FactFinderWebComponentsFactory extends AbstractFactory
{
    /**
     * @return string[]
     */
    public function getFactFinderWidgetPlugins(): array
    {
        return $this->getProvidedDependency(FactFinderWebComponentsDependencyProvider::FACT_FINDER_WIDGETS);
    }
}
