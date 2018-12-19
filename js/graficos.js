	var data = {
		labels: [
			"Pessoa física",
			"Pessoa jurídica",
		],
		datasets: [{
			data: [64, 36],
			backgroundColor: [
				"#d9dde6",
				"#8399f5"
			],
			// hoverBackgroundColor: [
			// 	"#27deac",
			// 	"#fff"
			// ],
			borderWidth: [
				0, 0
			]
		}]
	};

	var options = {
		cutoutPercentage: 70,
		animation: {
			animationRotate: true,
			duration: 2000
		},
		legend: {
			display: false
		},
		tooltips: {
			enabled: true
		},
		responsive: true
	};

	if( $('.doughnut-chart').length ){
		$('.doughnut-chart').each(function(){
			new Chart($(this), {
				type: 'doughnut',
				data: data,
				options: options
			});
		});
	}        