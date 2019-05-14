$(function(){
    //Mobile Menu
    $('.mobile_action').click(function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            $('.main_header_nav').animate({'left': '0px'}, 500);
        }else{
            $('.mobile_action').click(function(){
                $(this).removeClass('active');
                $('.main_header_nav').animate({'left': '-100%'}, 500);
            });
        }
    });
    
    //Navegação
    $('.main_header_nav_item a').click(function(){
        $('.main_header_nav_item a').removeClass('active');
        $(this).addClass('active');
        var goto = $(this).attr("href");
        var going = $(goto).position().top;
        $('html, body').animate({scrollTop:going},1000);
        return false;
    });
    
    $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
    });
    
    
    
    // //Back to Top
    // $(document).ready(function() {
    //     $('#backTop').backTop({
    //         'position' : 400,
    //         'speed' : 800,
    //         'color' : 'red'
    //     });
    // });
    
    //Nice Scroll
    $(document).ready(function() {
        $("html").niceScroll({
            cursorcolor:"rgba(180, 202, 66, 0.8)",
            cursorwidth:"5px",
            cursorborder:"0",
            cursorborderradius:"0",
            cursorminheight:"150",
            horizrailenabled:"false",
            zindex: "9999"
        });
    });

});

const menuItems = document.querySelectorAll('.main_nav a[href^="#"]');

menuItems.forEach(item => {
    item.addEventListener('click', scrollId);
})

function scrollId(event) {
    event.preventDefault();
    const element = event.target;
    const id = element.getAttribute('href');
    const to = document.querySelector(id).offsetTop;

    window.scroll({
        top: to - 88,
        behavior: "smooth",
    });
}