var ua = window.navigator.userAgent; 
var msie = ua.indexOf('MSIE '); 
    // IE 10 or older
    if (msie > 0) { 
        var element = document.getElementById("IE-only");
        element.classList.remove("header__photo-logo");
    }

var trident = ua.indexOf('Trident/'); 
    // IE 11
    if (trident > 0) { 
        var element = document.getElementById("IE-only");
            element.classList.remove("header__photo-logo");
    } 
