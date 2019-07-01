<?php

require_once './vendor/autoload.php';

class ArrayFlattener
{
    public function flatten(array $input): array
    {
        $result = [];

        foreach ($input as $value) {
            if (is_array($value)) {
                $result = array_merge($result, $this->flatten($value));
            } else {
                $result[] = $value;
            }
        }

        return $result;
    }
}