<?php

namespace SprykerEco\Yves\FactFinderWebComponents\Form;

use \Symfony\Component\Form\DataTransformerInterface;

class WebComponentConfigToStringTransformer implements DataTransformerInterface
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
        $result = '';

        if (is_array($value)) {
            $iterationCount = 0;
            $maxIterationCount = count($value);
            foreach ($value as $itemKey => $itemValue) {
                if ($itemKey == self::ITEMS_PARAMETER) {
                    // don't convert items collection
                    continue;
                }

                if (is_bool($itemValue) ) {
                    if ($itemValue === true) {
                        $result .= sprintf('%s', $itemKey);
                    }
                } else {
                    $result .= sprintf('%s="%s"', $itemKey, $itemValue);
                }

                ++$iterationCount;

                if ($iterationCount != $maxIterationCount) {
                    $result .= ' ';
                }
            }
        }

        return $result;
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