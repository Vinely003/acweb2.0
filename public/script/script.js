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

    $('.searchBar').on('submit', function (e) {
        e.preventDefault();

        const search = $('.search').val().toLowerCase();

        $('.homeBody').hide();
        $('.acBody').hide();

        $('.acBody').each(function () {
            const ac_name = $(this).data('acname').toLowerCase();
            if (ac_name.includes(search)) {
                $(this).show();
            }
        });
    });

});