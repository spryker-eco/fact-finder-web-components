<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\WebComponentsConfig;

interface WebComponentsConfigBuilderInterface
{
    /**
     * Return Web Components config.
     *
     * @return array
     */
    public function build(): array;
}
