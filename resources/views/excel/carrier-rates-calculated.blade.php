<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<table>
    <tr>
        <td colspan="2" style="color:#4288CE;">
            <h1>Go Back</h1>
        </td>
        <td colspan="6">
            <h2>{{ $carrierRateTitle }}</h2>
        </td>
    </tr>
    <tr>
        <td colspan="8" style="color:#6096c3;">
            <strong>
                {{ $titles['q.1']['sheetTitle'] }} costs MORE THAN {{ $titles['q.2']['sheetTitle'] }}
            </strong>
        </td>
    </tr>
    <tr>
        <td colspan="8" style="color:#e33;">
            <strong>
                {{ $titles['q.1']['sheetTitle'] }} costs LESS THAN {{ $titles['q.2']['sheetTitle'] }}
            </strong>
        </td>
    </tr>
    <tr>
        <td align="center"><h4>Weight</h4></td>
        <td align="center"><h4>Zone 2</h4></td>
        <td align="center"><h4>Zone 3</h4></td>
        <td align="center"><h4>Zone 4</h4></td>
        <td align="center"><h4>Zone 5</h4></td>
        <td align="center"><h4>Zone 6</h4></td>
        <td align="center"><h4>Zone 7</h4></td>
        <td align="center"><h4>Zone 8</h4></td>
    </tr>
    @for($i = 0; $i < 150; $i++)
        <tr>
            <td align="center">{{ $i == 0 ? 'Letter' : $i.' lb' }}</td>
            @if($comparisonType == 'dollar')
                @for($z = 2; $z <=8; $z++)
                        @if($data['a'][$i.'-'.$z]['price'] > $data['b'][$i.'-'.$z]['price'])
                            <td style="color:#6096c3;" align="center" width="10" data-format="$#,##0.00_-">{{ round($data['a'][$i.'-'.$z]['price'] - $data['b'][$i.'-'.$z]['price'],2) }}</td>
                        @elseif($data['a'][$i.'-'.$z]['price'] < $data['b'][$i.'-'.$z]['price'])
                            <td style="color:#e33;" align="center" width="10" data-format="$#,##0.00_-">{{ round($data['a'][$i.'-'.$z]['price'] - $data['b'][$i.'-'.$z]['price'], 2)}}</td>
                        @else
                            <td align="center" width="10" data-format="$#,##0.00_-">{{ $data['a'][$i.'-'.$z]['price'] - $data['b'][$i.'-'.$z]['price'] }}</td>
                        @endif
                @endfor
            @elseif($comparisonType == 'percentage')
                @for($z = 2; $z <=8; $z++)
                    @if($data['a'][$i.'-'.$z]['price'] > $data['b'][$i.'-'.$z]['price'])
                        <td style="color:#6096c3;" align="center" width="10" data-format="0.00%">{{ round(1-($data['b'][$i.'-'.$z]['price']/$data['a'][$i.'-'.$z]['price']), 4)}}</td>
                    @elseif($data['a'][$i.'-'.$z]['price'] < $data['b'][$i.'-'.$z]['price'])
                        <td style="color:#e33;" align="center" width="10" data-format="0.00%">{{ round(1-($data['a'][$i.'-'.$z]['price']/$data['b'][$i.'-'.$z]['price']), 4)}}</td>
                    @else
                        <td align="center" width="10" data-format="0.00%">0</td>
                    @endif
                @endfor
            @endif
        </tr>
    @endfor
    </table>
</body>
</html>