 $(function(e) {
 	'use strict';
 	new Morris.Bar({
 		element: 'morrisBar4',
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
 				return 'rgb( 98, 58, 162, 0.5)';
 				return 'rgb( 98, 58, 162, 0.5)';
 			} else {
 				return '#000';
 			}
 		}
 	});
 });
 $(function(e) {
 	'use strict';
 	new Morris.Area({
 		element: 'morrisBar3',
 		behaveLikeLine: true,
 		data: [{
 			x: '2011 Q1',
 			y: 1,
 			z: 0
 		}, {
 			x: '2011 Q2',
 			y: 1,
 			z: 4
 		}, {
 			x: '2011 Q3',
 			y: 3,
 			z: 1
 		}, {
 			x: '2011 Q4',
 			y: 1,
 			z: 3
 		}, {
 			x: '2011 Q5',
 			y: 1,
 			z: 0
 		}],
 		xkey: 'x',
 		ykeys: ['y', 'z'],
 		lineColors: ['#fb8d34', '#623AA2'],
 		labels: ['Y', 'Z']
 	});
 });