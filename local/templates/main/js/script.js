$(document).ready(function (){
    const banner = new Swiper('.swiper', {
        pagination: {
            el: '.swiper-pagination',
        },

        navigation: {
            nextEl: '.banner__next',
            prevEl: '.banner__prev',
        },
    });
    $('form[action="#"]').each(function (){
        $(this).submit(function (e){
            e.preventDefault();
            let formData = new FormData($(this)[0]);
            let cb;
            if (typeof formData.get('ajaxCallback') !== "undefined"){
                cb = window.ajaxCallback[formData.get('ajaxCallback')];
            }else{
                cb = function (container){};
            }
            window.sendAjax(formData, $(this), cb);
        })
    })

    document.querySelectorAll('.header__choice-language-button').forEach(item => {
        item.onclick = function (){
            item.classList.toggle('active');
        }
    });
});