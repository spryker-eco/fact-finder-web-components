<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin;

interface FactFinderTwigContentRendererPluginInterface
{
    /**
     * @api
     *
     * @param array $contentList
     * @param array $context
     *
     * @return array
     */
    public function render(array $contentList, array $context);
}
