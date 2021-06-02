;(function ($, window, document, undefined) {
    // Main events
    $(document).ready(function () {
        footer();
        mobileOpen();

        //- up button moves
        $(document).scroll(function () {
            let scrolled = window.pageYOffset || document.documentElement.scrollTop,
                progressPart = $(window).scrollTop() / ($(document).height() - $(window).height()),
                progressBar = $('progress'),
                up = $('.up');

            if (scrolled > 100 && $('.up:hidden')) {
                up.fadeIn();
            } else {
                up.fadeOut();
            }

            if ((scrolled + $(window).height() - up.height()) >= $('.footer').offset().top) {
                up.addClass('absolute');
            } else {
                up.removeClass('absolute');
            }

            if (progressBar.length > 0) {
                progressBar.attr('value', progressPart);
            }
        });

        $(document).on('click','.up', function (e) {
            e.preventDefault();
            $('body,html').animate({scrollTop: 0}, 800);
        });
    });

    $(window).on('load', function () {
        footer();
    });

    $(window).on('resize', function () {
        footer();
    });

    $(window).on('scroll', function () {

        var scroll = $(window).scrollTop(),
            pageUp = $('.up'),
            main = $('#main');

        if (scroll >= main.offset().top) {
            pageUp.slideDown();
        } else {
            pageUp.slideUp();
        }
    });

    // Mobile Menu open
    function mobileOpen() {
        $('.mobile-menu__button').on('click', function(e) {
            if (window.innerWidth < 1080) {
                var $drop = $(this).next('.mobile-menu__drop');

                if (!$drop.hasClass('open')) {
                    $drop.addClass('open');

                    $('html').css('overflow', 'hidden');
                    $('body').append('<div id="MobileMask" style="position: fixed; z-index: 55; top: 0; right: 0; bottom: 0; left: 0; background: rgba(0, 0, 0, .5);"></div>');

                    var firstClick = true;

                    $(document).bind('click.MenuDrop', function(e) {
                        if (!firstClick && $(e.target).closest($drop).length == 0) {
                            //$drop.css({'left': ''});
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

        $('.mobile-menu__close').on('click', function() {
            $('.mobile-menu__drop').removeClass('open');
            $('html').css('overflow', '');
            $('#MobileMask').remove();
            $(document).unbind('click.MenuDrop');

            firstClick = false;
        });
    }

    // Footer positions
    function footer () {
        var layout = $('#layout'),
            footer = $('#footer');

        if (footer.length) {
            var footerHeight = footer.outerHeight();

            layout.css('padding-bottom', footerHeight);
            footer.css('margin-top', -footerHeight);
        }
    }
}($, window, document));

