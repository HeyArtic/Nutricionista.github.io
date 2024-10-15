$(document).ready(function () {
    $('#mobile_btn').on('click', function () {
        $('#mobile_menu').toggleClass('active');
        $('#mobile_btn').find('i').toggleClass('fa-x');
    });

    const sections = $('section');
    const navItems = $('.nav-item');



    navItems.removeClass('active');
    $(navItems[activeSectionIndex]).addClass('active');
});

ScrollReveal().reveal('#cta', {
    origin: 'left',
    duration: 2000,
    distance: '20%'
});

ScrollReveal().reveal('.dish', {
    origin: 'left',
    duration: 2000,
    distance: '20%'
});

ScrollReveal().reveal('.containerr', {
    origin: 'left',
    duration: 1000,
    distance: '20%'
})

ScrollReveal().reveal('.feedback', {
    origin: 'right',
    duration: 1000,
    distance: '20%'
})