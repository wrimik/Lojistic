function insurance() {
    var value = Math.ceil(number($('#dec_val').val()) / 100);
    var num = number($('#num').val());
    var min = number($('#min').val());
    var carrier_rate = number($('#carrier_rate').val());
    var source_rate = 0.4;
    var old_price = 0;
    var new_price = 0;

    if (value * carrier_rate < min) {
        old_price = min;
    } else {
        old_price = value * carrier_rate;
    }

    new_price = value * source_rate;

    old_price = old_price * num;
    new_price = new_price * num;
    if (old_price <= new_price) {
        $('#results').addClass('hidden');
        $('#dang').removeClass('hidden');
    }else{
        if (isNaN(old_price) || isNaN(new_price)) {
            alert('Please complete the fields with numbers only');
        } else {
            $('#old .price b').text(floatToMoney(old_price));
            $('#new .price b').text(floatToMoney(new_price));
            $('#results').removeClass('hidden');
            $('#dang').addClass('hidden');
            drawInsChart(old_price, new_price);
        }
    }
}

$(document).on('click', '.calculate', function() {
    insurance();
});
$(document).on('click', '.edit', function() {
    $(this).prev('b').hide();
    $(this).prev('b').prev('input').show();
    $(this).hide();
    $('.rates .calculate').show();
});
//$(document).ready(function() {
//    $('#calc input').each(function() {
//        var value = $(this).attr('data-default');
//        $(this).val(value);
//    });
//});

google.load("visualization", "1", {packages: ["corechart"]});
function drawInsChart(old_price, new_price) {
    var op = 0,
        np = 0,
        savings = 0;
    var months = [  'Jan', 'Feb', 'Mar',
                    'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep',
                    'Oct', 'Nov', 'Dec'];
    var month = new Date().getMonth();
    var cols  = [['Month', 'Carrier Price', 'Our Price', 'Savings']];
    var n     = 0;

    while (n < 12) {
        op = (old_price * (n + 1));//.toFixed(2);
        np = (new_price * (n + 1));//.toFixed(2);
        savings = op - np;
        cols.push([months[month], op, np, savings]);
        ++month;
        if (month > 11) {
            month = 0;
        }
        n++;
    }
    $('#chart_total').text(floatToMoney(savings));
    var data = google.visualization.arrayToDataTable(cols);

    var options = {
        title: 'Cumulative Insurance Spending',
        hAxis: {title: 'Month', prefix: "$"}, //, titleTextStyle: {color: 'red'}}
        colors: ['#EB1C24', '#6096c3', '#00c651']
    };
    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
    chart.draw(data, options);
    $(window).trigger('resize');
}