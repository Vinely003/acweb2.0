$(document).ready(function () {
    $('.acBody').hide();

    $('.acLink').on('click', function (e) {
        e.preventDefault();

        const acLinkId = $(this).data('acid');
        const acBodyId = $('.acBody[data-acid="' + acLinkId + '"]').data('acid');

        $('.homeBody').hide();
        $('.acBody').hide();

        if (acLinkId == acBodyId) {
            $('.acBody[data-acid="' + acLinkId + '"]').show();
        }
    });
});