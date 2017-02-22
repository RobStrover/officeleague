
function getTag(type, attributes) {
    return $(
        type,
        attributes
    )
}

function addEmphasis(target, animation, infinite) {

    console.log('adding emaphasis');

    if(infinite == true) {
        infinite = 'infinite'
    } else {
        infinite = '';
    }

    $(target).addClass('animated ' + infinite + ' ' + animation);

}

function removeEmphasis(target) {

    console.log('removing emaphasis');

        target.removeClass(
            'animated' +
            'infinite' +
            'bounce' +
            'flash' +
            'pulse' +
            'rubberBand' +
            'shake' +
            'headShake' +
            'swing' +
            'tada' +
            'wobble' +
            'jello'
        );



}