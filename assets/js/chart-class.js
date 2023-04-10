jQuery(document).ready(function($) {

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable($.parseJSON(plugin_tgdffw_chart.data));
    
    var options = {
        title: 'Tip / Donation Received',
        pointSize: 3,
        lineWidth: 1,
        fillColor: "#478ac9",
        curveType: 'function',
        legend: { position: 'bottom' }
    };
    
    var chart = new google.visualization.AreaChart(document.getElementById('curve_chart'));
    chart.draw(data, options);
}

});