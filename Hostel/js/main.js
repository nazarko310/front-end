;
(function ($, window, document, undefined) {
    $(document).ready(function () {
        mobileOpen();
        removefunction();
        changeadults();
        // Mobile Menu open
        function mobileOpen() {
            $('.mobile-menu__button').on('click', function (e) {
                if (window.innerWidth < 1080) {
                    var $drop = $(this).next('.mobile-menu__drop');

                    if (!$drop.hasClass('open')) {
                        $drop.addClass('open');

                        $('html').css('overflow', 'hidden');
                        $('body').append('<div id="MobileMask" style="position: fixed; z-index: 55; top: 0; right: 0; bottom: 0; left: 0; background: rgba(0, 0, 0, .5);"></div>');

                        var firstClick = true;

                        $(document).bind('click.MenuDrop', function (e) {
                            if (!firstClick && $(e.target).closest($drop).length == 0) {
                                $drop.removeClass('open');

                                $('html').css('overflow', '');
                                $('#MobileMask').remove();
                                $(document).unbind('click.MenuDrop');
                            }
                            firstClick = false;
                        });
                    }
                    e.preventDefault();
                }
            });

            $('.mobile-menu__close').on('click', function () {
                $('.mobile-menu__drop').removeClass('open');
                $('html').css('overflow', '');
                $('#MobileMask').remove();
                $(document).unbind('click.MenuDrop');

                firstClick = false;
            });
            $('.nav__link').on('click', function () {
                $('.mobile-menu__drop').removeClass('open');
                $('html').css('overflow', '');
                $('#MobileMask').remove();
                $(document).unbind('click.MenuDrop');

                firstClick = false;
            });
        }

        function removefunction() {
            $('#datetimepicker').on('click', function (e) {
                var $drop = $(this).next('.check-in_text');
                if (!$drop.hasClass('open')) {
                    $drop.addClass('open');
                    $('.check-in_text').css('visibility', 'hidden');
                    $('.check-in_text').css('order', '1');
                    $('.check-in_img').css('order', '3');
                    var firstClick = true;
                }
                e.preventDefault();
            });

            $('#datetimepicker1').on('click', function (e) {
                var $drop = $(this).next('.check-out_text');
                if (!$drop.hasClass('open')) {
                    $drop.addClass('open');
                    $('.check-out_text').css('visibility', 'hidden');
                    $('.check-out_text').css('order', '1');
                    $('.check-out_img').css('order', '3');
                    var firstClick = true;
                }
                e.preventDefault();
            });
        }

        function changeadults() {
            $('.book__select-head').on('click', function (e) {
                var $drop = $(this).next('.book__select-list');
                if (!$drop.hasClass('open')) {
                    $drop.addClass('open');
                    $('.book__select-list').css('display', 'block');
                }
            });
        }
    });



    window.onload = function () {
        $(".hotel__intro").addClass('animate__animated animate__fadeInUp');
        $('.hotel__title').addClass('animate__animated animate__zoomIn');
    }
    $(window).scroll(function () {
        height = ($('.header').height() + $('.hotel__title').height()) - 100;
        if ($(this).scrollTop() > height) {
            $(".hotel__about").css('visibility', 'visible');
            $(".hotel__about").addClass('animate__animated animate__fadeInRight');
        }
    });
    $(window).scroll(function () {
        height = ($('.header').height() + $('.hotel__title').height() + $('.hotel__intro').height()) - 100;
        if ($(this).scrollTop() > height) {
            $(".hotel__room").css('visibility', 'visible');
            $(".hotel__room").addClass('animate__animated animate__fadeInUp');

        }
    });
    $(window).scroll(function () {
        height = ($('.header').height() + $('.hotel__title').height() + $('.hotel__intro').height() + $('.hotel__about').height())-100;
        if ($(this).scrollTop() > height) {
            $(".hotel__services h2").css('visibility', 'visible');
            $(".hotel__services h2").addClass('animate__animated animate__fadeInRight');
            $(".hotel__services-innerElements").css('visibility', 'visible');
            $(".hotel__services-innerElements").addClass('animate__animated animate__fadeInUp');

        }
    });
    $(window).scroll(function () {
        height = ($('.header').height() + $('.hotel__title').height() + $('.hotel__intro').height() + $('.hotel__about').height() + $('.hotel__room').height())-100;
        if ($(this).scrollTop() > height) {
            $(".hotel__entertainment h2").css('visibility', 'visible');
            $(".hotel__entertainment h2").addClass('animate__animated animate__fadeInRight');
            $(".hotel__entertainment-innerElements").css('visibility', 'visible');
            $(".hotel__entertainment-innerElements").addClass('animate__animated animate__fadeInUp');

        }
    });
    $(window).scroll(function () {
        height = ($('.header').height() + $('.hotel__title').height() + $('.hotel__intro').height() + $('.hotel__about').height() + $('.hotel__room').height() + $('.hotel__services').height())-100;
        if ($(this).scrollTop() > height) {
            $(".footer__contacts h2").css('visibility', 'visible');
            $(".footer__contacts h2").addClass('animate__animated animate__fadeInRight');
            $(".footer__contacts-text").css('visibility', 'visible');
            $(".footer__contacts-text").addClass('animate__animated animate__fadeInRight');
            $(".footer__contacts-form").css('visibility', 'visible');
            $(".footer__contacts-form").addClass('animate__animated animate__pulse');

        }
    });

    var selectSingle = document.querySelector('.book__select');
    var selectSingle_title = selectSingle.querySelector('.book__select-title');
    var selectSingle_labels = selectSingle.querySelectorAll('.book__select-label');

    // Toggle menu
    selectSingle_title.addEventListener('click', () => {
        if ('active' === selectSingle.getAttribute('data-state')) {
            selectSingle.setAttribute('data-state', '');
        } else {
            selectSingle.setAttribute('data-state', 'active');
        }
    });

    // Close when click to option
    for (let i = 0; i < selectSingle_labels.length; i++) {
        selectSingle_labels[i].addEventListener('click', (evt) => {
            selectSingle_title.textContent = evt.target.textContent;
            selectSingle.setAttribute('data-state', '');
        });
    }

    var selectKids = document.querySelector('.book__kids');
    var selectKids_title = selectKids.querySelector('.book__kids-title');
    var selectKids_labels = selectKids.querySelectorAll('.book__kids-label');

    // Toggle menu
    selectKids_title.addEventListener('click', () => {
        if ('active' === selectKids.getAttribute('data-state')) {
            selectKids.setAttribute('data-state', '');
        } else {
            selectKids.setAttribute('data-state', 'active');
        }
    });

    // Close when click to option
    for (let i = 0; i < selectKids_labels.length; i++) {
        selectKids_labels[i].addEventListener('click', (evt) => {
            selectKids_title.textContent = evt.target.textContent;
            selectKids.setAttribute('data-state', '');
        });
    }


}($, window, document));