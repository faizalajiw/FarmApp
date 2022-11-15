

// Chart Jumlah Hewan
var optionsJumlahHewan = {
	annotations: {
		position: 'back'
	},
	dataLabels: {
		enabled:false
	},
	chart: {
		type: 'bar',
		height: 300
	},
	fill: {
		opacity:1
	},
	plotOptions: {
	},
	series: [{
		name: 'sales',
		data: [9,20,30,20,10,20,30,20,10,20,30,20]
	}],
	colors: '#435ebe',
	xaxis: {
		categories: ["Jan","Feb","Mar","Apr","May","Jun","Jul", "Aug","Sep","Oct","Nov","Dec"],
	},
}


// Chart Jumlah Lembaga
let optionsJumlahLembaga  = {
	series: [30,20,10,40],
	labels: ['Cazh', 'GSC','Credis','Sulton.Dev'],
	colors: ['#435ebe','#437aca','#438aba','#485aae','#FAEBD7'],
	chart: {
		type: 'donut',
		width: '100%',
		height:'350px'
	},
	legend: {
		position: 'bottom'
	},
	plotOptions: {
		pie: {
			donut: {
				size: '30%'
			}
		}
	}
}





//Chart Jumlah Kelompok
var optionsKelompok = {
	series: [{
		name: 'Team Peternak Lokal',
		data: [310, 800, 600, 430, 540, 340, 605, 805,430, 540, 340, 605]
	}],
	chart: {
		height: 80,
		type: 'area',
		toolbar: {
			show:false,
		},
	},
	colors: ['#5350e9'],
	stroke: {
		width: 2,
	},
	grid: {
		show:false,
	},
	dataLabels: {
		enabled: false
	},
	xaxis: {
		type: 'datetime',
		categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z","2018-09-19T07:30:00.000Z","2018-09-19T08:30:00.000Z","2018-09-19T09:30:00.000Z","2018-09-19T10:30:00.000Z","2018-09-19T11:30:00.000Z"],
		axisBorder: {
			show:false
		},
		axisTicks: {
			show:false
		},
		labels: {
			show:false,
		}
	},
	show:false,
	yaxis: {
		labels: {
			show:false,
		},
	},
	tooltip: {
		x: {
			format: 'dd/MM/yy HH:mm'
		},
	},
};


//Charts Peternak
let optionsPeternak = {
	...optionsKelompok,
	colors: ['#008b75'],
}

//Charts Kandang
let optionsKandang = {
	...optionsKelompok,
	colors: ['#dc3545'],
}



var chartsul = new ApexCharts(document.querySelector("#chart-sul"), optionsJumlahHewan);
var chartLembaga = new ApexCharts(document.getElementById('chart-lembaga'), optionsJumlahLembaga);
var chartKelompok = new ApexCharts(document.querySelector("#chart-kelompok"), optionsKelompok);
var chartPeternak = new ApexCharts(document.querySelector("#chart-peternak"), optionsPeternak);
var chartKandang = new ApexCharts(document.querySelector("#chart-kandang"), optionsKandang);

chartKelompok.render();
chartPeternak.render();
chartKandang.render();
chartsul.render();
chartLembaga.render()
