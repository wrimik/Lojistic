function abTrack(key, value, overwrite){
    if(abGet(key) == null || overwrite){
        localStorage.setItem(key, value);
    }
}
function abGet(key){
    return localStorage.getItem(key);
}