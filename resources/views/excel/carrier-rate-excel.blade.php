<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<table cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td colspan="4" style="background-color:#f4f4f4;"><img src="{{ public_path('/images/lojistic-excel-logo.png') }}" alt="Lojistic"/></td>
        <td style="background-color:#f4f4f4;"></td>
        <td colspan="3" valign="middle" align="right" style="background-color:#f4f4f4;font-size:14px;font-weight:bold;">
            Run Another Calculation At:
        </td>
        <td colspan="2" valign="middle" align="left" style="background-color:#f4f4f4;font-size:14px;font-weight:bold;">
            <a rel="nofollow" href="http://www.Lojistic.com">Lojistic.com</a>
        </td>
    </tr>
    <tr>
        <td width="12" style="background-color:#f4f4f4;"></td>
        <td width="12" style="background-color:#f4f4f4;"></td>
        <td width="12" style="background-color:#f4f4f4;"></td>
        <td width="12" style="background-color:#f4f4f4;"></td>
        <td width="12" style="background-color:#f4f4f4;"></td>
        <td width="12" style="background-color:#f4f4f4;"></td>
        <td width="12" style="background-color:#f4f4f4;"></td>
        <td width="12" style="background-color:#f4f4f4;"></td>
        <td width="12" style="background-color:#f4f4f4;"></td>
        <td width="12" style="background-color:#f4f4f4;"></td>
    </tr>
    <tr>
        <td colspan="2" align="left" style="background-color:#f4f4f4;font-size:14px;font-weight:bold;">
            Wanna Chat With Us?
        </td>
        <td colspan="2" align="left" style="background-color:#f4f4f4;font-size:14px;font-weight:bold;">
            <a rel="nofollow" href="mailto:info@lojistic.com">Info@Lojistic.com</a>
        </td>
        <td colspan="2" style="background-color:#f4f4f4;font-size:14px;font-weight:bold;" align="left">(800) 783-5753</td>
        <td style="background-color:#f4f4f4;" colspan="4"></td>
    </tr>
    <tr>
        <td colspan="10" height="21" style="background-color:#f4f4f4;"></td>
    </tr>
    <tr>
        <td colspan="2" style="background-color:#fff"></td>
        <td colspan="6" height="36" valign="middle" align="center" style="color:#fff;background-color:#6096c3;">
            <h2>{{ $titles['heading'] }}</h2>
        </td>
        <td colspan="2" style="background-color:#fff"></td>
    </tr>
    <tr>
        <td colspan="10" height="21" style="background-color:#fff;"></td>
    </tr>
    {{-- IF THERE ARE GENERAL DISCOUNTS!!--}}
    <tr>
        <td colspan="2" style="background-color:#fff"></td>
        @if(isset($query['advanced']))
            <td height="28" colspan="3" valign="middle" align="center" style="font-weight:bold;color:#fff;background-color:#6096c3;font-size:14px;">
                {{ $query['carrier'] == 'UPS' ? ' UPS Tier Incentive' : 'FedEx Earned Discount' }}
            </td>
            <td colspan="3" align="center" valign="middle" style="font-weight:bold;color:#fff;background-color:#6096c3;font-size:14px;">
                Min Net Charge
            </td>
        @else
            <td height="28" colspan="3" valign="middle" align="center" style="font-weight:bold;color:#fff;background-color:#6096c3;font-size:14px;">{{ $query['carrier'] }} Discount</td>
            <td colspan="3" valign="middle" align="center" style="font-weight:bold;color:#fff;background-color:#6096c3;font-size:14px;">Min Net Charge</td>
        @endif
        <td colspan="2" style="background-color:#fff"></td>
    </tr>
    <tr>
        <td colspan="2" style="background-color:#fff"></td>
        @if(isset($query['advanced']))
            <td data-format="0.00%" colspan="3" align="center" style="background-color:#f4f4f4;">
                {{ empty($query['tier']) ? '' : $query['tier']/100 }}
            </td>
            <td data-format="$#,##0.00_-" colspan="3" align="center" style="background-color:#f4f4f4;">
                {{ $query['minimum'] }}
            </td>
        @else
            <td data-format="0%" colspan="3" align="center" style="background-color:#f4f4f4;">
                {{ empty($query['general']) ? '' : $query['general']/100 }}
            </td>
            <td data-format="$#,##0.00_-" colspan="3" align="center" style="background-color:#f4f4f4;">
                {{ $query['minimum'] }}
            </td>
        @endif
        <td colspan="2" style="background-color:#fff"></td>
    </tr>
    {{-- /IF THERE ARE GENERAL DISCOUNTS!!--}}
    <tr>
        <td colspan="10" style="background-color:#fff;"></td>
    </tr>
    {{-- IF THERE IS WEIGHT BREAK DISCOUNTS!!--}}
    @if($advancedDiscounts)
        <tr>
            <td colspan="2" style="background-color:#fff"></td>
            <td colspan="6" align="center" style="font-size:14px;background-color:#6096c3;color:#fff;">Weight Break Discounts</td>
            <td colspan="2" style="background-color:#fff"></td>
        </tr>
        <tr>
            <td colspan="2" style="background-color:#fff"></td>
            <td height="18" valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">Letter:</td>
            <td align="right" data-format="0.00%" style="background-color:#fff;">
                {{ empty($query['discounts'][0]) ? '' : $query['discounts'][0]/100 }}
            </td>
            <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">1-5 lb:</td>
            <td align="right" data-format="0.00%" style="background-color:#fff;">
                {{ empty($query['discounts']['1-5']) ? '' : $query['discounts']['1-5']/100 }}
            </td>
            <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">6-10 lb:</td>
            <td align="right" data-format="0.00%" style="background-color:#fff;">
                {{ empty($query['discounts']['6-10']) ? '' : $query['discounts']['6-10']/100 }}
            </td>
            <td colspan="2" style="background-color:#fff"></td>
        </tr>
        <tr>
            <td colspan="2" style="background-color:#fff"></td>
            <td height="18" valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">11-15 lb:</td>
            <td align="right" data-format="0.00%" style="background-color:#fff;">
                {{ empty($query['discounts']['11-15']) ? '' : $query['discounts']['11-15']/100 }}
            </td>
            <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">16-20 lb:</td>
            <td align="right" data-format="0.00%" style="background-color:#fff;">
                {{ empty($query['discounts']['16-20']) ? '' : $query['discounts']['16-20']/100 }}
            </td>
            <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">21-25 lb:</td>
            <td align="right" data-format="0.00%" style="background-color:#fff;">
                {{ empty($query['discounts']['21-25']) ? '' : $query['discounts']['21-25']/100 }}
            </td>
            <td colspan="2" style="background-color:#fff"></td>
        </tr>
        <tr>
            <td colspan="2" style="background-color:#fff"></td>
            <td height="18" valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">26-30 lb:</td>
            <td align="right" data-format="0.00%" style="background-color:#fff;">
                {{ empty($query['discounts']['26-30']) ? '' : $query['discounts']['26-30']/100 }}
            </td>
            <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">31-35 lb:</td>
            <td align="right" data-format="0.00%" style="background-color:#fff;">
                {{ empty($query['discounts']['31-35']) ? '' : $query['discounts']['31-35']/100 }}
            </td>
            <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">36-40 lb:</td>
            <td align="right" data-format="0.00%" style="background-color:#fff;">
                {{ empty($query['discounts']['36-40']) ? '' : $query['discounts']['36-40']/100 }}
            </td>
            <td colspan="2" style="background-color:#fff"></td>
        </tr>
        <tr>
            <td colspan="2" style="background-color:#fff"></td>
            <td height="18" valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">41-45 lb:</td>
            <td align="right" data-format="0.00%" style="background-color:#fff;">
                {{ empty($query['discounts']['41-50']) ? '' : $query['discounts']['41-45']/100 }}
            </td>
            <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">46-70 lb:</td>
            <td align="right" data-format="0.00%" style="background-color:#fff;">
                {{ empty($query['discounts']['46-70']) ? '' : $query['discounts']['46-70']/100 }}
            </td>
            <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">71-150 lb:</td>
            <td align="right" data-format="0.00%" style="background-color:#fff;">
                {{ empty($query['discounts']['71-150']) ? '' : $query['discounts']['71-150']/100 }}
            </td>
            <td colspan="2" style="background-color:#fff"></td>
        </tr>
        <tr>
            <td colspan="10" style="background-color:#fff;"></td>
        </tr>
        {{-- ENDIF THERE IS WEIGHT BREAK DISCOUNTS!!!--}}
    @endif
    {{-- /IF THERE ARE DISCOUNTS!!!--}}
    <tr><td colspan="10" style="background-color:#fff;"></td></tr>
    <tr>
        <td style="background-color:#fff;"></td>
        <td align="center" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">Weight</td>
        <td align="center" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">Zone 2</td>
        <td align="center" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">Zone 3</td>
        <td align="center" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">Zone 4</td>
        <td align="center" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">Zone 5</td>
        <td align="center" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">Zone 6</td>
        <td align="center" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">Zone 7</td>
        <td align="center" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">Zone 8</td>
        <td style="background-color:#fff;"></td>
    </tr>
    <tr>
        <td></td>
        <td align="left">Letter</td>
        @for($l = 2; $l <=8; $l++)
            <td align="center" data-format="$#,##0.00_-">{{ number_format(isset($rates['0-'.$l]) ? @$rates['0-'.$l]['price'] : @$rates['1-'.$l]['price'],0) }}</td>
        @endfor
    </tr>
    @for($i = 1; $i < 151; $i++)
        @if(isset($rates[$i.'-2']))
        <tr>
            <td></td>
            <td align="left">{{$i}} lb</td>
            @for($z = 2; $z <=8; $z++)
                <td align="center" data-format="$#,##0.00_-">{{ number_format(@$rates[$i.'-'.$z]['price'],2) }}</td>
            @endfor
        </tr>
        @endif
    @endfor
</table>
</body>
</html>