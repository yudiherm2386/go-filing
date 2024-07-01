@extends('_layouts.main')
@section('title', 'Dashboard')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}" />
@endpush

@section('content')
<div class="relative bg-[#F9F9FA] w-full h-screen overflow-y-scroll">
	@include('_partials.topbar')
	<!-- Content -->
	<div class="bg-[#F9F9FA] pb-20">
		<div class="max-w-7xl mx-auto pt-20 px-10">
			<div class="title">
				<h1>Dashboard</h1>
				<h2 class="text-gray-400">
					Selamat datang, <span class="font-bold">{{ Session::get('name') }}</span>!
				</h2>
			</div>
			<!-- Section -->
			<div
				class="overview flex flex-col md:flex-row mt-8 items-center justify-evenly gap-8"
			>
				<!-- Overview Card -->
				<div
					class="flex flex-col w-60 bg-purple-500 p-4 text-white rounded-lg shadow"
				>
					<p>Fungsi</p>
					<h4 class="py-2">{{ $statistic->function->count }}</h4>
					<p class="opacity-75 text-[13px]">
						Last update: <br />{{ $statistic->function->last_updated }}
					</p>
					<a
						class="text-xs ml-auto w-fit py-[5px] px-[9px] rounded-full bg-white text-purple-500 opacity-65 hover:opacity-100 duration-100"
						href="function/add"
						>+ Tambah</a
					>
				</div>
				<!-- Overview Card End -->
				<div
					class="flex flex-col w-60 bg-orange-500 p-4 text-white rounded-lg shadow"
				>
					<p>Proyek</p>
					<h4 class="py-2">{{ $statistic->project->count }}</h4>
					<p class="opacity-75 text-[13px]">
						Last update: <br />{{ $statistic->project->last_updated }}
					</p>
					<a
						class="text-xs ml-auto w-fit py-[5px] px-[9px] rounded-full bg-white text-orange-500 opacity-65 hover:opacity-100 duration-100"
						href="project/add"
						>+ Tambah</a
					>
				</div>
				<div
					class="flex flex-col w-60 bg-green-500 p-4 text-white rounded-lg shadow"
				>
					<p>Dokumen</p>
					<h4 class="py-2">{{ $statistic->document->count }}</h4>
					<p class="opacity-75 text-[13px]">
						Last update: <br />{{ $statistic->document->last_updated }}
					</p>
					<a
						class="text-xs ml-auto w-fit py-[5px] px-[9px] rounded-full bg-white text-green-500 opacity-65 hover:opacity-100 duration-100"
						href="document/add"
						>+ Tambah</a
					>
				</div>
			</div>
			<!-- Section End -->
			<!-- Chart -->
			<div
				class="bg-white mt-10 rounded-lg p-5 flex flex-col md:flex-row gap-8 shadow"
			>
				<div class="flex-1 relative">
					<canvas class="w-full h-full" id="chart1"></canvas>
				</div>
				<div class="flex-1 relative">
					<canvas class="w-full h-full" id="chart2"></canvas>
				</div>
			</div>
			<!-- Chart End -->
			<!-- File Explorer -->
			<div class="md:flex mt-10 text-gray-500">
				<!-- Tree -->
				<div class="hidden md:block w-fit md:text-lg pr-10">
					<div class="font-bold">Tree</div>
					<div id="tree"></div>
				</div>
				<!-- Tree End -->
				<div class="flex flex-col w-full md:w-full flex-1 duration-100">
					<!-- File -->
					<div class="">
						<h2 class="pl-4 pb-1">JAO000001</h2>
						<div class="bg-white rounded-lg p-2 w-full shadow">
							<div class="flex justify-between gap-4">
								<a
									href="overlay.html"
									class="py-1 pl-3 pr-4 font-bold bg-gradient-to-r from-[#006CEA] to-[#00DCFA] text-white rounded-full hover:shadow-lg duration-300"
									>+ Tambah</a
								>
								<input
									class="bg-gray-100 px-4 py-1 rounded-full max-w-48"
									type="search"
									placeholder="Search..."
								/>
							</div>
							<div class="mt-2">
								<div
									class="table w-full h-fit table-fixed border-collapse last:border-none"
								>
									<!-- Table head -->
									<div class="table-header-group font-medium">
										<div class="table-row border-b-2">
											<div class="table-cell w-[30px]"></div>
											<div class="table-cell text-left w-full px-2">
												<div class="flex justify-between">
													<span class="flex text-xs items-center font-bold"
														>Name</span
													>
													<a href="#" class="p-1"
														><img
															class="my-auto"
															src="{{ asset('assets/img/svg/up.svg') }}"
															alt=""
													/></a>
												</div>
											</div>
											<div class="hidden md:table-cell w-[130px]">
												<div class="flex justify-between">
													<span class="flex text-xs items-center font-bold"
														>Last Updated</span
													>
													<a href="#" class="p-1"
														><img
															class="my-auto"
															src="{{ asset('assets/img/svg/up.svg') }}"
															alt=""
													/></a>
												</div>
											</div>
											<div class="hidden md:table-cell w-[100px]">
												<div class="flex justify-between">
													<span class="flex text-xs items-center font-bold"
														>File Size</span
													>
													<a href="#" class="p-1"
														><img
															class="my-auto"
															src="{{ asset('assets/img/svg/up.svg') }}"
															alt=""
													/></a>
												</div>
											</div>
											<div class="table-cell w-[30px]">
												<a href="" class="m-auto">
													<img
														class="align-middle m-auto"
														src="{{ asset('assets/img/svg/three-dots.svg') }}"
														alt=""
													/>
												</a>
											</div>
										</div>
									</div>
									<!-- Table head end -->
									<!-- Table Cell -->
									<div
										class="table-row-group text-gray-500 border-b last-of-type:border-none"
									>
										<div class="table-row cursor-pointer hover:bg-blue-200">
											<div class="table-cell align-middle">
												<img
													class="w-full"
													src="{{ asset('assets/img/svg/folder.svg') }}"
													alt=""
												/>
											</div>
											<div class="table-cell p-2">LKP</div>
											<div class="hidden md:table-cell py-2 align-middle">
												22 Jan 2024
											</div>
											<div class="hidden md:table-cell py-2 align-middle">
												-
											</div>
											<div class="table-cell py-2 align-middle relative">
												<a href="" class="m-auto">
													<img
														class="align-middle m-auto"
														src="{{ asset('assets/img/svg/three-dots.svg') }}"
														alt=""
													/>
												</a>
												<div
													class="absolute bg-white right-0 w-32 h-fit shadow py-2 rounded flex flex-col gap-2"
												>
													<div
														class="hover:bg-blue-200 px-2 py-1 flex gap-2"
													>
														<img src="{{ asset('assets/img/svg/view.svg') }}" alt="" />
														<div>View</div>
													</div>
													<div
														class="hover:bg-blue-200 px-2 py-1 flex gap-2"
													>
														<img src="{{ asset('assets/img/svg/rename.svg') }}" alt="" />
														<div>Rename</div>
													</div>
													<div
														class="hover:bg-blue-200 px-2 py-1 flex gap-2"
													>
														<img src="{{ asset('assets/img/svg/download.svg') }}" alt="" />
														<div>Download</div>
													</div>
													<div
														class="hover:bg-blue-200 px-2 py-1 flex gap-2 text-red-500"
													>
														<img
															class="text-red-500"
															src="{{ asset('assets/img/svg/delete.svg') }}"
															alt=""
														/>
														<div>Delete</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Table Cell End -->
									<div
										class="table-row-group text-gray-500 border-b last-of-type:border-none"
									>
										<div class="table-row cursor-pointer hover:bg-blue-200">
											<div class="table-cell align-middle">
												<img
													class="w-full"
													src="{{ asset('assets/img/svg/folder.svg') }}"
													alt=""
												/>
											</div>
											<div class="table-cell p-2">LKP</div>
											<div class="hidden md:table-cell py-2 align-middle">
												31 Jan 2024
											</div>
											<div class="hidden md:table-cell py-2 align-middle">
												-
											</div>
											<div class="table-cell py-2 align-middle">
												<a href="" class="m-auto">
													<img
														class="align-middle m-auto"
														src="{{ asset('assets/img/svg/three-dots.svg') }}"
														alt=""
													/>
												</a>
											</div>
										</div>
									</div>
									<div
										class="table-row-group text-gray-500 border-b last-of-type:border-none"
									>
										<div class="table-row cursor-pointer hover:bg-blue-200">
											<div class="table-cell align-middle">
												<img
													class="w-full"
													src="{{ asset('assets/img/svg/pdf.svg') }}"
													alt=""
												/>
											</div>
											<div class="table-cell p-2">PDF</div>
											<div class="hidden md:table-cell py-2 align-middle">
												31 Jan 2024
											</div>
											<div class="hidden md:table-cell py-2 align-middle">
												12 MB
											</div>
											<div class="table-cell py-2 align-middle">
												<a href="" class="m-auto">
													<img
														class="align-middle m-auto"
														src="{{ asset('assets/img/svg/three-dots.svg') }}"
														alt=""
													/>
												</a>
											</div>
										</div>
									</div>
									<div
										class="table-row-group text-gray-500 border-b last-of-type:border-none"
									>
										<div class="table-row cursor-pointer hover:bg-blue-200">
											<div class="table-cell align-middle">
												<img
													class="w-full"
													src="{{ asset('assets/img/svg/word.svg') }}"
													alt=""
												/>
											</div>
											<div class="table-cell p-2">Word</div>
											<div class="hidden md:table-cell py-2 align-middle">
												31 Jan 2024
											</div>
											<div class="hidden md:table-cell py-2 align-middle">
												123 KB
											</div>
											<div class="table-cell py-2 align-middle">
												<a href="" class="m-auto">
													<img
														class="align-middle m-auto"
														src="{{ asset('assets/img/svg/three-dots.svg') }}"
														alt=""
													/>
												</a>
											</div>
										</div>
									</div>
									<div
										class="table-row-group text-gray-500 border-b last-of-type:border-none"
									>
										<div class="table-row cursor-pointer hover:bg-blue-200">
											<div class="table-cell align-middle">
												<img
													class="w-full"
													src="{{ asset('assets/img/svg/excel.svg') }}"
													alt=""
												/>
											</div>
											<div class="table-cell p-2">Excel</div>
											<div class="hidden md:table-cell py-2 align-middle">
												31 Jan 2024
											</div>
											<div class="hidden md:table-cell py-2 align-middle">
												1 MB
											</div>
											<div class="table-cell py-2 align-middle">
												<a href="" class="m-auto">
													<img
														class="align-middle m-auto"
														src="{{ asset('assets/img/svg/three-dots.svg') }}"
														alt=""
													/>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="flex flex-row-reverse mt-4 gap-4">
						<div class="bg-white shadow py-2 px-4 rounded flex">
							<div>
								<span class="font-semibold">1-5</span>
								<span>&nbsp;of&nbsp;</span>
								<span class="font-semibold">6</span>
							</div>
							<div class="flex items-center border-l ml-2 pl-2">
								<a href=""
									><img class="w-6" src="{{ asset('assets/img/svg/chevron.svg') }}" alt=""
								/></a>
								<a href=""
									><img
										class="rotate-180 w-6"
										src="{{ asset('assets/img/svg/chevron.svg') }}"
										alt=""
								/></a>
							</div>
						</div>
						<div class="bg-white shadow p-2 rounded">
							<select name="" id="">
								<option value="1">5 per page</option>
								<option value="1">10 per page</option>
								<option value="1">15 per page</option>
								<option value="1">20 per page</option>
							</select>
						</div>
					</div>
					<!-- File End -->
					<!-- File Info -->
					<div class="mt-10 rounded-md bg-white shadow py-2">
						<div class="px-4 py-2 border-b font-bold">
							Details - JAO00001
						</div>
						<div class="flex flex-col md:flex-row flex-wrap">
							<div class="md:w-1/4 p-4">
								<div class="text-xs font-bold">Nama Proyek:</div>
								<div class="flex-wrap">JAO00001</div>
							</div>
							<div class="md:w-1/4 p-4">
								<div class="text-xs font-bold">Status:</div>
								<div class="flex-wrap text-green-500">Ongoing</div>
							</div>
							<div class="md:w-1/4 p-4">
								<div class="text-xs font-bold">Tanggal Kontrak:</div>
								<div class="flex-wrap">30 Juli 2023</div>
							</div>
							<div class="md:w-1/4 p-4">
								<div class="text-xs font-bold">Kelengkapan:</div>
								<div class="flex-wrap text-orange-400">Kurang</div>
							</div>
							<div class="md:w-1/4 p-4">
								<div class="text-xs font-bold">Kelengkapan:</div>
								<div class="flex-wrap text-orange-400">Kurang</div>
							</div>
							<div class="md:w-1/4 p-4">
								<div class="text-xs font-bold">Kelengkapan:</div>
								<div class="flex-wrap text-orange-400">Kurang</div>
							</div>
							<div class="md:w-1/4 p-4">
								<div class="text-xs font-bold">Kelengkapan:</div>
								<div class="flex-wrap text-orange-400">Kurang</div>
							</div>
							<div class="md:w-1/4 p-4">
								<div class="text-xs font-bold">Kelengkapan:</div>
								<div class="flex-wrap text-orange-400">Kurang</div>
							</div>
							<div class="md:w-1/4 p-4">
								<div class="text-xs font-bold">Kelengkapan:</div>
								<div class="flex-wrap text-orange-400">Kurang</div>
							</div>
						</div>
					</div>
					<!-- File Info End -->
				</div>
			</div>
			<!-- File Explorer End -->
		</div>
	</div>
</div>
@endsection

@push('js_vendor')
<script src="{{ asset('assets/js/chart.js')}}"></script>
<script src="{{ asset('assets/js/jstree.min.js')}}"></script>
@endpush

@push('js_page')
<script>
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
</script>
@endpush