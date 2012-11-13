var lebowskienico = lebowskienico || {};

(function($){
    $(document).ready(function(){
        $('.close', '#teaserPropaganda').click(function(){
          $('iframe', '#teaserPropaganda').remove();
        });
        
        
        if(!lebowskienico.isMobile()){
            $('#teaserPropaganda').modal('show');
        }
        console.log("WWWrr");
    });
})(jQuery);