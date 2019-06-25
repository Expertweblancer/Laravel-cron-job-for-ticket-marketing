$(function(e) {
	'use strict';
	var chartdata3 = [{
		name: 'sales',
		type: 'bar',
		stack: 'Stack',
		data: [14, 18, 20, 14, 29, 21, 25, 14, 24]
	}, {
		name: 'Profit',
		type: 'bar',
		stack: 'Stack',
		data: [12, 14, 15, 50, 24, 24, 10, 20, 30]
	}];
	var option5 = {
		grid: {
			top: '6',
			right: '0',
			bottom: '17',
			left: '25',
		},
		xAxis: {
			data: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018'],
			axisLine: {
				lineStyle: {
					color: '#eaeaea'
				}
			},
			axisLabel: {
				fontSize: 10,
				color: '#000'
			}
		},
		yAxis: {
			splitLine: {
				lineStyle: {
					color: '#eaeaea'
				}
			},
			axisLine: {
				lineStyle: {
					color: '#eaeaea'
				}
			},
			axisLabel: {
				fontSize: 10,
				color: '#000'
			}
		},
		series: chartdata3,
		color: ['#623AA2', '#fb8d34']
	};
	var chart5 = document.getElementById('echart5');
	var barChart5 = echarts.init(chart5);
	barChart5.setOption(option5);
});