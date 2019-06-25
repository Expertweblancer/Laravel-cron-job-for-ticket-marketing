/*---- morrisBar1----*/
$(function(e) {
	'use strict';
	new Morris.Area({
		element: 'morrisBar-chart',
		behaveLikeLine: true,
		data: [{
			x: '2018 Q1',
			y: 0,
			z: 0
		}, {
			x: '2018 Q2',
			y: 2,
			z: 4
		}, {
			x: '2018 Q3',
			y: 4,
			z: 2
		}, {
			x: '2018 Q4',
			y: 2,
			z: 4
		}],
		xkey: 'x',
		ykeys: ['y', 'z'],
		lineColors: ['#fb8d34', '#623AA2'],
		labels: ['Y', 'Z']
	});
});
$(function(e) {
	'use strict';
	new Morris.Bar({
		element: 'morrisBar-graph',
		data: [{
			x: '2011 Q1',
			y: 0
		}, {
			x: '2011 Q2',
			y: 1
		}, {
			x: '2011 Q3',
			y: 2
		}, {
			x: '2011 Q4',
			y: 3
		}, {
			x: '2012 Q1',
			y: 4
		}, {
			x: '2012 Q2',
			y: 5
		}, {
			x: '2012 Q3',
			y: 6
		}, {
			x: '2012 Q4',
			y: 7
		}, {
			x: '2013 Q1',
			y: 8
		}],
		xkey: 'x',
		ykeys: ['y'],
		labels: ['Y'],
		barColors: function(row, series, type) {
			if (type === 'bar') {
				var red = Math.ceil(0 * row.y / this.ymax);
				return 'rgba(105,60,158, 0.9)';
			} else {
				return '#000';
			}
		}
	});
});