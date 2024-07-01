$(document).ready(function () {
	$("#tree").jstree({
		core: {
			data: [
				{
					text: "Construction",
					type: "fungsi",
					children: [{ text: "JAO00001" }, { text: "JAO00002" }],
				},
				{
					text: "O&M",
					type: "fungsi",
					children: [
						{
							text: "JAO00001",
							type: "proyek",
							children: [
								{ text: "LKP", type: "folder" },
								{ text: "Engineering", type: "folder" },
								{
									text: "Dokumen Kontrak",
									type: "folder",
									children: [
										{
											text: "Kontrak Eksternal",
											type: "folder",
											children: [
												{
													text: "Dokumen 1",
													type: "word",
												},
											],
										},
										{ text: "Kontrak Internal", type: "pdf" },
									],
								},
								{ text: "Berita Acara", type: "folder" },
							],
						},
					],
				},
				{
					text: "PS",
					type: "fungsi",
					children: [{ text: "JAO00001" }, { text: "Child node 2" }],
				},
				{
					text: "CMPS",
					type: "fungsi",
					children: [{ text: "JAO00001" }, { text: "Child node 2" }],
				},
			],
		},
		types: {
			fungsi: {
				icon: "../src/img/svg/fungsi.svg",
			},
			proyek: {
				icon: "../src/img/svg/cabinet.svg",
			},
			folder: {
				icon: "../src/img/svg/folder.svg",
			},
			image: {
				icon: "../src/img/svg/image.svg",
			},
			pdf: {
				icon: "../src/img/svg/pdf.svg",
			},
			word: {
				icon: "../src/img/svg/word.svg",
			},
			excel: {
				icon: "../src/img/svg/excel.svg",
			},
		},
		plugins: ["types"],
	});
});
