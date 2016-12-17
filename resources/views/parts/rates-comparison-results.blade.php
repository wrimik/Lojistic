<div class="row">
    <div class="col-xs-12">
        <h3>Your Rate Comparison Report
            <span>(see below)</span>
        </h3>
        <p class="results-disclaimer">
            Rates shown are not inclusive of any surcharges or accessorial fees
            (Fuel surcharge, residential surcharge, delivery area surcharge, etc.).
            Carrier rates are based upon current published UPS and FedEx rate schedules.
            &nbsp; Lojistic does not assume liability for the accuracy of
            information input into the web tool(s) by users.&nbsp; Please contact Lojistic
            directly for help with a custom UPS and/or FedEx rate analysis.
        </p>
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
                        {{ ucwords($a['service']['carrier']) }} - {{ $a['service']['name'] }} {{ urldecode($a['service']['year']) }} costs
                        <strong class="less">less than</strong>
                        {{ ucwords($b['service']['carrier']) }} - {{ $b['service']['name'] }} {{ urldecode($b['service']['year']) }}
                    </td>
                </tr>
                <tr>
                    <td scope="row">+</td>
                    <td class="more">Positive Number</td>
                    <td>
                        {{ ucwords($a['service']['carrier']) }} - {{ $a['service']['name'] }} {{ urldecode($a['service']['year']) }} costs
                        <strong class="more">more than</strong>
                        {{ ucwords($b['service']['carrier']) }} - {{ $b['service']['name'] }} {{ urldecode($b['service']['year']) }}
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
        <h3>
            <a href="#" id="show-all-rows" class="font-bolder">
                <strong>
                + Show All Rows
                </strong>
            </a>
        </h3>
    </div>
</div>
<!-- Results Table -->
<div class="row">
    <div class="col-xs-12">
        <div class="table-mask">
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
                    @for($weight = 0; $weight < 151; $weight++)
                        <tr>
                            <td>
                                @if($weight == 0)
                                    Letter
                                @else
                                    {{ $weight }} lb
                                @endif
                            </td>
                            @for($zone = 2; $zone <=8; $zone++)
                                <td class="{{ $rates[$weight][$zone]['discountedPrice'] > 0 ? 'more' : 'less'}}">
                                    @if($weight == 0 && !isset($rates[$weight][$zone]['discountedPrice']))
                                        ${{ number_format(@$rates[1][$zone]['discountedPrice'], 2) }}
                                    @else
                                        @if(isset($rates[$weight][$zone]))
                                            ${{ number_format(@$rates[$weight][$zone]['discountedPrice'],2) }}
                                        @else
                                            N/A
                                        @endif
                                    @endif
                                </td>
                            @endfor
                        </tr>
                    @endfor
                </tbody>
                <tbody class="percentages" style="display:none;">
                @for($weight = 0; $weight < 151; $weight++)
                    <tr>
                        <td>
                            @if($weight == 0)
                                Letter
                            @else
                                {{ $weight }} lb
                            @endif
                        </td>
                        @for($zone = 2; $zone <=8; $zone++)
                            <td class="{{ $rates[$weight][$zone]['discountedPrice'] > 0 ? 'more' : 'less'}}">
                                @if($weight == 0 && !isset($rates[$weight][$zone]))
                                    {{ $rates[1][$zone]['percentage'] }}%
                                @else
                                    @if(isset($rates[$weight][$zone]))
                                        {{ $rates[$weight][$zone]['percentage'] }}
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
</div>
<div class="table-pulldown">
    <div class="pulldown-body">
        <div class="pulldown-label" data-target="#calc-results">
            Show All Rows
            <i class="fa fa-chevron-down"></i>
        </div>
        {{--<a class="btn-download excel-download" target="_blank" href="{{ route('download-excel', ['function'=>'compareRatesToExcel','q'=>Input::only('c.1','c.2')]) }}">--}}
            {{--<i class="eloji eloji-excel"></i> DOWNLOAD EXCEL--}}
        {{--</a>--}}
    </div>
</div>

<script>
    $(document).ready(function(){
        //Init our table mask
        $('.pulldown-label, #show-all-rows').click(toggleHiddenRows);

        //Init our dollars vs % comparison
        $('[data-toggle]').change(function(){
            var toggle = $(this).attr('data-toggle');
            $(toggle).toggle('fade');
        });
    });
</script>

{{-- MAKE OUR ERROR IF BAD EMAIL IS PROVIDED!!!--}}
@if(Session::has('warning_error'))
    <script>
        $(document).ready(function(){
            $('.peetnochio').css(
                    {
                        'display':'block',
                        'position':'fixed',
                        'bottom':'45px',
                        'left':'0'
                    }
            );
            $('.peetnochio .peetnochio-nose').css('width', '+=25');
            $.notify('{{ Session::get('warning_error') }}' ,
                    {
                        style: 'wrapWarning',
                        className: 'warning',
                        autoHide: false
                    });
        });
    </script>
@endif
{{-- AJAX EMAIL EXCEL IF WE NEED IT!!!! ALSO REQUIRES NOTIFICATION THAT WE EMAILED!! --}}
@if(Session::has('email_excel'))
    <script>
        $(document).ready(function(){
            $('.peetnochio .peetnochio-nose').css('width', '25');
            emailExcelResults();
        });

        function emailExcelResults(){
            return false; //temporary
            $.ajax({
                url: '{{route('email-excel', ['function'=>'compareRatesToExcel'])}}',
                method: 'POST',
                success: function(data){
                    if(data.success) {
                        $.notify(data.message, {
                            style: 'wrapWarning',
                            className: 'info',
                            autoHide: false
                            }
                        );
                    }
                }
            });
        }
    </script>
@endif

