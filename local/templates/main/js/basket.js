$(document).ready(function (){
    $('.basket-product__packaging').each(function (){
        let minus = $(this).find('.basket-product__packaging-minus'),
            plus = $(this).find('.basket-product__packaging-plus'),
            input = $(this).find('.basket-product__packaging-input'),
            id = $(this).attr('data-id');

        plus.click(function (){
            input.val(+input.val()+1);
            let inputVal = input.val();
            let formObj = {
                'PRODUCT_ID':id,
                'COUNT': inputVal,
                'action':'Basket/changeCountProduct',
                'ajaxCallback':'AfterChangeCount'
            }
            var cb;
            if (typeof formObj.ajaxCallback !== "undefined"){
                cb = window.ajaxCallback[formObj.ajaxCallback];
            }else{
                cb = function (container){};
            }
            window.sendAjax(formObj, $(this), cb);
        });
        minus.click(function (){
            if(input.val() > 1){
                input.val(+input.val()-1);
                let inputVal = input.val();
                let formObj = {
                    'PRODUCT_ID':id,
                    'COUNT': inputVal,
                    'action':'Basket/changeCountProduct',
                    'ajaxCallback':'AfterChangeCount'
                }
                var cb;
                if (typeof formObj.ajaxCallback !== "undefined"){
                    cb = window.ajaxCallback[formObj.ajaxCallback];
                }else{
                    cb = function (container){};
                }
                window.sendAjax(formObj, $(this), cb);
            }
        })
        input.on('input',function (){
            if($(this).val() == 0){
                $(this).val(1)
            }
            let formObj = {
                'PRODUCT_ID':id,
                'COUNT': input.val(),
                'action':'Basket/changeCountProduct',
                'ajaxCallback':'AfterChangeCount'
            }
            var cb;
            if (typeof formObj.ajaxCallback !== "undefined"){
                cb = window.ajaxCallback[formObj.ajaxCallback];
            }else{
                cb = function (container){};
            }
            window.sendAjax(formObj, $(this), cb);
        })
    })

    $('.basket__clear').click(function (e){
        e.preventDefault();
        let formObj = {
            'action':'Basket/clearBasket',
            'ajaxCallback':'AfterClearBasket'
        }
        var cb;
        if (typeof formObj.ajaxCallback !== "undefined"){
            cb = window.ajaxCallback[formObj.ajaxCallback];
        }else{
            cb = function (container){};
        }
        window.sendAjax(formObj, $(this), cb);
    })

    $('.basket-product__close').each(function (){
        $(this).click(function (e){
            e.preventDefault();
            let id = $(this).data('id');
            let formObj = {
                'PRODUCT_ID':id,
                'action':'Basket/deleteProduct',
                'ajaxCallback':'AfterDeleteProduct'
            }
            var cb;
            if (typeof formObj.ajaxCallback !== "undefined"){
                cb = window.ajaxCallback[formObj.ajaxCallback];
            }else{
                cb = function (container){};
            }
            window.sendAjax(formObj, $(this), cb);
        })
    })
    Number.prototype.toDivide = function() {
        var int = String(Math.trunc(this));
        if(int.length <= 3) return int;
        var space = 0;
        var number = '';

        for(var i = int.length - 1; i >= 0; i--) {
            if(space == 3) {
                number = ' ' + number;
                space = 0;
            }
            number = int.charAt(i) + number;
            space++;
        }

        return number;
    }
})