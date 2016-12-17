@extends('layouts.responsive')
@section('content')

<?php
$social_links = <<<EOT
    <a target="_blank" href="mailto:%20?subject=&body=Hey...%0A%0ACheck%20out%20this%20awesome%20charitable%20campaign%20hosted%20by%20Lojistic.%0A%0AGreat%20idea...%20Great%20cause...%20and%20Lojistic%20Consulting%20is%20a%20pretty%20cool%20company.%0A%0AMight%20be%20worth%20checking%20out%20their%20services%20if%20your%20company%20spends%20a%20lot%20of%20money%20on%20shipping.%20%0A%0Awww.lojistic.com/20-20" class="social email">EMAIL</a>
    <a target="_blank" href="http://twitter.com/home?status=AWESOME%20charitable%20campaign%20hosted%20by%20Lojistic.%20%20Great%20idea.%20%20Great%20cause.%20Lojistic%20is%20a%20pretty%20groovy%20company!%20http%3A%2F%2Ftinyurl.com%2Fnejjp79" class="social twitter">TWITTER</a>
    <a target="_blank" href="https://www.facebook.com/sharer.php?s=2&appid=2305272732&p%5B0%5D=158284777562318&p%5B1%5D=1073741848&share_source_type=unknown" class="social facebook">FACEBOOK</a>
    <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.lojistic.com/20-20&title=20%20Minutes%20%3D%2020%20Dollars%20%3D%20Clean%20Water&summary=Check%20out%20this%20AWESOME%20charitable%20campaign%20hosted%20by%20Lojistic.%20Lojistic%20to%20Donate%20100k%20to%20charity%3A%20water%20Great%20idea.%20Great%20cause.%20Lojistic%20is%20a%20pretty%20groovy%20company!%20www.lojistic.com%2F20-20&source=" class="social linkedin">LINKEDIN</a>
EOT;
$social = <<<EOT
    <div class="social_links">
                <div>The more people we talk to, <br/>
                    the more money we give away!
                </div>
                <div class='sl_set'>
                    {$social_links}
                </div>
            </div>
EOT;
?>

{!! Html::script('/js/2020.js')  !!}
{!! Html::style('/css/2020.css?v='.v())  !!}

<div class="section yellow" id="contact_header">
    <div class="center">
        <div>
            <span>CALL: </span>(800) 783-5753  |  <span>EMAIL: </span><a id='header_email' href="mailto:info@lojistic.com">info@lojistic.com</a>
        </div>
        <a id="headerlogo" href="http://www.lojistic.com/"><img src="/images/2020/logosmall.png" border="0"/></a>
    </div>
</div>
<div class="section navy">
    <div class="center">
        <img id="logo2020" src="/images/2020/2020logo.png"/>
        <div id="prompt" class="yt">
            <div id="p1"><span class="white-text">20 MINUTE</span> CONVERSATION</div>
            <div id="p2">WITH A NEW PROSPECTIVE CUSTOMER...</div>
            <div id="p3">LOJISTIC WILL DONATE</div>
            <div id="p4"><span class="white-text">$20</span> TO <i>CHARITY: WATER</i></div>
            <div id="p5"><i>charity: water</i> is an awesome non-profit organization that brings</div>
            <div id="p6">clean, safe drinking water to people in developing countries.</div>
        </div>
    </div>
</div>

<div class='section yellow'>
    <div class='center' id='tracker'>
        <h2>$100,000 GOAL TRACKER</h2>
        <img src='/images/2020/spout-q3b.png' id='spout'/>
    </div>
</div>
<div class="section navy">
    <h2>
        THIS IS NOT A FUNDRAISER
    </h2>
    <h2 id="nomoney" class="yt">[we're not asking you to donate]</h2>
    <div id="arrow" class="block">
        THIS IS OUR GIVING PLAN
        <div id="arrow_border_left"></div>
        <div id="arrow_border_right"></div>
        <div id="arrow_shaft"></div>
        <div id="arrow_head_out"></div>
        <div id="arrow_head_in"></div>
    </div>
</div>
<div class="section white-text">
    <h2 class='yt'>HOW IT WORKS</h2>
    <div class="center">
        <p class="hiwp">Lojistic offers services and software technologies to help companies reduce shipping costs.</p>
        <p class="hiwp">A great prospective customer is a company that ships a lot of 'stuff' and wants to save money.</p>
    </div>
    <div id='hiw'>
        <div class='hiw'>
            <img id='blank_clock' src='/images/2020/clock-blank.png'/>
            <div>
                A new prospective customer <br/>
                gives us 20-minutes to<br/>
                to introduce<br/> Lojistic...
            </div>
            <div class='hiwf'>20 MINUTES</div>
        </div>
        <div class="hiw hiwe">
            <div>
                <div></div>
            </div>
            <div class="hiwf hiweq">=</div>
        </div>
        <div class='hiw middle'>
            <img id='money' src='/images/2020/20.png'/>
            <div>
                Lojistic will <br/>
                donate $20 to the 20/20 <br/>
                Campaign on behalf of the <br/>
                prospective customer...
            </div>
            <div class='hiwf'>20 DOLLARS</div>
        </div>
        <div class="hiw hiwe">
            <div>
                <div></div>
            </div>
            <div class="hiwf hiweq">=</div>
        </div>
        <div class='hiw'>
            <img id='cup' src='/images/2020/water.png'/>
            <div>
                <span class='yt'>charity: water</span> uses <br/>
                100% of donations to fund <br/>
                clean water projects in<br/>
                developing countries
            </div>
            <div class='hiwf'>CLEAN WATER</div>
        </div>
    </div>

</div>
<div class="section white-text">
    <div class="center">
        <div id='track'>
            <div id='t_title'>
                VIEW THE ACTUAL DONATIONS
            </div>
            <a target="_blank" href='https://my.charitywater.org/lojistic'>http://my.charitywater.org/<br/>Lojistic</a>
        </div>
    </div>
</div>
<div class='section navy'>
    <div class="center">
        <div class="fifty forms">
            <div class="ftitle">
                <img src='/images/2020/interested.png'/>
                I'M INTERESTED
            </div>
            <div class="fifty_content">
<!--<script charset="utf-8" src="//js.hsforms.net/forms/current.js"></script>
<script>
hbspt.forms.create({
portalId: '68908',
formId: '0489c3e8-34b0-4148-beff-7264d1921085'
});
</script>-->

                <form class='signup' id="signup" data-parsley-ui-enabled="true" data-parsley-validate="">
                    <input type="hidden" name="formID" value="0489c3e8-34b0-4148-beff-7264d1921085"/>
                    <input type="hidden" name="pageName" value="Shipping Software"/>
                    <p>
                        You&rsquo;re that prospective
                        customer we&rsquo;re looking for! Let's schedule a chat!
                    </p>
                    <label>Full Name</label>
                    <input type='text' name='xfullname'/>
                    <label>Email</label>
                    <input type='text' name='hs[email]' data-parsley-type="email" required=""/>
                    <label>Phone</label>
                    <input type='text' name='hs[phone]' class=" phone"/>
                    <button type='submit'>LET'S DO THIS</button>
                    <div id="thanks">
                        <img src="/images/2020/check.png"/>
                        THANKS!
                    </div>
                </form>
            </div>
        </div>
        <div class="fifty forms" id='buddy_button'>
            <div class="ftitle">
                <img src='/images/2020/buddy.png'/>
                I KNOW A BUDDY
            </div>
            <div class="fifty_content">
                <p>
                    I want to send an email to my buddy who would be a perfect fit for Lojistic&rsquo;s services!
                </p>
                <div id="message"><img src="/images/2020/mail.png"/>EMAIL A BUDDY</div>
                <div id="sent">
                    <img src="/images/2020/check.png"/>
                    SENT!
                </div>
            </div>
        </div>
    </div>
</div>

<div id="cover"></div>
<div id="dialog">
    <div id="dialog_title">SHARE WITH A BUDDY! <div id="dialog_close">&times;</div></div>
    <div id="dialog_content">
        <form id="buddy">
            <div>
                <label>To:</label>
                <input type='text' name='to' placeholder='Separate multiple emails with commas'/>
            </div>
            <div>
                <label>From:</label>
                <input type='text' name='from' placeholder='Your Email Address'/>
            </div>
            <div>
                <label>Message:</label>
                <textarea name='message'>Hey...

Check out this awesome charitable campaign hosted by Lojistic.

Great idea... Great cause... and Lojistic is a pretty cool company.

Might be worth checking out their services if your company spends a lot of money on shipping expenses.

www.Lojistic.com/20-20</textarea>
            </div>
            <button type='submit'>SEND</button>
        </form>
    </div>
</div>
<div class='section navy'>
    <div class="center">
        <div class="fifty">
            <div class="ftitle">
                SPREAD THE WORD
            </div>
            <?php echo $social; ?>
        </div>
        <div class="fifty">
            <div class="ftitle">
                CONTACT Lojistic
            </div>
            <div class="contact">
                <div>
                    Give us a call or email us.<br/>
                    We would love to introduce ourselves.
                </div>
                <img src="/images/lojistic-logo.png"/>
                <a target='_blank' href='mailto:info@lojistic.com'>info@lojistic.com</a><br/>
                <a target='_blank' href='http://www.lojistic.com'>www.lojistic.com</a><br/>
                <span>Phone: (800) 783-5753</span>
            </div>
        </div>
    </div>
</div>

<div class="section yellow">


    <h2 class='bt'><div class='dots'></div>THE 100% PROMISE <div class='dots rdots'></div></h2>

    <div id="promise">
        <div id="promise_title" class="bt"><b>ALL DONATIONS</b></div>
        <div id="promise_content"><b>( 100% )</b></div>
        <div id="promise_footer" class="bt"><b>GO TO FUND CLEAN WATER PROJECTS</b></div>
    </div>

    <iframe src="//player.vimeo.com/video/34963548" width="499" height="281" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

    <div class="content bt">
        <b>100% of the money donated will be used to build clean water projects. </b> <br/>
        <b>When each project is complete, <span class="rt">charity: water</span> will share photos and</b> <br/>
        <b>GPS coordinates so we can all see the exact communities we helped.</b> <br/>
    </div>

    <div id="full_arrow">
        <a target="_blank" href="http://www.lojistic.com/">LEARN MORE ABOUT Lojistic</a>
        <a target="_blank" href="https://my.charitywater.org/Lojistic">TRACK 20/20 CAMPAIGN GIVING</a>
        <a target="_blank" href="http://www.charitywater.com/">LEARN MORE ABOUT <span class="rt">charity:&nbsp;water</span></a>
    </div>
    <a href='www.lojistic.com/20-20'></a>
</div>
<img src="/images/2020/group-photo.jpg" id="group_photo"/>

<div class="section navy small">
    <div class="yt">
        About 800 Million People On The Planet Don't Have Access To Safe &amp;  Clean Drinking Water
    </div>
</div>
<div class="section yellow small">
    <div id='help'>
        HELP CHANGE THE WORLD
    </div>
</div>
<div id='twopics'>
    <div>
        <img src='/images/2020/pic1.jpg'/>
        <img src='/images/2020/pic2.jpg' style='float:right;'/>
    </div>
</div>
<div class='section yellow'>
    <div class='center'>
        <div class="fifty" id='video'>
            <div class="ftitle">
                ABOUT <span class='rt'>charity:water</span>
            </div>
            <div class="fifty_content">
                <iframe src="//player.vimeo.com/video/38399459" width="90%" height="251px" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <p>
                    <b>charity: water</b> is a non-profit organization bringing clean, safe drinking water
                    to people in developing countries. 100% of all public donations go directly to
                    fund sustainable water solutions in areas of greatest need.
                </p>
                <p>
                    Right now, 800 million people on the planet don&rsquo;t have access to clean and safe
                    drinking water. That&rsquo;s one in nine of us.
                </p>
                <p>
                    Unsafe water and lack of basic sanitation cause 80% of diseases and kill more
                    people every year than all forms of violence, including war. Children are especially
                    vulnerable, as their bodies aren&rsquo;t strong enough to fight diarrhea, dysentery and
                    other illnesses.
                </p>
                <hr/>
            </div>
        </div>
        <div class="fifty forms">
            <div class="ftitle">
                Contact Lojistic:
            </div>
            <div class="fifty_content">
                <form class="signup" data-parsley-ui-enabled="true" data-parsley-validate="">
                    <input type="hidden" name="formID" value="0489c3e8-34b0-4148-beff-7264d1921085"/>
                    <input type="hidden" name="pageName" value="Shipping Software"/>
                    <p>
                        You're that prospective
                        customer we&rsquo;re looking for! Let's schedule a chat!
                    </p>
                    <label>Full Name</label>
                    <input type='text' name='xfullname'/>
                    <label>Email</label>
                    <input type='text' name='hs[email]' data-parsley-type="email" required=""/>
                    <label>Phone</label>
                    <input type='text' name='hs[phone]' class=" phone"/>
                    <button type='submit'>LET'S DO THIS</button>
                    <div id="thanks">
                        <img src="/images/2020/check.png"/>
                        THANKS!
                    </div>
                </form>
            </div>
            <div class="ftitle">
                CONTACT Lojistic
            </div>
            <div class="contact">
                <div>
                    Give us a call or email us.<br>
                    We would love to introduce ourselves.
                </div>
                <img src="/images/lojistic-logo.png">
                <a target="_blank" href="mailto:info@lojistic.com">info@lojistic.com</a><br>
                <a target="_blank" href="http://www.lojistic.com/">www.lojistic.com</a><br>
                <span>Phone: (800) 783-5753</span>
            </div>
        </div>
    </div>
    <h2 style='padding-top:100px; max-width:90%;'>Just $20 can give one person access to clean water.</h2>
    <?php echo $social; ?>
</div>
</div>
</div>
</div>
</div>




@stop