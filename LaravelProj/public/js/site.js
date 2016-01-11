$(document).ready(function() {
    $('div.slideButton').click(function(e) {
        e.stopPropagation();
        $('div.slideButton+ul').slideToggle();
    });
    
    $('.headerButton#github').click(function() {
        //window.location.href = "https://github.com/arbuthnott";
        var newTab = window.open("https://github.com/arbuthnott", '_blank');
        newTab.focus();
    });
    $('.headerButton#linkedIn').click(function() {
        //window.location.href = "https://github.com/arbuthnott";
        var newTab = window.open("https://www.linkedin.com/in/chrisarbuthnott", '_blank');
        newTab.focus();
    });
});