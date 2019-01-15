<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderTagCloudBlock;

use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderTagCloudBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderTagCloudWidgetInterface
{
    /**
     * @param array $config
     *
     * @return void
     */
    public function initialize(array $config = []): void
    {
        $this->addParameter('config', $this->getOptions(
            FactFinderWebComponentsConfig::TAG_CLOUD_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getTagCloudWidgetConfig(),
            $config
        ));
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/tag-cloud-block/tag-cloud-block.twig';
    }
}
