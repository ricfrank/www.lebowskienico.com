(function($){
    $(document).ready(function(){
        $('.close', '#teaserPropaganda').click(function(){
          $('iframe', '#teaserPropaganda').remove();
        });
        
        $('#teaserPropaganda').modal('show');
    });
})(jQuery);


