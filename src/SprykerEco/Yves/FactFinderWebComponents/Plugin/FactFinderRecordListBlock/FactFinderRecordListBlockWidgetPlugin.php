<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderRecordListBlock;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CatalogPage\Dependency\Plugin\FactFinderRecordListWidget\FactFinderRecordListWidgetInterface;
use SprykerEco\Shared\FactFinderWebComponents\FactFinderWebComponentsConfig;
use SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderWidgetPlugin;

class FactFinderRecordListBlockWidgetPlugin extends FactFinderWidgetPlugin implements FactFinderRecordListWidgetInterface
{
    /**
     * @param array $recordListConfig
     * @param array $recordConfig
     */
    public function initialize(array $recordListConfig = array(), array $recordConfig = array()): void
    {
        $this->addParameter('recordListConfig', $this->_getOptions(
            FactFinderWebComponentsConfig::RECORD_LIST_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getRecordListConfig(),
            $recordListConfig
        ));

        $this->addParameter('recordConfig', $this->_getOptions(
            FactFinderWebComponentsConfig::RECORD_WIDGET_ALLOWED_ATTRIBUTES,
            $this->getConfig()->getRecordConfig(),
            $recordConfig
        ));
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@FactFinderWebComponents/views/record-list-block/record-list-block.twig';
    }
}
