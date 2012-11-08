(function($){
    var init = function(context){
        var context = $(context);
        $('.carousel').carousel({
           interval: 2000
        })
    }
    
    $(document).ready(function(){
        init('#LebowskiNicoGallery');
    });
    
})(jQuery);


