(function($) {
	"use strict";
	var ctx = document.getElementById("lineChart1");
	ctx.height = 100;
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018"],
			datasets: [{
				label: "Profit",
				borderColor: "rgba(105,60,158, 0.9)",
				borderWidth: "1",
				backgroundColor: "rgb( 105,60,158,0.9)",
				data: [0, 30, 60, 25, 60, 25, 50, 10, 50, 90, 120]
			}, {
				label: "sales",
				borderColor: "rgba(255, 126, 95, 0.9)",
				borderWidth: "1",
				backgroundColor: "rgba(241, 141, 52, 0.9)",
				pointHighlightStroke: "rgba(48,94,161, 0.9)",
				data: [0, 60, 25, 100, 20, 75, 30, 55, 20, 60, 20],
			}]
		},
		options: {
			responsive: true,
			tooltips: {
				mode: 'index',
				intersect: false,
			},
			tooltips: {},
			hover: {
				mode: 'nearest',
				intersect: true
			}
		}
	});
})(jQuery);
(function($) {
	new Morris.Donut({
		element: 'morrisBar8',
		data: [{
			value: 50,
			label: 'data1'
		}, {
			value: 35,
			label: 'data2'
		}, {
			value: 10,
			label: 'data3'
		}],
		colors: ['#6c3e9d', '#4c42c5', '#24CBE5'],
		formatter: function(x) {
			return x + "%"
		}
	}).on('click', function(i, row) {
		console.log(i, row);
	});
});