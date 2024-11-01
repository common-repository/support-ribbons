(function($) {
    $('.rclick').bind('click', function() {
        $('#ribbonid').val($(this).attr('id'));
        $('.rclick').removeClass('selected');
        $(this).addClass('selected');
        return false;
    });
})( jQuery );