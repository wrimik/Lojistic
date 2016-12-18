<div class="row text-right">
    {{--<a class="btn-download excel-download" target="_blank" rel="nofollow" href="{{ route('download-excel', ['function'=>'carrierRatesToExcel','q'=>Input::except('_token')]) }}">--}}
        {{--<i class="eloji eloji-excel"></i> DOWNLOAD EXCEL--}}
    {{--</a>--}}
</div>
<hr />
<div class="row">
    <h2>{{ ucwords($carrier).' '.$year.' '.$service }}</h2>
</div>
<br />
<div class="row">
    <div class="col-xs-12">
        <table id="rate-calculator-table" class="table-checkered">
            <thead>
            <tr>
                <th>Weight</th>
                <th>Zone 2</th>
                <th>Zone 3</th>
                <th>Zone 4</th>
                <th>Zone 5</th>
                <th>Zone 6</th>
                <th>Zone 7</th>
                <th>Zone 8</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < 151; $i++)
                <tr>
                    <td>
                        @if($i == 0)
                            Letter
                        @else
                            {{ $i }} lb
                        @endif
                    </td>
                    @for($w = 2; $w <=8; $w++)
                        <td class="more">
                            @if($i == 0 && !isset($rates[$i.'-'.$w]))
                                ${{ number_format($rates['1-'.$w]->price,2) }}
                            @else
                                @if(isset($rates[$i.'-'.$w]))
                                    ${{ number_format($rates[$i.'-'.$w]->price,2) }}
                                @else
                                    N/A
                                @endif
                            @endif
                        </td>
                    @endfor
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
</div>