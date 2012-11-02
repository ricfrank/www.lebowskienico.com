(function($){
    var init = function(context, target, subject){
        var context = $(context);
        var subject = $(subject, context);
        var target = $(target, context);
        var offsetText = 60;
        
        var heightBox = subject.height() + offsetText + 'px';
        target.css('height', heightBox); 
    }
    
    $(document).ready(function(){
        init('body', '.LeftCol', '.ContentCol');
        $('#teaserPropaganda').modal('show');
    });
    
})(jQuery);


