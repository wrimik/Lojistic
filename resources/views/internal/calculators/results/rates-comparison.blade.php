<div class="row">
    <div class="col-xs-12">
        <h3>Your Rate Comparison Report
            <small>(see below)</small>
        </h3>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <table class="table-legend">
            <tbody>
            <tr>
                <td scope="row">-</td>
                <td class="less">Negative Number</td>
                <td>
                    {{ ucwords($a['carrier']) }} - {{ $a['type'] }} {{ urldecode($a['year']) }} costs
                    <strong class="less">less than</strong>
                    {{ ucwords($b['carrier']) }} - {{ $b['type'] }} {{ urldecode($b['year']) }}
                </td>
            </tr>
            <tr>
                <td scope="row">+</td>
                <td class="more">Positive Number</td>
                <td>
                    {{ ucwords($a['carrier']) }} - {{ $a['type'] }} {{ urldecode($a['year']) }} costs
                    <strong class="more">more than</strong>
                    {{ ucwords($b['carrier']) }} - {{ $b['type'] }} {{ urldecode($b['year']) }}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group no-margin">
            <label for="display-results">Display Results As:</label>
            <select name="comparison-results" id="comparison-results" data-toggle="tbody.dollars, tbody.percentages">
                <option value="dollars" selected>Difference in $</option>
                <option value="percentages">Difference in %</option>
            </select>
        </div>
    </div>
    <div class="col-sm-8 text-right">
        {{--<a class="btn-download excel-download" target="_blank"--}}
           {{--rel="nofollow" href="{{ route('download-excel', ['function'=>'compareRatesToExcel','q'=>Input::only('c.1','c.2')]) }}">--}}
            {{--<i class="eloji eloji-excel"></i> DOWNLOAD EXCEL--}}
        {{--</a>--}}
    </div>
</div>
<!-- Results Table -->
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
            <tbody class="dollars">
            @foreach($rates['a']->chunk(7) as $weight)
                @if(isset($rates['b'][$weight[0]->wz]))
                    <tr>
                        <td>{{ $weight[0]->weight == 0 ? 'Letter' : $weight[0]->weight.' lb'}}</td>
                        @foreach($weight as $zone)
                            <td class="{{ App\Helpers\App\Helpers\Swiss::moreOrLess($zone->price, $rates['b'][$zone->wz]->price) }}">
                                {{ App\Helpers\App\Helpers\Swiss::toMoney($zone->price - $rates['b'][$zone->wz]->price) }}
                            </td>
                        @endforeach
                    </tr>
                @endif
            @endforeach
            </tbody>
            <tbody class="percentages" style="display:none;">
            @foreach($rates['a']->chunk(7) as $weight)
                @if(isset($rates['b'][$weight[0]->wz]))
                    <tr>
                        <td>{{ $weight[0]->weight == 0 ? 'Letter' : $weight[0]->weight.' lb'}}</td>
                        @foreach($weight as $zone)
                            <td class="{{ App\Helpers\App\Helpers\Swiss::moreOrLess($zone->price, $rates['b'][$zone->wz]->price) }}">
                                {{ App\Helpers\App\Helpers\Swiss::toReversePercentage($zone->price,$rates['b'][$zone->wz]->price) }}
                            </td>
                        @endforeach
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
</div>


<script>
    $(document).ready(function () {
        //Init our dollars vs % comparison
        $('[data-toggle]').change(function () {
            var toggle = $(this).attr('data-toggle');
            $(toggle).toggle('fade');
        });
    });
</script>
