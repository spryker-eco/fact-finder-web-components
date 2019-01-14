<?php

namespace SprykerEco\Yves\FactFinderWebComponents\Form;

use \Symfony\Component\Form\DataTransformerInterface;

class WebComponentConfigToTwigConfigTransformer implements DataTransformerInterface
{
    public const ITEMS_PARAMETER = 'items';
    /**
     * @inheritdoc
     *
     * @param mixed $value
     * @return mixed|void
     */
    public function transform($value)
    {
        $result = [];
        $properties = '';

        if (is_array($value)) {
            $result = $value;

            if (isset($value['properties'])) {
                $result['component'] = $this->transformToHtmlAttributes($result['properties'] ?? []);
                unset($result['properties']);
            }
        }

        return $result;
    }

    /**
     * @param array $collection
     * @return string
     */
    protected function transformToHtmlAttributes(array $collection): string
    {
        $properties = '';

        $iterationCount = 0;
        $maxIterationCount = count($collection);
        foreach ($collection as $itemKey => $itemValue) {

            if ($itemKey == self::ITEMS_PARAMETER) {
                $items = $itemValue;
                // don't convert items collection
                continue;
            }

            if (is_bool($itemValue) ) {
                if ($itemValue === true) {
                    $properties .= sprintf('%s', $itemKey);
                }
            } else {
                $properties .= sprintf('%s="%s"', $itemKey, $itemValue);
            }

            if ($iterationCount < $maxIterationCount) {
                $properties .= ' ';
            }

            ++$iterationCount;
        }

        return $properties;
    }

    /**
     * @inheritdoc
     *
     * @param mixed $value
     * @return mixed|void
     */
    public function reverseTransform($value)
    {
        // do nothing
    }
}