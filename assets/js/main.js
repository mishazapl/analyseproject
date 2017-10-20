$(function () {
    $('.result-item-more').on('click', function () {
        var $full = $(this).parent().parent().parent().parent().find('.result-item-full:not(:animated)');
        var $icon = $(this).children('i');

        if ($full.is(':visible')) {
            $icon.removeClass('result-item-more-icon-rotate');
            $full.slideUp(500);
        } else {
            $icon.addClass('result-item-more-icon-rotate');
            $full.slideDown(500);
        }
    });
});