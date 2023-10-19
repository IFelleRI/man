<?php
namespace Helpers;
class TextFormator
{
    /**
     * @param $value
     *
     * @return string
     */
    public static function priceFormat($value): string
    {
        return ($value > 0 ? number_format($value, 0, ' ', ' ') : 0);
    }
}