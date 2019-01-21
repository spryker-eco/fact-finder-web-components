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

        if (is_array($value) == false) {
            return $result;
        }

        $result = $value;
        if (isset($value['properties'])) {
            $result['component'] = $this->transformFromArrayToHtmlAttributes($value['properties']);
            unset($result['properties']);
        }

        return $result;
    }

    /**
     * @param array $componentParameters
     *
     * @return string
     */
    protected function transformFromArrayToHtmlAttributes(array $componentParameters): string
    {
        $htmlAttributesString = '';

        foreach ($componentParameters as $itemKey => $itemValue) {
            if (is_bool($itemValue) == false) {
                $htmlAttributesString .= sprintf('%s="%s" ', $itemKey, $itemValue);

                continue;
            }

            if ($itemValue === true) {
                $htmlAttributesString .= sprintf('%s ', $itemKey);
            }
        }

        return trim($htmlAttributesString);
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

        if (is_array($value) == false) {
            return $result;
        }

        $result = $value;
        if (isset($value['component']) && is_string($value['component'])) {
            $result['properties'] = $this->transformFropmHtmlAttributesToArray($result['component']);
            unset($result['component']);
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

        $attributeDataCollection = explode(' ', trim($attributes));
        foreach ($attributeDataCollection as $attributeDataString) {
            if (preg_match('/([^=]+)=([^ ]+)/', $attributeDataString, $varData)) {
                $properties[trim($varData[1], '"\'')] = trim($varData[2], '"\'');
            } elseif (preg_match('/([^=]+)/', $attributeDataString, $varData)) {
                $properties[trim($varData[1], '"\'')] = true;
            }
        }

        return $properties;
    }
}
