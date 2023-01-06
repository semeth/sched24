jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function () {
        $(".sidebar-submenu").slideUp(200);
        if ($(this).parent().hasClass("active")) {
            $(".sidebar-dropdown").removeClass("active");
            $(this).parent().removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this).next(".sidebar-submenu").slideDown(200);
            $(this).parent().addClass("active");
        }
    });

    $("#close-sidebar").click(function () {
        $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function () {
        $(".page-wrapper").addClass("toggled");
    });

});


if (window.location.pathname == '/templates/create') {
    $('.placeholder-item').on('click', function () {
        var currentContent = $('.template-preview').html();
        var type = $(this).attr('data-placeholder');
        var template = $('#placeholder-' + type).html();
        $('.template-preview').html(currentContent + template);

        $('.placeholder').contextmenu(function (e) {
            e.preventDefault();
            $(this).remove();
            $('.components-placeholder').html('');
        });

        $('.placeholder').on('click', function (e) {
            var placeholder = $(this).attr('placeholder');
            $('.components-placeholder').html('');

            switch (placeholder) {
                case 'banner':
                    fetch('http://localhost:8010/api/getAllBanners')
                        .then(result => { return result.json() })
                        .then(data => {
                            data.map(item => {
                                $('.components-placeholder').append(`
                                <div class="banner" style="background-image: url(http://localhost:8010/assets/resources/banners/${item['banner_path']})"></div>
                            `);
                            });
                        });
                    break;
                case 'combo':
                    fetch('http://localhost:8010/api/getAllArticles')
                        .then(result => { return result.json() })
                        .then(data => {
                            data.map(item => {
                                $('.components-placeholder').append(`
                                <div class="combo">
                                    <button class="btn btn-primary btn-sm">+</button>
                                    <img src="http://localhost:8010/assets/resources/article_thumbs/${item['article_thumb']}">
                                    <a href="${item['article_link']}">${item['article_title']}</a>
                                </div>
                        `);
                            })
                        });
                    break;
                case 'custom-text':
                    $('.components-placeholder').append(`
                        <div class="custom-text-input">
                            <div class="d-block mb-1"><button class="mr-1" data-type="bold">B</button><button class="mr-1" data-type="under">U</button><button data-type="italic">I</button></div>
                            <div><input type="text" class="d-block" id="custom-text-input"></div>
                        </div>
                    `);
                    $('input#custom-text-input').on('keyup', function () {
                        $('.placeholder.placeholder-custom-text.active').text($(this).val());
                    });
                    $('.custom-text-input button').on('click', function(){
                        var type = $(this).attr('data-type');
                        if($('[data-type="' + type + '"]').hasClass('active')){
                            $('[data-type="' + type + '"]').removeClass('active');
                        }else{
                            $('[data-type="' + type + '"]').addClass('active');
                        }
                    });
                default: break;
            }
            $('.placeholder').removeClass('active');
            $(this).addClass('active');
        });
    });


}