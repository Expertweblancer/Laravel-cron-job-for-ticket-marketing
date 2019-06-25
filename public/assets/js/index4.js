$(function(e) {
	'use strict';
	new Morris.Area({
		element: 'morrisBar2',
		data: [{
			x: '2010 Q4',
			y: 9,
			z: 7
		}, {
			x: '2011 Q1',
			y: 6,
			z: 4
		}, {
			x: '2011 Q2',
			y: 2,
			z: 3
		}, {
			x: '2011 Q3',
			y: 6,
			z: 5
		}, {
			x: '2011 Q4',
			y: 16,
			z: 4
		}, {
			x: '2012 Q1',
			y: 4,
			z: 13
		}, {
			x: '2012 Q2',
			y: 6,
			z: 3
		}, {
			x: '2012 Q3',
			y: 3,
			z: 8
		}],
		xkey: 'x',
		ykeys: ['y', 'z'],
		lineColors: ['#fb8d34', '#6c3e9d'],
		labels: ['Y', 'Z']
	}).on('click', function(i, row) {
		console.log(i, row);
	});
});