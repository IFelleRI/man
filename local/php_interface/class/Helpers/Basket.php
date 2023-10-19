<?php
namespace Helpers;


class Basket
{
    public static function sortItems($res): array
    {
        if(!empty($res)){
            usort($res, [Basket::class, "cmp"]);
            return $res;
        }else{
            return [];
        }

    }
    public static function cmp($a, $b): int
    {
        if ($a['PACK_PILLS'] == $b['PACK_PILLS']) {
            return 0;
        }
        return ($a['PACK_PILLS'] < $b['PACK_PILLS']) ? -1 : 1;
    }

    public static function countProduct(){
        return (!empty($_SESSION['basketItems'])) ? self::getCount() : 0;
    }

    public static function getSum(): string
    {
        if(!empty($_SESSION['basketItems'])){
            $sum = 0;
            foreach ($_SESSION['basketItems'] as $item){
                $sum += $item['PRICE'] * $item['COUNT'];
            }
            return \Helpers\TextFormator::priceFormat($sum);
        }
        return false;
    }

    public static function getCount(){
        $count = 0;
        foreach ($_SESSION['basketItems'] as $item){
            $count += $item['COUNT'];
        }
        return $count;
    }
}