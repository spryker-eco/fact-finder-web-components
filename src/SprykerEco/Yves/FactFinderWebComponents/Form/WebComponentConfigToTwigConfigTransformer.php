<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Yves\FactFinderWebComponents\Form;

use Symfony\Component\Form\DataTransformerInterface;

class WebComponentConfigToTwigConfigTransformer implements DataTransformerInterface
{
    public const ITEMS_PARAMETER = 'items';

    /**
     * @inheritdoc
     *
     * @param mixed $value
     *
     * @return mixed|void
     */
    public function transform($value)
    {
        $result = [];
        $properties = '';

        if (is_array($value)) {
            $result = $value;

            if (isset($value['properties'])) {
                $result['component'] = $this->transformFromArrayToHtmlAttributes($result['properties'] ?? []);
                unset($result['properties']);
            }
        }

        return $result;
    }

    /**
     * @param array $collection
     *
     * @return string
     */
    protected function transformFromArrayToHtmlAttributes(array $collection): string
    {
        $htmlAttributesString = '';

        $iterationCount = 0;
        $maxIterationCount = count($collection);
        foreach ($collection as $itemKey => $itemValue) {
            if (is_bool($itemValue)) {
                if ($itemValue === true) {
                    $htmlAttributesString .= sprintf('%s', $itemKey);
                }
            } else {
                $htmlAttributesString .= sprintf('%s="%s"', $itemKey, $itemValue);
            }

            if ($iterationCount < $maxIterationCount) {
                $htmlAttributesString .= ' ';
            }

            ++$iterationCount;
        }

        return $htmlAttributesString;
    }

    /**
     * @inheritdoc
     *
     * @param mixed $value
     *
     * @return mixed|void
     */
    public function reverseTransform($value)
    {
        $result = [];

        if (is_array($value)) {
            $result = $value;

            if (isset($value['component'])) {
                $result['properties'] = $this->transformFropmHtmlAttributesToArray($result['component'] ?? []);
                unset($result['component']);
            }
        }

        return $result;
    }

    /**
     * @param string $attributes
     *
     * @return array
     */
    protected function transformFropmHtmlAttributesToArray(string $attributes): array
    {
        $properties = [];

        if (is_string($attributes)) {
            $attributeDataCollection = explode(' ', trim($attributes));
            foreach ($attributeDataCollection as $attributeDataString) {
                $varData = explode('=', $attributeDataString);
                if ($varData) {
                    $properties[$varData[0]] = trim($varData[1], '"\'');
                }
            }
        }

        return $properties;
    }
}
