<?php

if(!isset($_POST['payment_method'])){
    header('location: /');
    edit();
}

include 'dbc.php';
$dbc = dbc::getInstance(true);
$post= $dbc->cleanArray($_POST);
$post['donation_amount'] = str_replace('$', '', $post['donation_amount']);
$post['donation_amount'] = str_replace(',', '', $post['donation_amount']);
$post['donation_amount'] = floatval($post['donation_amount']);
$query = "INSERT INTO donations (
                    payment_method, donation_amount, name,
                    email, phone, billing_name,
                    card_number, cc_exp_date, cc_exp_year,
                    cc_cvv, address_1, address_2,
                    city, state, zip,
                    bank_routing, account_number, bank_name)
                VALUES (
                  '{$post['payment_method']}',  '{$post['donation_amount']}',  '{$post['name']}',  
                  '{$post['email']}',  '{$post['phone']}',  '{$post['billing_name']}', 
                  '{$post['card_number']}',  '{$post['cc_exp_date']}',  '{$post['cc_exp_year']}',  
                  '{$post['cc_cvv']}',  '{$post['address_1']}',  '{$post['address_2']}',  
                  '{$post['city']}',  '{$post['state']}',  '{$post['zip']}',  
                  '{$post['bank_routing']}',  '{$post['account_number']}',  '{$post['bank_name']}'
                );";
$dbc->insert($query);

mail('mike@lojistic.com', 'New Donation', date('m/d/Y g:i'));
mail('tracy@lojistic.com', 'New Donation', date('m/d/Y g:i'));
$show_button = false;
include 'header.php';
?>

<div id="content">
        <h2>YOU ROCK!</h2>
        <p>Your $<?php echo $post["donation_amount"];?> gift brings us that much closer to our goal.</p>
        <p>
            If you'd like to send this page to others, please use the following link:  https://www.sourceconsulting.com/give/
        </p>
        <p>
            You should see this transaction process within 2-3 business days.
        </p>
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
} catch(err) {}</script>