<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<table cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td colspan="4" style="background-color:#f4f4f4;"><img src="{{ public_path('/images/lojistic-excel-logo.png') }}" alt="Lojistic"/></td>
        <td colspan="3" style="background-color:#f4f4f4;"></td>
        <td colspan="5" align="right" valign="middle" style="color:#14324C;background-color:#f4f4f4;">
            <h2>CARRIER RATE COMPARISON WORKSHEET</h2>
        </td>
        <td style="background-color:#f4f4f4;"></td>
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
        <td style="background-color:#f4f4f4;"></td>
        <td style="background-color:#f4f4f4;"></td>
        <td colspan="3" align="right" style="background-color:#f4f4f4;font-size:14px;font-weight:bold;">
            Run Another Comparison At:
        </td>
        <td colspan="2" align="left" style="background-color:#f4f4f4;font-size:14px;font-weight:bold;">
            <a rel="nofollow" href="http://www.Lojistic.com">Lojistic.com</a>
        </td>
    </tr>
    <tr>
        <td colspan="13" height="21" style="background-color:#f4f4f4;"></td>
    </tr>
    <tr>
        <td colspan="6" height="36" valign="middle" align="center" style="color:#fff;background-color:#6096c3;">
            <h2>{{ $titles['q.1']['sheetTitle'] }}</h2>
        </td>
        <td align="center" valign="middle" style="font-size:16px;font-weight:bold;">
            Vs
        </td>
        <td colspan="6" valign="middle" align="center" style="color:#fff;background-color:#EB1C24;">
            <h2>{{ $titles['q.2']['sheetTitle'] }}</h2>
        </td>
    </tr>
    <tr>
        <td colspan="13" height="21" style="background-color:#fff;"></td>
    </tr>
    {{-- IF THERE ARE GENERAL DISCOUNTS!!--}}
    <tr>
        @foreach($q['c'] as $c => $rates)
            <?php $bg = $c == '1' ? '#6096c3' : '#EB1C24'; ?>
            @if(isset($rates['advanced']))
                <td height="28" colspan="3" valign="middle" align="center" style="font-weight:bold;color:#fff;background-color:{{$bg}};font-size:14px;">
                    {{ $rates['carrier'] ==  'UPS' ? 'UPS Tier Incentive' : 'FedEx Earned Discount'}}
                </td>
                <td colspan="3" align="center" valign="middle" style="font-weight:bold;color:#fff;background-color:{{$bg}};font-size:14px;">
                    Min Net Charge
                </td>
            @else
                <td height="28" colspan="3" valign="middle" align="center" style="font-weight:bold;color:#fff;background-color:{{$bg}};font-size:14px;">{{ $rates['carrier'] }} Discount</td>
                <td colspan="3" valign="middle" align="center" style="font-weight:bold;color:#fff;background-color:{{$bg}};font-size:14px;">Min Net Charge</td>
            @endif
            @if($c == '1')
                <td style="background-color:#fff;"></td>
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($q['c'] as $c => $rates)
            @if(isset($rates['advanced']))
                <td data-format="0.00%" colspan="3" align="center" style="background-color:#f4f4f4;">
                    {{ empty($rates['tier']) ? '' : $rates['tier']/100 }}
                </td>
                <td data-format="$#,##0.00_-" colspan="3" align="center" style="background-color:#f4f4f4;">
                    {{ $rates['minimum'] }}
                </td>
            @else
                <td data-format="0%" colspan="3" align="center" style="background-color:#f4f4f4;">
                    {{ empty($rates['general']) ? '' : $rates['general']/100 }}
                </td>
                <td data-format="$#,##0.00_-" colspan="3" align="center" style="background-color:#f4f4f4;">
                    {{ $rates['minimum'] }}
                </td>
            @endif
            @if($c == '1')
                <td style="background-color:#fff;"></td>
            @endif
        @endforeach
    </tr>
    {{-- /IF THERE ARE GENERAL DISCOUNTS!!--}}
    <tr>
        <td colspan="13" style="background-color:#fff;"></td>
    </tr>
    {{-- IF THERE IS WEIGHT BREAK DISCOUNTS!!--}}
    @if($advancedDiscounts)
    <tr>
        @foreach($q['c'] as $c => $rates)
            @if(isset($rates['advanced']))
                <td colspan="6" align="center" style="font-size:14px;background-color:{{$c == '1' ? '#6096c3':'#EB1C24'}};color:#fff;">Weight Break Discounts</td>
            @else
                <td colspan="6" align="center" style="font-size:14px;background-color:#fff;"></td>
            @endif
            @if($c == '1')
                <td style="background-color:#fff;"></td>
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($q['c'] as $c => $rates)
            @if(isset($rates['advanced']))
                <td height="18" valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">Letter:</td>
                <td align="right" data-format="0.00%" style="background-color:#fff;">
                    {{ empty($rates['discounts'][0]) ? '' : $rates['discounts'][0]/100 }}
                </td>
                <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">1-5 lb:</td>
                <td align="right" data-format="0.00%" style="background-color:#fff;">
                    {{ empty($rates['discounts']['1-5']) ? '' : $rates['discounts']['1-5']/100 }}
                </td>
                <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">6-10 lb:</td>
                <td align="right" data-format="0.00%" style="background-color:#fff;">
                    {{ empty($rates['discounts']['6-10']) ? '' : $rates['discounts']['6-10']/100 }}
                </td>
            @else
                <td height="18" colspan="6" style="background-color:#fff;"></td>
            @endif
            @if($c == '1')
                <td style="background-color:#fff;"></td>
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($q['c'] as $c => $rates)
            @if(isset($rates['advanced']))
                <td height="18" valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">11-15 lb:</td>
                <td align="right" data-format="0.00%" style="background-color:#fff;">
                    {{ empty($rates['discounts']['11-15']) ? '' : $rates['discounts']['11-15']/100 }}
                </td>
                <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">16-20 lb:</td>
                <td align="right" data-format="0.00%" style="background-color:#fff;">
                    {{ empty($rates['discounts']['16-20']) ? '' : $rates['discounts']['16-20']/100 }}
                </td>
                <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">21-25 lb:</td>
                <td align="right" data-format="0.00%" style="background-color:#fff;">
                    {{ empty($rates['discounts']['21-25']) ? '' : $rates['discounts']['21-25']/100 }}
                </td>
            @else
                <td height="18" colspan="6" style="background-color:#fff;"></td>
            @endif
            @if($c == '1')
                <td style="background-color:#fff;"></td>
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($q['c'] as $c => $rates)
            @if(isset($rates['advanced']))
                <td height="18" valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">26-30 lb:</td>
                <td align="right" data-format="0.00%" style="background-color:#fff;">
                    {{ empty($rates['discounts']['26-30']) ? '' : $rates['discounts']['26-30']/100 }}
                </td>
                <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">31-35 lb:</td>
                <td align="right" data-format="0.00%" style="background-color:#fff;">
                    {{ empty($rates['discounts']['31-35']) ? '' : $rates['discounts']['31-35']/100 }}
                </td>
                <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">36-40 lb:</td>
                <td align="right" data-format="0.00%" style="background-color:#fff;">
                    {{ empty($rates['discounts']['36-40']) ? '' : $rates['discounts']['36-40']/100 }}
                </td>
            @else
                <td height="18" colspan="6" style="background-color:#fff;"></td>
            @endif
            @if($c == '1')
                <td style="background-color:#fff;"></td>
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($q['c'] as $c => $rates)
            @if(isset($rates['advanced']))
                <td height="18" valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">41-45 lb:</td>
                <td align="right" data-format="0.00%" style="background-color:#fff;">
                    {{ empty($rates['discounts']['41-50']) ? '' : $rates['discounts']['41-45']/100 }}
                </td>
                <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">46-70 lb:</td>
                <td align="right" data-format="0.00%" style="background-color:#fff;">
                    {{ empty($rates['discounts']['46-70']) ? '' : $rates['discounts']['46-70']/100 }}
                </td>
                <td valign="middle" style="background-color:#f4f4f4;font-weight:bold;font-size:12px;">71-150 lb:</td>
                <td align="right" data-format="0.00%" style="background-color:#fff;">
                    {{ empty($rates['discounts']['71-150']) ? '' : $rates['discounts']['71-150']/100 }}
                </td>
            @else
                <td height="18" colspan="6" style="background-color:#fff;"></td>
            @endif
            @if($c == '1')
                <td style="background-color:#fff;"></td>
            @endif
        @endforeach
    </tr>
    <tr>
        <td colspan="13" style="background-color:#fff;"></td>
    </tr>
    {{-- ENDIF THERE IS WEIGHT BREAK DISCOUNTS!!!--}}
    @endif
    {{-- /IF THERE ARE DISCOUNTS!!!--}}
    @if(isset($coverCalculations) && $coverCalculations)
        @include('excel.partials.comparison-formulas')
    @endif
</table>
</body>
</html>