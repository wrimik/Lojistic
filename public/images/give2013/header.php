<?php
//$query = "SELECT SUM(donation_amount) AS amt FROM donations;";
//$result= $dbc->query($query);

//$donated= $result[0]['amt'];
$donated= 2600;
$raised = 2 * $donated;
$goal = 5000;
$display_goal = '$' . number_format($goal);
$width = ($donated / $goal) * 100;
if($width > 50){
    $width = 50;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Greater Good 2013 Holiday Giving - Source Consulting</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:image" content="give.jpg" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
        <script src="giving.js" ></script>
        <script src="jscroll.js" ></script>
        <link rel="icon" type="image/vnd.microsoft.icon" href="//www.sourceconsulting.com/favicon.ico" />
        <link rel="shortcut icon" type="image/x-icon" href="//www.sourceconsulting.com/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="fonts.css" />
        <link rel="stylesheet" type="text/css" href="giving.css" />
    </head>
    <body>
        <div id="header">
            <div>
                <a target="_blank" href="http://www.sourceconsulting.com/"><img src="logo.png"/></a>
                <span><b>GREATER GOOD</b> COLLECTIVE</span>
                <span>giving back to the community | <b>(800) 783-5753</b></span>
            </div>
        </div>
        <div id="pageframe">
            <div id="banner"><img src="give.jpg"/><?php
                if($show_button){
                    ?><div id='give_now' class='button'>Give Today</div><?php
                }?>
            </div>
            <div id="goal">
                <div id="total">
                    OUR GOAL<br/>
                    <span><i>$</i><?php echo number_format($goal); ?><i>+</i></span>
                    <b>TO HELP 15+ FAMILIES</b>
                </div>
                <div id="progress">
                    <div id="icons">
                        <?php
                        $n = 1;
                        $template = "<div class='icon %s'></div>";
                        $fams = floor($raised / 500);
                        $num_donated = floor($fams/2);
                        $num_matched = ceil($fams/2);
                        
                        echo str_repeat(sprintf($template, 'donated'), $num_donated);
                        echo str_repeat(sprintf($template, 'matched'), $num_matched);
                        
                        if ($fams < 15) {
                            echo str_repeat(sprintf($template, 'pending'), 15 - ($num_donated + $num_matched));
                        }
                        ?>
                    </div>
                    <div id="bar">
                        <div id="collected" style="width: <?php echo $width; ?>%">
                            Donated:<br/>
                            <?php echo $donated; ?>
                        </div>
                        <div id="matched"   style="width: <?php echo $width; ?>%">
                            Matched:<br/>
                            <?php echo $donated; ?>
                        </div>
                    </div>
                    <div id="markers">
                        <table>
                            <tbody>
                                <tr>
                                    <td>$0</td>
                                    <td>Total Raised: $<?php echo number_format($raised); ?></td>
                                    <td>Goal: <?php echo $display_goal; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <table id="social">
                <h1>(This years drive has closed)</h1>
                <tbody>
                    <tr>
                        <td>
                            <a class="button" target="_blank" href="http://tinyurl.com/msbw8bk">
                                SHARE ON FACEBOOK
                            </a>
                        </td>
                        <td>
                            <a class="button" target="_blank" href="http://tinyurl.com/ml6wdoe">
                                SHARE ON TWITTER
                            </a>
                        </td>
                    </tr>
            </table>