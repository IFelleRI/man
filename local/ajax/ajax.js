$(document).ready(function (){
    window.ajaxCallback = [];
    var sendAjax = window.sendAjax = function (data, container, cb)
    {
        let ajaxData;
        let buttonSubmit = '';
        if(container[0].querySelector('input[type="submit"]')){
            buttonSubmit = container[0].querySelector('input[type="submit"]');
        }
        if (typeof data === 'object' && data.action !== undefined) {
            ajaxData = new FormData();
            $.each(data, function (index, value)
            {
                ajaxData.append(index, value);
            });
        }
        else
        {
            ajaxData = data;
        }
        if(buttonSubmit !== ''){
            buttonSubmit.classList.add('active')
        }
        $.ajax({
            type: "POST", url: "/local/ajax/",
            data: ajaxData, dataType: "json",
            cache: false, contentType: false, processData: false,
            success: function (data)
            {
                if (typeof cb === 'function'){
                    cb(container, data);
                }
                if(buttonSubmit !== ''){
                    buttonSubmit.classList.remove('active')
                }
            }
        });
    };

    window.ajaxCallback.AfterChangeCount = function (container, data)
    {
        if(data.status === 'success') {
            $('.basket__result-element__count span').text(data.COUNT)
            $('.basket__result-element__sum span').text(data.SUM)
            $(`.basket__product[data-id="${data.ID}"]`).find('.basket-product__full-price span').text(data.PRICE_ITEM)
            changeCountHeder(data.COUNT);
        }
        else
        {
            console.log(data.message)
        }
    };

    window.ajaxCallback.AfterClearBasket = function (container, data)
    {
        if(data.status === 'success') {
            location.reload()
        }
        else
        {
            console.log(data.message)
        }
    };

    window.ajaxCallback.AfterDeleteProduct = function (container, data)
    {
        if(data.status === 'success') {
            $(`.basket__product[data-id="${data.INPUT.PRODUCT_ID}"]`).remove()
            $('.basket__result-element__count span').text(data.COUNT)
            $('.basket__result-element__sum span').text(data.SUM)
            changeCountHeder(data.COUNT);
        }
        else
        {
            console.log(data.message)
        }
    };

    window.ajaxCallback.AfterAddBasket = function (container, data)
    {
        if(data.status === 'success') {
            console.log(data)
            if(data.INPUT.callback !== undefined && data.INPUT.callback !== ''){
                $(`.${data.INPUT.callback}`).addClass('open');
                $('#order-modal').removeClass('open')
            }
            changeCountHeder(data.COUNT);
        }
        else
        {
            console.log(data.message)
        }
    };

    function changeCountHeder(count = 0){
        $(`.header__basket-index`).text(count)
    }
})