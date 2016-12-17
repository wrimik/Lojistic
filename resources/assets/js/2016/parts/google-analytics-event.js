function trackGaEvent(attr){
    var data = attr.split('|');
    if(typeof data[1] === 'undefined') {
        _gaq.push(['_trackEvent', 'Interaction', data[0]]);
    } else {
        _gaq.push(['_trackEvent', 'Interaction', data[0], data[1]]);
    }
    return false;
}