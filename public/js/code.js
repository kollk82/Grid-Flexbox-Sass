function click_logo() {
    location.href = "http://www.kollk.com";
};
function isItIE() {
    user_agent = navigator.userAgent;
    var is_it_ie = user_agent.indexOf("MSIE ") > -1 || user_agent.indexOf("Trident/") > -1;
    return is_it_ie;
}
if (isItIE()) {
    var element = document.getElementById("body");
    element.classList.add("iedelate");
    var element = document.getElementById("html");
    element.classList.add("iemsg");
}
window.onload = isItIE;