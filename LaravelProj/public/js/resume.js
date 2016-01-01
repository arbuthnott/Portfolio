$(document).ready(function() {
    $('nav.slideButton').click(function(e) {
        e.stopPropagation();
        $('nav.slideButton+ul').slideToggle();
    });
    
    $('.headerButton#github').click(function() {
        //window.location.href = "https://github.com/arbuthnott";
        var newTab = window.open("https://github.com/arbuthnott", '_blank');
        newTab.focus();
    });
    
    $('.headerButton#moreFish').click(function(e) {
        e.stopPropagation();
        var xpos = $(this).offset().left - $('.animFrame').offset().left;
        var ypos = $(this).offset().top; - $('.animFrame').offset().top;
        for (var idx = 0; idx < 3; idx++) {
            var FISH_HEIGHT = parseInt(20 + 20 * Math.random());
            var FISH_WIDTH = parseInt(10 + 20 * Math.random());
            var rotation = parseInt( 135 + 135 * Math.random());
            var ROTATE_FRICTION = 0.014 + 0.008 * Math.random(); // good value: 0.018
            var LINEAR_FRICTION = 0.001 + .001 * Math.random(); // good value: 0.001
            var linearAcc = .02 + .04 * Math.random(); // good value: 0.04
            var rotateAcc = .07 + .04 * Math.random(); // good value: 0.09
            
            var newFish = "<div class='fishy' xdest=200 ydest=300 linearAcc='" + linearAcc + "' linearFric='" + LINEAR_FRICTION + "' " +
                "rotateAcc='" + rotateAcc + "' rotation='" + rotation + "' rotateFric='" + ROTATE_FRICTION + "' " +
                "ctrx='" + xpos + "' ctry='" + ypos + "' rotateVel='0' linearVel='1' height='" + FISH_HEIGHT + "' width='" + FISH_WIDTH + "' " +
                "style='height:" + FISH_HEIGHT + "px; width:" + FISH_WIDTH + "px; transform:rotate(" + rotation + "deg); " +
                "border: 1px solid lightgrey; -webkit-border-radius:" + parseInt(FISH_WIDTH/2) + "px; " +
                "-moz-border-radius:" + parseInt(FISH_WIDTH/2) + "px; border-radius:" + parseInt(FISH_WIDTH/2) + "px'></div>";
            $('.animFrame').prepend(newFish);
            
        //    $(this).attr({'xdest':100, 'ydest':100, 'linearAcc':linearAcc, 'linearFric':LINEAR_FRICTION, 'rotateAcc':rotateAcc, 'rotation':rotation,
        //             'rotateFric':ROTATE_FRICTION, 'ctrx':ctrx, 'ctry':ctry, 'rotateVel':0, 'linearVel':0, 'height':FISH_HEIGHT, 'width':FISH_WIDTH});
        //$(this).css({'height':""+FISH_HEIGHT+"px", 'width':""+FISH_WIDTH+"px", 'transform': 'rotate(' + rotation + 'deg)'});
        //$(this).css({'border':'1px solid lightgrey','-webkit-border-radius':"" + parseInt(FISH_WIDTH/2) + "px",
        //        '-moz-border-radius':"" + parseInt(FISH_WIDTH/2) + "px",
        //        'border-radius':"" + parseInt(FISH_WIDTH/2) + "px"});
        }
        setDestinations();
    })
});