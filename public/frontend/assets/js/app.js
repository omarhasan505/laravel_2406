$(function () {

    let searchIcon = document.querySelector('.search_icon');
    let searchBody = document.querySelector('#search');
    let searchBodyCrossButton = document.querySelector('.search_body_cross_button');
    let ancore = document.querySelectorAll('#mobile_footer .row div a');


    searchIcon.addEventListener('click', function () {
        searchBody.classList.add('active');
    });

    searchBodyCrossButton.addEventListener('click', function () {
        searchBody.classList.remove('active');
    });

    ancore.forEach(items => {
        items.addEventListener('click', function () {
            ancore.forEach(el =>
                el.classList.remove('active'))

            items.classList.toggle('active');

            if (this.classList.contains('search_icon')) {
                searchBody.classList.add('active');
            } else {
                searchBody.classList.remove('active');
            }
        })
    })
    //* banner par start

    $('.sliders').slick({
        dots: true,
        speed: 500,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: true,
        nextArrow: `<span class="next"><iconify-icon icon="ooui:arrow-next-ltr" width="20" height="20"></iconify-icon></span>`,
        prevArrow: `<span class="prev"><iconify-icon icon="ooui:arrow-next-rtl" width="20" height="20"></iconify-icon></span>`,
        autoplay: true,
        autoplaySpeed: 2500,
    });

    //* banner part end

    //*featured product
    $('.product_slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 3,
        arrows: true,
        nextArrow: `<span class="next"><iconify-icon icon="ooui:arrow-next-ltr" width="20" height="20"></iconify-icon></span>`,
        prevArrow: `<span class="prev"><iconify-icon icon="ooui:arrow-next-rtl" width="20" height="20"></iconify-icon></span>`,
        //* responsive part
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    arrows: false,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

    });

    //*all products part
    $('.category-button').categoryFilter();


    //* tooltip 
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))

    //* product details

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        vertical: true,
        arrows: true,
        nextArrow: `<span class="next"><iconify-icon icon="fe:arrow-up" width="24" height="24"></iconify-icon></span>`,
        prevArrow: `<span class="prev"><iconify-icon icon="fe:arrow-down" width="24" height="24"></iconify-icon></span>`,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false,
                    vertical: false,

                }
            }


            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    //* magnifying 
    $(function () {
        $(".example").imagezoomsl();
    });

    //* purchase product

    let disPrice = $('.discounted_price').text().trim();
    let convertNum = parseFloat(disPrice);

    $('.increment').on('click', function () {
        let result = parseInt($('.product_counter').val());
        if (result < 20) {
            result++;
            $('.product_counter').val(result);

            let total = convertNum * result;
            $('.discounted_price').text(total.toFixed(2));

            $('.decrement').css({
                'cursor': 'pointer'
            });

        } else {
            $('.increment').css({
                'cursor': 'not-allowed'
            });

        }
    })
    $('.decrement').on('click', function () {
        let decResult = parseInt($('.product_counter').val());
        if (decResult > 1) {
            decResult--;
            $('.product_counter').val(decResult);

            $('.discounted_price').text(decResult * convertNum);

            $('.increment').css({
                'cursor': 'pointer'
            });


        } else {
            $('.decrement').css({
                'cursor': 'not-allowed'
            });

        }
    })

    //* countdown pert

    $('.hq-countdown').hqCountdownTimer({
        endMessage: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"/></svg> Countdown Completed!',
        onEnd: function () {
            console.log('Countdown finished!');
        }
    });

    //* venovox video player

    // jQuery Version
    $('.venobox').venobox({
        // settings here
    });

   




})
