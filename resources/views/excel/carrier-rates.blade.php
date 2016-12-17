<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<table>
    <tr>
        <td colspan="8">
            <h2>{{ $carrierRateTitle }}</h2>
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
        @if(isset($data[$i.'-2']))
        <tr>
            <td align="center">{{ $i == 0 ? 'Letter' : $i.' lb' }}</td>
            <td align="center" data-format="$#,##0.00_-">{{ number_format($data[$i.'-2']['price'],2) }}</td>
            <td align="center" data-format="$#,##0.00_-">{{ number_format($data[$i.'-3']['price'],2) }}</td>
            <td align="center" data-format="$#,##0.00_-">{{ number_format($data[$i.'-4']['price'],2) }}</td>
            <td align="center" data-format="$#,##0.00_-">{{ number_format($data[$i.'-5']['price'],2) }}</td>
            <td align="center" data-format="$#,##0.00_-">{{ number_format($data[$i.'-6']['price'],2) }}</td>
            <td align="center" data-format="$#,##0.00_-">{{ number_format($data[$i.'-7']['price'],2) }}</td>
            <td align="center" data-format="$#,##0.00_-">{{ number_format($data[$i.'-8']['price'],2) }}</td>
        </tr>
        @endif
    @endfor
</table>
</body>
</html>