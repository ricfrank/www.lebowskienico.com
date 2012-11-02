(function($){
    $(document).ready(function(){
        $('#teaserPropaganda').modal('show');
        
        $('.close', '#teaserPropaganda').click(function(){
          
          $('iframe', '#teaserPropaganda').remove();
          
        });
        
    });
})(jQuery);


