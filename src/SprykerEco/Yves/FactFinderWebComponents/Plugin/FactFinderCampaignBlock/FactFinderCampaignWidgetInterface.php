<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
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
