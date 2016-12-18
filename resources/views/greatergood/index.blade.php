<!DOCTYPE html>
<html>
    <head>
        <title>Lojistic - Greater Good Campaign</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="format-detection" content="telephone=no"/>
        <link rel="icon" type="image/vnd.microsoft.icon" rel="nofollow" href="//www.lojistic.com/favicon.ico" />
        <link rel="shortcut icon" type="image/x-icon" rel="nofollow" href="//www.lojistic.com/favicon.ico" />
        {!! Html::style('css/fonts.cs?v='.v()) !!}
        {!! Html::style('css/gg.css?v='.v()) !!}

    </head>
        @include('parts.tracking')
        <div id="header">
            <div class='pageframe'>
                <div>GREATER GOOD SERVICE DAY 2014</div>
                <div><span id='date_num'>2 / 17 / 2014</span><span id='date_text'>MONDAY FEBRUARY 17, 2014</span></div>
            </div>
        </div>
        <div id="banner">
            <div class='pageframe'>
                <img src='{{ URL::asset('images/greatergood/gg.png') }}'/>
                <div id='banner_text'>
                    <b>GREATER GOOD</b> SERVICE DAY<br/>
                    <span>GIVING BACK TO THE COMMUNITY</span>
                </div>
            </div>
        </div>
        <div class="pageframe">
            <div id="content">
                <p>
                    At Lojistic, we hold a high standard for corporate 
                    and community responsibility.  We are a for profit company 
                    trying to make an impact in the nonprofit sector.  As a part
                    of our corporate Greater Good Initiative, our team (plus 
                    friends, family, customers, and other willing volunteers) 
                    dedicates two normal workdays each year to volunteer an
                    d help alongside organizations working for the 'greater good'.  
                    We call these volunteer days: Greater Good Service Days.
                </p>
                <p>
                    The first Greater Good Service Day of 2014 will be <br/> on 
                    <b>Monday February 17, 2014</b> Mary's Kitchen in Orange, CA.
                </p>
                <div class="grey">
                    <b>Mary's Kitchen</b>
                    <p>In 1984, 82 year old Mary McAnena helped a homeless woman 
                        in Hart Park, Orange, California. This was the beginning 
                        of Mary's Kitchen. 
                    </p>
                    <p>
                        Mary's home became the scene - volunteers helped with the 
                        cooking, transported the food to Hart Park and served the 
                        men, women and children who were homeless and in need.
                    </p>
                    <p>
                        Mary's Kitchen is staffed 100% by volunteers and 
                        underwritten by private donations from individuals, 
                        churches, local corporations, grocery stores, caterers, 
                        students from local schools including Chapman University and others.
                    </p>
                    <p>
                        On average 100 people come to the Kitchen each day for 
                        breakfast, a hot meal, a bag lunch to go for dinner, hot 
                        showers, clean clothes and attention from caring 
                        volunteers who give them hope. 
                    </p>
                    <p>
                        The team at Lojistic is proud to work alongside
                        this great cause!
                    </p>
                </div>
                
                <div id='details'>
                    <div>
                        <div class='dtitle'>LOCATION</div>
                        <div class='dtext'>
                            <img src='{{ URL::asset('images/greatergood/pin.png') }}'/>
                            Mary&rsquo;s Kitchen<br/>
                            517 W. Struck Ave.<br/>
                            Orange, CA
                        </div>
                    </div>
                    <div id='d_middle'>
                        <div class='dtitle'>TIME</div>
                        <div class='dtext'>
                            <img src='{{ URL::asset('images/greatergood/clock.png') }}'/>
                            8:00 AM<br/>
                            Monday<br/>
                            February 17, 2014
                        </div>
                    </div>
                    <div>
                        <div class='dtitle'>AGENDA</div>
                        <div class='dtext'>
                            <img src='{{ URL::asset('images/greatergood/list.png') }}'/>
                            Prepare food<br/>
                            Organize, Clean<br/>
                            Sort Clothes, etc.
                        </div>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3315.2404488433226!2d-117.8580378!3d33.8061075!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcd768fd02190b%3A0x50009afd6fcb8bc6!2sMary&#39;s+Kitchen!5e0!3m2!1sen!2sus!4v1391559007143" width="600" height="450" frameborder="0" style="border:0"></iframe>
            </div>
            <div id="sidebar">
                <div class='stitle'>
                    VOLUNTEER
                    <img src='{{ URL::asset('images/greatergood/volunteer.png') }}'/>
                </div>
                <div class='scontent'>
                    <p>
                        Please fill out the volunteer form and join us on Monday February 17, 2014 for our Greater Good Day
                    </p>
                    <b>(Volunteering has expired for this event. Check back soon!)</b>
<!--                    <form method="post" id='volunteer' action="thankyou.php">
                        <input type='hidden' name='action' value='volunteer'/>
                        <input type='text' name='volunteer_name' placeholder='FULL NAME'/>
                        <input type='text' name='volunteer_email' placeholder='EMAIL'/>
                        <input type='text' name='volunteer_phone' placeholder='PHONE'/>
                        <button type='submit'>SUBMIT</button>
                    </form>-->
                </div>
<!--                <a class='stitle' href='greater_good_service_day_2014.pdf' target='_blank'>
                    DOWNLOAD <img border="0" src='{{ URL::asset('images/greatergood/download.png') }}'/>
                </a>
                <div class='scontent'>
                    <p>
                        Get a copy of our awesome event flyer which includes all important information and maps. 
                    </p>
                    <a class='button' href='greater_good_service_day_2014.pdf' target='_blank'>DOWNLOAD NOW</a>
                </div>-->
                
                <div class='stitle'>
                    SHARE
                    <img src='{{ URL::asset('images/greatergood/share.png') }}'/>
                </div>
                <div class='scontent'>
                    <p>
                        Tell a friend about this event. 
                        We would greatly appreciate
                        the word of mouth
                    </p>
                <b>(Volunteering has expired for this event. Check back soon!)</b>

<!--                    <form method="post" id='share' action="thankyou.php">
                        <input type='hidden' name='action' value='share'/>
                        <input type='text' name='your_volunteer_name' placeholder='YOUR NAME'/>
                        <input type='text' name='volunteer_name' placeholder='YOUR FRIENDS NAME'/>
                        <input type='text' name='volunteer_email' placeholder='YOUR FRIENDS EMAIL'/>
                        <button type='submit'>SUBMIT</button>
                    </form>-->
                </div>                
                <div id='social'>
                    <a target="_blank" id='twitter' href='http://twitter.com/home?status=Join%20us%20Feb%2017,%202014%20for%20our%20next%20Greater%20Good%20Day%20at%20Marys%20Kitchen.%20Help%20us%20give%20back%20to%20the%20community.%20Sign%20Up:%20http://goo.gl/eIGFKw'>
                        <img src='{{ URL::asset('images/greatergood/twitter.png') }}'/>
                        <span>TWITTER</span>
                    </a>
                    <a target="_blank" id='facebook' href='https://www.facebook.com/sharer.php?s=100&p%5Burl%5D=http%3A%2F%2Fgreatergood.lojistic.com%2F&p%5Bsummary%5D=At%20Lojistic%2C%20sincere%20value%20for%20people%20and%20the%20environment%20are%20fundamental%20to%20our%20way%20of%20thinking.%20%0AThat%E2%80%99s%20why%20we%20founded%20our%20Greater%20Good%20Initiative%2C%20which%20is%20our%20way%20of%20giving%20back%20to%20the%20community%20and%20foster%20corporate%20responsibility.%20%0A%0ACheck%20out%20our%20next%20event%20on%20February%2017%2C%202014%20at%20Mary%E2%80%99s%20Kitchen%20and%20join%20us%20by%20signing-up%20on%20our%20Greater%20Good%20page%3A%20http%3A%2F%2Fgreatergood.lojistic.com'>
                        <img src='{{ URL::asset('images/greatergood/facebook.png') }}'/>
                        <span>FACEBOOK</span>
                    </a>
                    <a target="_blank" id='linkedin' href='http://www.linkedin.com/shareArticle?mini=true&url=http://greatergood.lojistic.com&title=Volunteer%20At%20Marys%20Kitchen%20With%20Lojistic&summary=At%20Lojistic,%20sincere%20value%20for%20people%20and%20the%20environment%20are%20fundamental%20to%20our%20way%20of%20thinking.%20%0AThat%E2%80%99s%20why%20we%20founded%20our%20Greater%20Good%20Initiative,%20which%20is%20our%20way%20of%20giving%20back%20to%20the%20community%20and%20foster%20corporate%20responsibility.%20%0A%0ACheck%20out%20our%20next%20event%20on%20February%2017,%202014%20at%20Mary%E2%80%99s%20Kitchen%20and%20join%20us%20by%20signing-up%20on%20our%20Greater%20Good%20page:%20http://greatergood.lojistic.com&source='>
                        <img src='{{ URL::asset('images/greatergood/linkedin.png') }}'/>
                        <span>LINKEDIN</span>
                    </a>
                </div>
<div class='stitle' href='{{ URL::asset('images/greatergood/greater_good_service_day_2014.pdf') }}' target='_blank'>
    CONTACT 
</div>
<div class='scontent' id="contactus">
    <p>
        <b>CALL US:</b><br/> (800) 783-5753<br/><br/>
        <b>EMAIL US:</b><br/> <a rel="nofollow" href="mailto:info@lojistic.com">info@lojistic.com</a><br/><br/>
        <b>VISIT OUR WEBSITE:</b><br/> <a rel="nofollow" href="http://www.lojistic.com">Lojistic.com</a>
    </p>
</div>            </div>
        </div>
        
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-6928743-1");
  _gaq.push(['_setDomainName', 'lojistic.com']);
pageTracker._trackPageview();
} catch(err) {}</script>
    </body>
</html>
