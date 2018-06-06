<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Plugin\FactFinderCampaignBlock;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

interface FactFinderCampaignWidgetInterface extends WidgetPluginInterface
{
    public const NAME = 'FactFinderCampaignWidgetPlugin';

    /**
     * @param array $config
     */
    public function initialize(array $config = []): void;
}
