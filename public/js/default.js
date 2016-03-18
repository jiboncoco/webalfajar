// Scroll page with easing effect
    $('.navbar ul li a[href*=#]').bind('click', function(e) {
        e.preventDefault();
        target = this.hash;
        $.scrollTo(target, 1500, {
            easing: 'easeOutCubic'
        });

        $(".btn-navbar").click();
    });

        // Scroll page with easing effect
    $('#footerMenu a[href*=#]').bind('click', function(e) {
        e.preventDefault();
        target = this.hash;
        $.scrollTo(target, 1500, {
            easing: 'easeOutCubic'
        });

        $(".btn-navbar").click();
    });



    // Show/Hide Sticky "Go top" button
    $(window).scroll(function(){
        if($(this).scrollTop()>200){
            $(".go-top").fadeIn(200);
        }
        else{
            $(".go-top").fadeOut(200);  
        }
    });
    
    // Scroll Page to Top when clicked on "go top" button
    $(".brand, .go-top").click(function(event){
        event.preventDefault();

        $.scrollTo('#carouselSection', 1500, {
            easing: 'easeOutCubic'
        });
    });
    


$(function(){   

    


});