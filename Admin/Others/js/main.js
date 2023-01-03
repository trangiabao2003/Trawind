(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
        return false;
    });


    // Progress Bar
    $('.pg-bar').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});

    // Cache the list, and the items
    const list = document.querySelector('.navbar-nav');
    const links = list.querySelectorAll('.nav-link');

    // Add one listener to the list element
    list.addEventListener('click', handleClick);

    // If the clicked element is a link remove all
    // the active classes from the other links, and then
    // add the active class to the link that was clicked on
    function handleClick(e) {
    if (e.target.matches('.nav-link')) {
        links.forEach(link => link.classList.remove('active'));
        e.target.classList.add('active');
    }
    }

    
})(jQuery);

