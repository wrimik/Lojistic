<hr />
<div class="row">
    <h2>{{ ucwords($service['carrier']).' '.urldecode($service['year']).' '.$service['name'] }}</h2>
    <h3>
        <a href="#" id="show-all-rows" class="font-bold pull-right">
            <strong>+ Show All Rows</strong>
        </a>
    </h3>
</div>
<br />
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
                <tbody>
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
                            <td class="more">
                            @if($weight == 0 && !isset($rates[$weight][$zone]))
                                ${{ number_format(@$rates[1][$zone]['discountedPrice'],2) }}
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
            </table>
        </div>
        <div class="table-pulldown">
            <div class="pulldown-body">
                <div class="pulldown-label" data-target="#calc-results">
                    Show All Rows
                    <i class="fa fa-chevron-down"></i>
                </div>
                {{--<a class="btn-download excel-download" target="_blank" href="/ajax/rates-calculator/download/?{{  http_build_query( Input::all() ) }}">--}}
                    {{--<i class="eloji eloji-excel"></i> DOWNLOAD EXCEL--}}
                {{--</a>--}}
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.pulldown-label, #show-all-rows').click(toggleHiddenRows);
    });
</script>
{{-- MAKE OUR ERROR IF BAD EMAIL IS PROVIDED!!!--}}
@if(Session::has('warning_error'))
    <script>
        $('.peetnochio').css(
            {
                'display':'block',
                'position':'fixed',
                'left':'0',
                'bottom':'45px'
            }
        );
        $('.peetnochio .peetnochio-nose').css('width', '+=25');
        $(document).ready(function(){
            $.notify('{{ Session::get('warning_error') }}',
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
            $.ajax({
                url: '{{route('email-excel', ['function'=>'carrierRatesToExcel'])}}',
                method: 'POST',
                success: function(data){
                    if(data.success) {
                        $.notify(data.message, {
                            style: 'wrapWarning',
                            className: 'info',
                            autoHide: false
                        });
                    }
                }
            });
        }
    </script>
@endif