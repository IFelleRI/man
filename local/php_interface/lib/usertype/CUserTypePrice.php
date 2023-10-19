<?php
namespace lib\usertype;
class CUserTypePrice
{
    public static function GetUserTypeDescription()
    {
        return array(
            'USER_TYPE_ID' => 'user_price',
            'USER_TYPE' => 'PRICE',
            'CLASS_NAME' => __CLASS__,
            'DESCRIPTION' => 'Таблица цен',
            'PROPERTY_TYPE' => 'S',
            'ConvertToDB' => [__CLASS__, 'ConvertToDB'],
            'ConvertFromDB' => [__CLASS__, 'ConvertFromDB'],
            'GetPropertyFieldHtml' => [__CLASS__, 'GetPropertyFieldHtml'],
        );
    }

    public static function ConvertToDB($arProperty, $value)
    {
        if(!empty($value['VALUE'])){
            AddMessage2Log($value['VALUE']);
            if(
                !empty($value['VALUE']['tablet-count']) &&
                !empty($value['VALUE']['tablet-price']) &&
                !empty($value['VALUE']['tablet-one'])
            ){
                try {
                    $value['VALUE'] = base64_encode(serialize($value['VALUE']));
                } catch(Bitrix\Main\ObjectException $exception) {
                    echo $exception->getMessage();
                }
            }else{
                $value['VALUE'] = '';
            }
        }
        return $value;
    }

    public static function ConvertFromDB($arProperty, $value, $format = '')
    {
        if (!empty($value['VALUE'])){
            try {
                $value['VALUE'] = base64_decode($value['VALUE']);
            } catch(Bitrix\Main\ObjectException $exception) {
                echo $exception->getMessage();
            }
        }
        return $value;
    }

    public static function GetPropertyFieldHtml($arProperty, $value, $arHtmlControl)
    {

        $name = $arHtmlControl['VALUE'];
        $arValue = unserialize(htmlspecialcharsback($value['VALUE']), [stdClass::class]);
        $html = '
        <div class="row-price">
            <div class="row-price_input" style="display: flex;margin-bottom: 10px;">
                  <div class="price_name" style="margin-right: 20px;display: flex;flex-direction: column;">
                    <span>Кол-во таблеток</span>
                    <input type="text" name="'.$name.'[tablet-count]" value="'.$arValue['tablet-count'].'">
                  </div>
                  <div class="price_val" style="margin-right: 20px;display: flex;flex-direction: column;">
                    <span>Цена комплекта</span>
                    <input type="text" name="'.$name.'[tablet-price]" value="'.$arValue['tablet-price'].'">
                  </div>
                  <div class="price_val" style="margin-right: 20px;display: flex;flex-direction: column;">
                    <span>Цена за одну таблетку</span>
                    <input type="text" name="'.$name.'[tablet-one]" value="'.$arValue['tablet-one'].'">
                  </div>
                  <div class="price_val" style="display: flex;flex-direction: column;">
                    <span>Экономия</span>
                    <input type="text" name="'.$name.'[tablet-sale]" value="'.$arValue['tablet-sale'].'">
                  </div>
            </div>
        </div>';
        return $html;
    }
}