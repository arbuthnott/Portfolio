var destinationId;

function setDestinations() {
    $(".fishy").each(function() {
        // get container dimensions
        var VIEW_HEIGHT = $(this).parents('.animFrame').height();
        var VIEW_WIDTH = $(this).parents('.animFrame').width();
        var xdest = parseInt(VIEW_WIDTH/8 + 3*VIEW_WIDTH/4 * Math.random());
        var ydest = parseInt(VIEW_HEIGHT/8 + 3*VIEW_HEIGHT/4 * Math.random());
        $(this).attr({'xdest':xdest, 'ydest':ydest});
    });
}

function initializeFish() {
    $(".fishy").each(function() {
        // get container dimensions
        var VIEW_HEIGHT = $(this).parents('.animFrame').height();
        var VIEW_WIDTH = $(this).parents('.animFrame').width();
        
        // generate fish attributes randomly.
        var FISH_HEIGHT = parseInt(20 + 20 * Math.random());
        var FISH_WIDTH = parseInt(10 + 20 * Math.random());
        var ctrx = parseInt(FISH_WIDTH/2 + (VIEW_WIDTH - FISH_WIDTH) * Math.random());
        var ctry = parseInt(FISH_HEIGHT/2 + (VIEW_HEIGHT - FISH_HEIGHT) * Math.random());
        var rotation = parseInt(360 * Math.random());
        var ROTATE_FRICTION = 0.014 + 0.008 * Math.random(); // good value: 0.018
        var LINEAR_FRICTION = 0.001 + .001 * Math.random(); // good value: 0.001
        var linearAcc = .02 + .04 * Math.random(); // good value: 0.04
        var rotateAcc = .07 + .04 * Math.random(); // good value: 0.09
    
        // apply style and attributes.
        $(this).attr({'xdest':100, 'ydest':100, 'linearAcc':linearAcc, 'linearFric':LINEAR_FRICTION, 'rotateAcc':rotateAcc, 'rotation':rotation,
                     'rotateFric':ROTATE_FRICTION, 'ctrx':ctrx, 'ctry':ctry, 'rotateVel':0, 'linearVel':0, 'height':FISH_HEIGHT, 'width':FISH_WIDTH});
        $(this).css({'height':""+FISH_HEIGHT+"px", 'width':""+FISH_WIDTH+"px", 'transform': 'rotate(' + rotation + 'deg)'});
        $(this).css({'border':'1px solid lightgrey','-webkit-border-radius':"" + parseInt(FISH_WIDTH/2) + "px",
                '-moz-border-radius':"" + parseInt(FISH_WIDTH/2) + "px",
                'border-radius':"" + parseInt(FISH_WIDTH/2) + "px"});
    });
}

//
function isClockwise(angle, origx, origy, destx, desty) {
    //find angle between origin and dest points.
    var connectAngle = ((180 * Math.atan2(desty-origy, destx-origx) / Math.PI) - 90) % 360;
    return ((angle - connectAngle) % 360 <= 180);
}

//
function isForward(angle, origx, origy, destx, desty) {
    //find angle between origin and dest points.
    var connectAngle = ((180 * Math.atan2(desty-origy, destx-origx) / Math.PI) - 90) % 360;
    var diff = (angle - connectAngle) % 360;
    return !(diff <= 90 || diff >= 270);
}

$(document).ready( function() {
    initializeFish($(this)); // set random initial values
    setDestinations(); // set fish destinations.
    
    setInterval(function() {
        $(".fishy").each(function() {
            // major work here.  1st rotateAcc toward destination, decide whether to linear accel, then move.
            var ctrx = parseFloat($(this).attr('ctrx'));
            var ctry = parseFloat($(this).attr('ctry'));
            
            // apply rotational accel to rotational vel.  Apply friction.
            if (isClockwise($(this).attr('rotation'), ctrx, ctry, $(this).attr('xdest'), $(this).attr('ydest'))) {
                $(this).attr('rotateVel', (1 - $(this).attr('rotateFric')) * parseFloat($(this).attr('rotateVel')) + parseFloat($(this).attr('rotateAcc')));
            } else {
                $(this).attr('rotateVel', (1 - $(this).attr('rotateFric')) * parseFloat($(this).attr('rotateVel')) - parseFloat($(this).attr('rotateAcc')));
            }
            
            // apply linear accel to linear vel.  Apply friction.
            if (isForward($(this).attr('rotation'), ctrx, ctry, $(this).attr('xdest'), $(this).attr('ydest'))) {
                $(this).attr('linearVel', (1 - $(this).attr('linearFric')) * parseFloat($(this).attr('linearVel')) + parseFloat($(this).attr('linearAcc')));
            } else {
                $(this).attr('linearVel', Math.max((1 - $(this).attr('linearFric')) * parseFloat($(this).attr('linearVel')) - parseFloat($(this).attr('linearAcc')), 0));
            }
            
            // adjust rotation and center positions.
            var dx = parseFloat($(this).attr('linearVel')) * Math.sin(Math.PI * parseFloat($(this).attr('rotation')) / 180);
            var dy = -1 * parseFloat($(this).attr('linearVel')) * Math.cos(Math.PI * parseFloat($(this).attr('rotation')) / 180);
            $(this).attr('ctrx', parseFloat($(this).attr('ctrx')) + dx);
            $(this).attr('ctry', parseFloat($(this).attr('ctry')) + dy);
            $(this).attr('rotation', (parseFloat($(this).attr('rotation')) + parseFloat($(this).attr('rotateVel'))) % 360);
            
            // update the visible css.
            var newLeft = parseInt(ctrx + dx - $(this).attr('width') / 2);
            var newTop = parseInt(ctry + dy - $(this).attr('height') / 2);
            var newRot = parseInt($(this).attr('rotation'));
            $(this).css({'left':"" + newLeft + "px", 'top':"" + newTop + "px"});
            $(this).css('transform', 'rotate(' + newRot + 'deg)');
        });
    }, 10);
    
    destinationId = setInterval(function() {
        setDestinations();
    }, 5000);
    
    $('.animFrame').click(function(e) {
        // get click position in the animFrame
        var offset = $(this).offset();
        var clickx = e.clientX - $(this).offset().left;
        var clicky = e.clientY - $(this).offset().top + $(window).scrollTop();
        
        // stop the resetting of destination for 3 seconds.
        clearInterval(destinationId);
        $('.fishy').each(function() {
            $(this).attr({'xdest':clickx, 'ydest':clicky});
        });
        
        // resume the resetting.
        destinationId = setInterval(function() {
            setDestinations();
        }, 5000);
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
        }
        setDestinations();
    })

});
