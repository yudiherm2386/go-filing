(async function () {
	const data = [
		{ fungsi: "Construction", count: 20 },
		{ fungsi: "O&M", count: 4 },
		{ fungsi: "PS", count: 12 },
		{ fungsi: "CMPS", count: 8 },
	];

	new Chart(document.getElementById("chart1"), {
		type: "pie",
		data: {
			labels: data.map((row) => row.fungsi),
			datasets: [
				{
					label: "Jumlah Proyek",
					data: data.map((row) => row.count),
				},
			],
		},
		options: {
			plugins: {
				responsive: true,
				maintainAspectRatio: false,

				legend: {
					position: "left",
					labels: {
						boxHeight: 20,
						font: {
							size: 12,
						},
					},
				},
			},
		},
	});
	new Chart(document.getElementById("chart2"), {
		type: "pie",
		data: {
			labels: data.map((row) => row.fungsi),
			datasets: [
				{
					label: "Jumlah Proyek",
					data: data.map((row) => row.count),
				},
			],
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			plugins: {
				legend: {
					position: "right",
					labels: {
						boxHeight: 20,
						font: {
							size: 12,
						},
					},
				},
			},
		},
	});
})();
