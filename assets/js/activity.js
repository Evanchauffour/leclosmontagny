(function ($) {
    
    $('.grid').imagesLoaded( function() {
        console.log('-->')
    
        var elem = document.querySelector('.grid');
        
        if (typeof elem === 'undefined') {
            return;
        }
    
    
    
        var msnry = new Masonry( elem, {
            // options
            itemSelector: '.grid-item',
            columnWidth: 0,
            gutter: 16
        });
    
    
        // element argument can be a selector string
        //   for an individual element
        //var msnry = new Masonry( '.grid', {
        // options
       // })),;
  });
})(jQuery)

