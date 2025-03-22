<?php

declare(strict_types=1);

namespace App\Http\ValueObjects;

/**
 * Class ArrayAble
 *
 * @see https://qiita.com/ymm1x/items/f197ddd327356b1e9088
 */
trait ArrayAble
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $properties = get_object_vars($this);
        return $this->toArrayRecursive($properties);
    }

    /**
     * @param  mixed  $property
     * @return mixed
     */
    private function toArrayRecursive(mixed $property): mixed
    {
        if (is_array($property)) {
            $array = [];
            foreach ($property as $key => $value) {
                $array[$key] = $this->toArrayRecursive($value);
            }
            return $array;
        }

        return $property;
    }
}
