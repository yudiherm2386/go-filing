@extends('_layouts.login')
@section('title', 'Login')

@push('css')
@endpush

@section('content')
<div class="flex h-screen">
    <!-- Login Image -->
    <div class="flex-1 bg-center p-2 h-full w-full]">
        <div
            class="rounded-3xl h-full w-full bg-cover bg-center"
            style="background-image: url('{{ asset('assets/img/login.png') }}"
        >
            <div class="pt-4 pl-8 flex">
                <img class="h-10 w-10" src="{{ asset('assets/img/logo pertamina.svg') }}" alt="" />
                <h2 class="font-extrabold font-heading text-2xl pl-2 text-white">
                    GO filing
                </h2>
            </div>
        </div>
    </div>
    <!-- Input -->
    <div class="w-[550px] my-auto px-16">
        <div class="flex">
            <img class="h-12 w-12" src="{{ asset('assets/img/logo pertamina.svg') }}" alt="" />
            <h2
                class="font-extrabold font-heading text-4xl pl-2 text-red-400 text-transparent bg-clip-text bg-gradient-to-r from-[#ED1B2F] via-[#006CB7] to-[#ADC32B] from-10% via-50% to-90%"
            >
                GO filing
            </h2>
        </div>
        <div class="pt-5">
            <h1 class="text-4xl font-bold">Selamat Datang!</h1>
            <p class="text-[#7A7A7A]">
                Silahkan login menggunakan Username dan Password Anda
            </p>
        </div>
        <form method="post">
        <div class="w-full pt-6">
            <label class="pl-2 font-light" for="username">Username</label>
            <input
                class="w-full rounded p-3 shadow-input"
                type="text"
                name="username"
                id="username"
                placeholder="Username"
            />
        </div>
        <div class="w-full pt-6">
            <label class="pl-2 font-light" for="password">Password</label>
            <input
                class="w-full rounded p-3 shadow-input"
                type="password"
                name="password"
                id="password"
                placeholder="Password"
            />
        </div>
        <div class="w-full text-right py-2">
            <a
                class="text-sm font-semibold text-blue-600 hover:underline"
                href="#"
                >Lupa Password</a
            >
        </div>
        <!-- Button -->
        <a
            class="block w-full bg-gradient-to-r from-[#006CEA] to-[#00DCFA] text-white p-3 text-center rounded font-semibold shadow-lg hover:shadow duration-100"
            href="javascript:;" id="btnLogin"
        >
            Masuk
        </a>
        </form>
    </div>
</div>
@endsection

@push('js_vendor')
@endpush

@push('js')
@include('modules.auth.scripts')
@endpush