/**
 * @class ABtest
 * This script sets up our A/B testing, and executes it
 * @author @jppope / jonpaul@lojistic.com
 * Resource /  var hubspot_utk = $( "input[name='formid']" ).val();
 */


/**
 * Constants, globals, etc
 */
//object properties are test data right now
//TODO: take out test data
var whatWeAreTesting = {
    "theKey":"button",
    "theValue":"orange"
};


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
    if (localStorage.getItem("theKey") === null) {
        createNewSession();
    }
    else if (localStorage.getItem("theKey") !== null){
        console.log("they've been here before");
        //createNewSession();
        postSessionInfo();
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
    localStorage.setItem("theKey","button");
    localStorage.setItem("theVal","magenta");
    postSessionInfo();
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
    var data = {
        "AbTest": {
            key: theKey,
            value: theVal
        }
    }
    $.post('/tests/abtest', data, function(result){
        console.dir(result);
    })
}




/**
 * @method setVariables
 * this method dynamically changes the variables that we are testing
 * TODO: Currently not activated
 */
function setVariables(){
    //get the variables that we could care about
    //Button Color
    //Button Text
    //Form title
    // et cetera
    //change one variable
    //what is it ?
    //push it to the object
}


