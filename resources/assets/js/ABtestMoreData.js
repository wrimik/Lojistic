/**
 * @class ABtest
 * This script sets up our A/B testing, and executes it
 * @author @jppope / jonpaul@lojistic.com
 * Resource /  var hubspot_utk = $( "input[name='formid']" ).val();
 */


/**
 * Constants, globals, etc
 */

var testDataOne = "button";
var testDataTWo = "orange";

//for test case
localStorage.setItem( "sessionID", "14479795071896759439839515");
/**
 * @method init
 * Keeping the global scope clear...maybe
 */
function ABtestInit(){

    createABtestEntry();

}
ABtestInit();



/**
 * @method createABtestEntry
 */
function createABtestEntry(){
    if (localStorage.getItem("sessionID") === null) {
        console.log("new session");
        createNewSession();
        postSessionInfo();
    }
    else if (localStorage.getItem("sessionID") !== null){
        console.log("they've been here before");
        handleSessionChanges();
    }
    else{
        console.log("no browsing data is being recorded");
    }

}

/**
 *  @method createNewSession
 *  creating the new session data
 */
function createNewSession(){
   // assign new variables
    var entry = {};
    entry.theSessionID = createTheSessionID();
    entry.theVariable = testDataOne;
    entry.theValue = testDataTWo;
        //Leave in case we want to use later
        //
        entry.url = window.location.href;
        entry.conversion = 0;
        localStorage.setItem( "theEntry", JSON.stringify(entry) );
        console.log( JSON.parse( localStorage.getItem( "theEntry" ) ) );
    //localStorage.setItem("theKey",entry.theVariable);
    //localStorage.setItem("theVal",entry.theValue);
}
/**
 *  @method postSessionInfo
 *  posting session info for each page
 *  TODO: update the URL to reflect the lojistic app
 *  Note: formatted this way because I don't know how laravel will handel the post
 */
function postSessionInfo(){
    var theKey = localStorage.getItem("theKey");
    var theVal = localStorage.getItem("theVal");
    //var data = {"key":theKey, "value":theVal}
    var data = [theKey,theVal];
    // The HTTP request
    var request = new XMLHttpRequest();
    request.open('POST', 'http://requestb.in/1d64gzf1', true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    //request.send(theKey + ":" + theVal);
    request.send(data);
}
/**
 * @method handleSessionChanges
 *
 */
function handleSessionChanges(){
    //if the local storage variables exist / Check the sessionID
    var existingSession = JSON.parse( localStorage.getItem( "theEntry" ) );
    console.log(existingSession);
    if(existingSession.url === window.location.href){
        console.log("This is the same page");
    }

    //check the URL
    //JSON.parse( localStorage.getItem( "theEntry" )
    //if the URL is the same do nothing
    //if the URL is different
    //assign URL
}

/**
 *  @method ABtestConversion
 *  Post to the database if theres a conversion
 */
function ABtestConversion(){
    var theKey = localStorage.getItem("theKey");
    var theVal = localStorage.getItem("theVal");
    console.log(theKey + theVal);
    //$.ajax({
    //    type: "POST",
    //    url: url,
    //    data: data,
    //    success: success,
    //    dataType: dataType
    //});
    //If they convert
}


/**
 * @method createTheSessionID
 *
 */
function createTheSessionID(){
    var randomNumber = (function(){return Math.random()*10000000000000;})();
    randomNumber = Math.floor(randomNumber);
    return Date.now() +""+ randomNumber;
}



