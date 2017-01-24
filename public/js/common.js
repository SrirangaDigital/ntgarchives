$(document).ready(function() {

    var isWider = $( '.wider' );
    isWider.next( '.container' ).addClass( 'push-down' );

    if(isWider.length) {
        $( window ).scroll(function() {

            var tp = $( 'body' ).scrollTop();

            if(tp > 50) {

                $( '.navbar' ).removeClass( 'wider') ;
            }
            else if(tp < 50) {
        
                $( '.navbar' ).addClass( 'wider') ;
            }
        }); 
    }
    
    var hloc = window.location.href;
    if(hloc.match('#')){

        var jumpLoc = $( '#' + hloc.split("#")[1] ).offset().top - 105;

        $("html, body").animate({scrollTop: jumpLoc}, 1000);
    }

    $( '.navbar-nav li a').on('click', function(event){

        // event.preventDefault();

        var jumpLoc = $( '#' + $( this ).attr( "href" ).split('#')[1] ).offset().top - 105;

        $("html, body").animate({scrollTop: jumpLoc}, 1000);
    });

    $(".TOCtoggle").click(function(){

        var divID = "#toc-" + $(this).attr('data-name'); 
        $(divID).slideToggle(1, function(){

            buildMasonry();
           
        });
    });  


    // $( '.email-submit' ).on('click', function(event){

    //     event.preventDefault();
    //     alert('This facility will be made available shortly. Till then please write to us as heritage@iitm.ac.in');
    // });
});


// Masonry layout

jQuery(window).load(function () {



    // Takes the gutter width from the bottom margin of .post

    var gutter = parseInt(jQuery('.post').css('marginBottom'));
    var container = jQuery('#posts');



    // Creates an instance of Masonry on #posts

    container.masonry({
        gutter: gutter,
        itemSelector: '.post',
        columnWidth: '.post'
    });
    
    // This code fires every time a user resizes the screen and only affects .post elements
    // whose parent class isn't .container. Triggers resize first so nothing looks weird.
    
    jQuery(window).bind('resize', buildMasonry()).trigger('resize');

  var vieweroptions = {
        // inline: true,
        url: 'data-original',
        ready:  function (e) {
          console.log(e.type);
        },
        show:  function (e) {
          console.log(e.type);
        },
        shown:  function (e) {
          console.log(e.type);
        },
        hide:  function (e) {
          console.log(e.type);
        },
        hidden:  function (e) {
          console.log(e.type);
        },
        view:  function (e) {
          console.log(e.type, e.detail.index);
        },
        viewed:  function (e) {
          console.log(e.type, e.detail.index);
          // this.viewer.zoomTo(1).rotateTo(180);
        }
      };

    var viewer = new Viewer(document.getElementById('viewletterimages'),vieweroptions);

});

function buildMasonry(){

    var gutter = parseInt(jQuery('.post').css('marginBottom'));
    var container = jQuery('#posts');


    // Creates an instance of Masonry on #posts

    container.masonry({
        gutter: gutter,
        itemSelector: '.post',
        columnWidth: '.post'
    });

    if (!jQuery('#posts').parent().hasClass('container')) {
    
        // Resets all widths to 'auto' to sterilize calculations
        
        post_width = jQuery('.post').width() + gutter;
        jQuery('#posts, body > #grid').css('width', 'auto');
        
        // Calculates how many .post elements will actually fit per row. Could this code be cleaner?
        
        posts_per_row = jQuery('#posts').innerWidth() / post_width;

        floor_posts_width = (Math.floor(posts_per_row) * post_width) - gutter;
        ceil_posts_width = (Math.ceil(posts_per_row) * post_width) - gutter;
        posts_width = (ceil_posts_width > jQuery('#posts').innerWidth()) ? floor_posts_width : ceil_posts_width;
        if (posts_width == jQuery('.post').width()) {
            posts_width = '100%';
        }
        
        // Ensures that all top-level elements have equal width and stay centered
        
        jQuery('#posts, #grid').css('width', '1325px');
        // jQuery('#posts').css({'margin-left': '-20px'});
    
    }
}