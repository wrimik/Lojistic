
function buildSocialMediaLinks(){
    var socialMediaLinkData = {
         page: encodeURIComponent(window.location.protocol + "//" + window.location.host + window.location.pathname),
         title: encodeURIComponent(document.getElementsByTagName("title")[0].innerHTML),
         description: encodeURIComponent("Check out this awesome blog post!")
    }
    var linkedin = "https://www.linkedin.com/shareArticle?mini=true&url=" + socialMediaLinkData.page + "&title=" + socialMediaLinkData.title + "&summary=" + socialMediaLinkData.description;
    var facebook = "https://www.facebook.com/sharer/sharer.php?u=" + socialMediaLinkData.page;
    var twitter = "https://twitter.com/home?status=" + socialMediaLinkData.description + socialMediaLinkData.title + socialMediaLinkData.page;
    //linkedin
    $("a[href='https://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Flojistic.com']").attr('href', linkedin);
    //facebook
    $("a[href='https://www.facebook.com/sharer/sharer.php?u=http%3A//lojistic.com']").attr('href', facebook);
    //twitter
    $("a[href='https://twitter.com/home?status=Check%20out%3A%20http%3A//lojistic.com/']").attr('href', twitter);

}
