<?php
if(!isset($track)){
    $track=0;
}
include 'dbc.php';
$dbc = dbc::getInstance(true);
$show_button = true;
$page = array(
    'title' => 'Shipping Insurance & Freight Management Services - Source Consulting - Carrier Analysis',
    'description' => 'Shipping insurance, carrier analysis and freight audit services by Source Consulting help reduce shipping costs.  We deliver measurable and sustainable results with compensation based on results.',
    'keywords' => 'shipping insurance, freight management, source consulting, carrier analysis, shipment tracking software, freight auditing companies, freight audit companies',
    'body-class' => 'about-source-consulting',
    'legacy' => true
);
include 'header.php';
?>
<link rel='stylesheet' type='text/css' href="giving.css"/>
<!--<link rel='stylesheet' type='text/css' href="giving2.css"/>-->
<!--<script type='text/javascript' src='giving.js'></script>-->
<div id="content">
    <h2>THE PLAN</h2>
    <p>Bring Some Extra Holiday Cheer to A Few Financially Disadvantaged Families</p>

    <h2>The Gift</h2>
    <p>
        Each Family Will Receive:<br/>
        Christmas Tree, Holiday Decorations, Pizza Party &amp; Target Gift Card for Family Presents
    </p>

    <h2>The Goal</h2>
    <p>Raise $5,000 (or more) To Make Christmas Happen For 10 (or more) Families</p>


    <h2>THE BONUS</h2>

    <div id="matching">
        <p>Source Consulting Will Match Your Donation Dollar-for-Dollar.<br/>
            <span>100%</span><br/>
            Your Donation + 100% Match Will Go Directly To The Families.
        </p>
    </div>
    <br/>
    <p class="lj">
        Partner with Source Consulting to bring a little extra 
        holiday cheer to a few financially disadvantaged families 
        this Holiday Season.  Source Consulting will match your 
        donations dollar for dollar, up to $10,000! In order to
        ensure 100% of all donations (plus Match) go to the families,
        Source will even put up the extra dollars necessary to pay 
        credit card transaction fees when you donate.
    </p>

    <p class="lj">
        Last year we raised over $1,500 and made the holidays a 
        little more jolly for three families. Each family received a 
        Christmas tree with decorations, a pizza party, and a $400 
        Target gift card for holiday presents (and other household 
        essentials).  Join us this year as we try to exceed our goal
        of $5000 to sponsor 10 or more families!
    </p>

    <p class="lj">
        Donations can be made online using the form below or give us a call at (800)783-5753.
    </p>
</div>

<h2 id="method">
    Select A Payment Method:
</h2>
<div id="form">
    <div id="toggle">
        <div class="selected" id="cc">DONATE BY CREDIT CARD</div>
        <div id="account">DONATE BY BANK ACCOUNT</div>
    </div>
    <form method='post' action='thanks.php'>
        <input type="hidden" id="p_method" name="payment_method" value="credit card"/>
        <input type="hidden"  name="track" value="<?php echo $track;?>"/>
        <table>
            <tbody>
                <tr>
                    <td>My Donation<b>*</b></td>
                    <td colspan='4'>
                        <input type='text' name='donation_amount' class="required" placeholder ='USD $'/>
                    </td>
                </tr>

                <tr>
                    <td>Your Name<b>*</b></td>
                    <td colspan='4'>
                        <input type='text' class="required" name='name'/>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td colspan='4'>
                        <input type='text' name='email'/>
                    </td>
                </tr>
                <tr>
                    <td>Phone Number<b>*</b></td>
                    <td colspan='4'>
                        <input type='text' class="required" name='phone'/>
                    </td>
                </tr>
                <tr>
                    <td>Billing Name <br/><i>(if different)</i></td>
                    <td colspan='4'>
                        <input type='text' name='billing_name'/>
                    </td>
                </tr>
                <tr class='card'>
                    <td>Card Number<b>*</b></td>
                    <td colspan='4'>
                        <input type='text' class="required" name='card_number'/>
                    </td>
                </tr>
                <tr class='card'>
                    <td>Expiration Date<b>*</b></td>
                    <td>
                        <select style="width:83%;"  class="required" name='cc_exp_date'>
                            <?php
                            $n = 1;
                            while ($n < 32) {
                                echo "<option value='$n'>$n</option>\n";
                                $n++;
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select class="required" name='cc_exp_year'>
                            <?php
                            $n = 2013;
                            while ($n < 2030) {
                                echo "<option value='$n'>$n</option>\n";
                                $n++;
                            }
                            ?>
                            <option value=''>3000 And Beyond!</option>
                        </select>
                    </td>
                    <td style="text-align: right; padding-right:20px">CVV<b>*</b></td>
                    <td>
                        <input type='text' class="required" name='cc_cvv' />
                    </td>
                </tr>
                <tr class='card'>
                    <td>Billing Address<b>*</b></td>
                    <td colspan='4'>
                        <input type='text' class="required" name='address_1'/>
                    </td>
                </tr>
                <tr class='card'>
                    <td>Billing Address 2</td>
                    <td colspan='4'>
                        <input type='text' name='address_2'/>
                    </td>
                </tr>
                <tr class='card'>
                    <td>City<b>*</b></td>
                    <td colspan='4'>
                        <input type='text' class="required" name='city'/>
                    </td>
                </tr>
                <tr class='card'>
                    <td>State<b>*</b></td>
                    <td colspan='1'>
                        <input type='text' class="required" style="width:78%" name='state'/>
                    </td>
                    <td colspan='2' style="text-align: right; padding-right:20px">Zip<b>*</b></td>
                    <td>
                        <input type='text' class="required" name='zip'/>
                    </td>
                </tr>


                <tr class='bank'>
                    <td>Routing Number<b>*</b></td>
                    <td colspan='4'>
                        <input type='text' class="required" name='bank_routing'/>
                    </td>
                </tr>

                <tr class='bank'>
                    <td>Account Number<b>*</b></td>
                    <td colspan='4'>
                        <input type='text' class="required" name='account_number'/>
                    </td>
                </tr>

                <tr class='bank'>
                    <td>Bank Name<b>*</b></td>
                    <td colspan='4'>
                        <input type='text' class="required" name='bank_name'/>
                    </td>
                </tr>

                <tr>
                    <td colspan='1'></td>
                    <td colspan='4'>
                        <br/>
                        <button type='submit'>Give</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <div id="footer">
        <b>Source Consulting is not a 501(c)(3) charitable organization.  
            Your donation is not tax deductible. </b><br/>
        Consult your financial professional for more information.  
        This holiday giving effort is an extension of our Greater
        Good Initiative, a unique corporate citizenship program.  
        To learn more about the Greater Good Initiative, please visit: <br/>

        <a href="http://www.sourceconsulting.com/source-corporate-citizenship" target="_blank">
            http://www.sourceconsulting.com/source-corporate-citizenship </a>
    </div>
</div>
</div>
<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
    try {
        var pageTracker = _gat._getTracker("UA-6928743-1");
        _gaq.push(['_setDomainName', 'sourceconsulting.com']);
        pageTracker._trackPageview();
    } catch (err) {
    }</script>
</body>
</html>
