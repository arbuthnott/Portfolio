$(document).ready(function() {
    $(".pianoKey").mouseenter(function() {
        $(this).animate({'padding-left': '24px', 'font-size': '22px'}, 200, function() {
            $(this).css('text-shadow', '0px 0px 4px yellow');
        });
    });
   
    $(".pianoKey").mouseleave(function() {
        $(this).stop();
        $(this).css('text-shadow', 'none');
        $(this).animate({'padding-left': '0px', 'font-size': '18px'}, 100);
    });
});