$(document).ready(function (){
    $('.pills__actions').each(function (){
        let formObj = {
            'NAME':$(this).attr('data-name'),
            'PRICE':$(this).attr('data-price'),
            'PRICE_PILLS':$(this).attr('data-one'),
            'PACK_PILLS':$(this).attr('data-pack'),
            'PRODUCT_ID':$(this).attr('data-id'),
            'DOSAGE': $(this).attr('data-mg'),
            'COUNT': '1',
            'action':'Basket/addBasket',
            'ajaxCallback':'AfterAddBasket'
        }
        $(this).find('.pills__action__basket-link').click(function (e){
            e.preventDefault();
            let langId = '';
            if($(this).data('link') !== 'en'){
                langId = $(this).data('link');
            }
            $(this).addClass('active')
            var cb;
            if (typeof formObj.ajaxCallback !== "undefined"){
                cb = window.ajaxCallback[formObj.ajaxCallback];
            }else{
                cb = function (container){};
            }
            window.sendAjax(formObj, $(this), cb);
            setTimeout(function (){
                document.location.href = 'https://manpharma.webpax.ru/'+langId+'/basket/'
            },200)
        })
    })
    $('.pills__action__basket').click(function (){
        let price = $(this).parent().data('price'),
            pill = $(this).parent().data('one'),
            pack = $(this).parent().data('pack'),
            id = $(this).parent().data('id');
        $('.basket-product__full-price span').text(price)
        $('.basket-product__pill-price span').text(pill)
        $('.basket-product__pills-value span').text(pack)
        $('.input-product_id').val(id+'-'+pack)
        $('.input-product_price').val(price)
        $('.input-product_pills').val(pill)
        $('.input-product_pills__pack').val(pack)
    })

    let minus = $('.basket-product__data').find('.basket-product__packaging-minus'),
        plus = $('.basket-product__data').find('.basket-product__packaging-plus'),
        input = $('.basket-product__data').find('.basket-product__packaging-input'),
        id = $('.basket-product__data').attr('data-id');

    plus.click(function (){
        input.val(+input.val()+1);
    });
    minus.click(function (){
        if(input.val() > 1){
            input.val(+input.val()-1);
        }
    })
    input.on('input',function (){
        if($(this).val() == 0){
            $(this).val(1)
        }
    })
    $('.thank-modal__close').click(function (){
        $('.thank-modal').removeClass('open');
    })
    $('.modal-bg').click(function (){
        $('.thank-modal').removeClass('open')
    })
})