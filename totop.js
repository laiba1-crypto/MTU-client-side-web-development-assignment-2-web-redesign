// jQuery code inside the function is executed only after the DOM has been fully loaded.
jQuery(document).ready(function () { 
    var offset = 200; //"Back to Top" button should become visible.
    // represent the duration of the animation when scrolling to the top
    var duration = 500;
    // event handler for scrolling
    jQuery(window).scroll(function () {
        // If true, it means the user has scrolled down beyond the specified distance(off set)
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            // Fades out the element with the specified duration.
            jQuery('.back-to-top').fadeOut(duration);
        }
    });

    //click event handler to elements with the class "back-to-top".
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault(); //Prevent default behavior of the click event(navigating to the top)
        jQuery('html, body').animate({ scrollTop: 0 }, duration);
        // click event doesn't trigger any additional default behavior.
        return false;
    });
});
