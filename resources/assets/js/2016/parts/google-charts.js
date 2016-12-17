google.load("visualization", "1", {packages: ["corechart"]});
function donutChart(jsonData, title, targetId) { //pie chart
    var data = google.visualization.arrayToDataTable(jsonData);
    var options = {
        title: title,
        pieHole: 0.4,
        legend: 'none',
        colors: ['#00C853', '#164260', '#FFF000', '#00ACED'],
        slices: {  1: {offset: 0.2},
                    2: {offset: 0.2},
                    3: {offset: 0.2},
                    4: {offset: 0.2}
                }
    };
    var chart = new google.visualization.PieChart(document.getElementById(targetId));
    chart.draw(data, options);
}