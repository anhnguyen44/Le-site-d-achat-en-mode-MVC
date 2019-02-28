$(document).ready(function () {
    //  EVEN MENU RESPON
    $('html').on('click', function (event) {
        var target = $(event.target);
        var site = $('#site');

        if (target.is('#btn-respon i')) {
            if (!site.hasClass('show-respon-menu')) {
                site.addClass('show-respon-menu');
            } else {
                site.removeClass('show-respon-menu');
            }
        } else {
            $('#container').click(function () {
                if (site.hasClass('show-respon-menu')) {
                    site.removeClass('show-respon-menu');
                    return false;
                }
            });
        }
    });

    //    MENU RESPON
    $('#main-menu-respon li .sub-menu').after('<span class="fa fa-angle-right arrow"></span>');
    $('#main-menu-respon li .arrow').click(function () {
        if ($(this).parent('li').hasClass('open')) {
            $(this).parent('li').removeClass('open');
            $(this).parent('li').find('.sub-menu').slideUp();
        } else {
            $('.sub-menu').slideUp();
            $('#main-menu-respon li').removeClass('open');
            $(this).parent('li').addClass('open');
            $(this).parent('li').find('.sub-menu').slideDown();
        }
    });
        
//    Xử lý AJAX
    $('.num-order').change(function () {
        var num_order = $(this).val();
        $(this).attr({'value':num_order});
        var price = $(this).parent().parent().find('#price_ajax').text();
        var sub_total = $(this).parent().parent().find('#sub_total_ajax').text();
        $(this).parent().parent().find('#sub_total_ajax').addClass("new");
        var total = $('p#total-price span').text();
        var num_cart = $('span#num').text();
//        alert(num_cart);
        
        var data = {num_order: num_order, price: price, sub_total: sub_total, total: total, num_cart: num_cart};
        $.ajax({
            url: 'process.php', //Trang xử lý mặc định trang hiện tại. File xử lý này trên server. Dữ liệu đẩy lên ajax. ajax đẩy lên server xử lý tại 
            //file process.php và tại đây căn cứ vào phương thức chuyển dữ liệu mà làm việc
            method: 'POST', //Post hoặc Get, mặc định là get
            data: data, //Dữ liệu truyền lên server
            dataType: 'json',
            success: function (data) {
                $('.new').text(data.sub_total_new);
                $('.new').removeClass("new");
                $('p#total-price span').text(data.total_new);
                $('span#num').text(data.num_cart_new);
            },
            error: function (xhr, ajaxOptions, thrownError){
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
});