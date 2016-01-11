$(document).ready(function() {
    var RIPPLE_RAD = 120; // maximum visible ripple radius
    var RIPPLE_GAP = 40; // diam difference between concentric ripples
    var RIPPLE_FRAMERATE = 12; // ms between redraws
    var RIPPLE_LIFESPAN = 5000; // in ms
    var rgbs = ['0,255,255', '180,90,180', '255,255,0', '255,255,0', '0,255,0', '255,100,0'];
    
    $('.animFrame').on('click', function(e) {
        var frame = $(this);
        // get click position in the animFrame
        var offset = frame.offset();
        var clickx = e.clientX - $(this).offset().left;
        var clicky = e.clientY - $(this).offset().top;
        
        // create the ripple
        var rgb = rgbs[parseInt(Math.random() * rgbs.length)];
        var element = "<svg style='z-index: 2; overflow: hidden; position: absolute; top: " + (clicky-RIPPLE_RAD) + "px; left: " + (clickx-RIPPLE_RAD) + "px;' " +
            "class='ripple' height='" + (2*RIPPLE_RAD) + "px' width='" + (2*RIPPLE_RAD) + "px' " +
            "rgb='" + rgb + "', age='0' radius='" + RIPPLE_RAD + "' ctrx='" + clickx + "' ctry='" + clicky + "'></svg>";
        frame.append(element);
    });
    
    setInterval(function() {
        $('.ripple').each(function() {
            var ripple = $(this);
            if (parseInt(ripple.attr('age') * RIPPLE_FRAMERATE) > RIPPLE_LIFESPAN) {
                ripple.remove();
            } else {
                ripple.empty();
                ripple.attr('age', parseInt(ripple.attr('age')) + 1);
                var shrink = 0;
                while (parseInt(ripple.attr('age')) - shrink > 0) { // loop over smaller and smaller ripples
                    // transparency increases with age and with circle radius.
                    var alpha = Math.max(1 - parseFloat(ripple.attr('age')-shrink/2)/parseFloat(ripple.attr('radius')), 0);
                    var circ = document.createElementNS("http://www.w3.org/2000/svg", 'circle');
                    circ.setAttribute('cx', RIPPLE_RAD);
                    circ.setAttribute('cy', RIPPLE_RAD);
                    circ.setAttribute('r', parseInt(ripple.attr('age'))-shrink);
                    circ.setAttribute('fill','none');
                    circ.setAttribute('stroke', 'rgba(' + ripple.attr('rgb') + ',' + alpha + ')');
                    ripple.append(circ);
                    shrink += RIPPLE_GAP;
                }
            }
        });
    }, RIPPLE_FRAMERATE);
});