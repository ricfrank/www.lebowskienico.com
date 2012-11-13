var lebowskienico = lebowskienico || {};

(function(ns){
    var isMobile;
    
    ns.isMobile = function(){
        isMobile =
            navigator.userAgent.match(/Android/i) ||
            navigator.userAgent.match(/webOS/i) ||
            navigator.userAgent.match(/iPhone/i) ||
            navigator.userAgent.match(/iPod/i) ||
            navigator.userAgent.match(/iPad/i) ||
            false;

        ns.isMobile = function () {
            return isMobile;
        }
        return isMobile;
    }
}(lebowskienico));