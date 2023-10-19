<?php

namespace Laco\AjaxRequest;

class Basket extends \CAjaxRequest
{


    public function addBasket(){
        if(!$_SESSION['basketItems']){
            $_SESSION['basketItems'] = [];
        }else{
            $basketItems = $_SESSION['basketItems'];
        }
        $key = $_POST['PRODUCT_ID'].'-'.$_POST['PACK_PILLS'];
        $basketItems[$key] = $_POST;
        if(key_exists($key,$_SESSION['basketItems'])){
            $_SESSION['basketItems'][$key]['COUNT'] = $_SESSION['basketItems'][$key]['COUNT'] + $_POST['COUNT'];
            return[
                'status'=>'success',
                'COUNT'=>$this->getAllCount(),
            ];
        }else{
            $_SESSION['basketItems'] = $basketItems;
            return[
                'status'=>'success',
                'COUNT'=>$this->getAllCount(),
            ];
        }
    }

    public function changeCountProduct(){
        if(isset($_SESSION['basketItems'][$_POST['PRODUCT_ID']])){
            $_SESSION['basketItems'][$_POST['PRODUCT_ID']]['COUNT'] = $_POST['COUNT'];
            $price = \Helpers\TextFormator::priceFormat($_SESSION['basketItems'][$_POST['PRODUCT_ID']]['COUNT'] * $_SESSION['basketItems'][$_POST['PRODUCT_ID']]['PRICE']);
            return[
                'status'=>'success',
                'ID'=>$_POST['PRODUCT_ID'],
                'PRICE_ITEM'=>$price,
                'COUNT'=>$this->getAllCount(),
                'SUM'=>$this->getAllSum()
            ];
        }else{
            return[
                'status'=>'error',
            ];
        }
    }

    public static function getAllCount(){
        if($_SESSION['basketItems'] && !empty($_SESSION['basketItems'])){
            $count = 0;
            foreach ($_SESSION['basketItems'] as $item){
                $count += $item['COUNT'];
            }
            return $count;
        }
    }

    public static function getAllSum(){
        if($_SESSION['basketItems'] && !empty($_SESSION['basketItems'])){
            $sum = 0;
            foreach ($_SESSION['basketItems'] as $item){
                $sum += $item['PRICE'] * $item['COUNT'];
            }
            return \Helpers\TextFormator::priceFormat($sum);
        }
    }
    public function deleteProduct(){
        if($_SESSION['basketItems'] && !empty($_SESSION['basketItems'])){
            if(key_exists($_POST['PRODUCT_ID'],$_SESSION['basketItems'])){
                unset($_SESSION['basketItems'][$_POST['PRODUCT_ID']]);
                return[
                    'status'=>'success',
                    'COUNT'=>$this->getAllCount(),
                    'SUM'=>$this->getAllSum()
                ];
            }
        }
    }
    public function clearBasket(){
        $_SESSION['basketItems'] = [];
        return[
            'status'=>'success',
            'COUNT'=>$this->getAllCount(),
        ];
    }
}