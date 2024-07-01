<div class="hidden md:block w-80 min-w-72 bg-[#F5F5F6]">
    <div class="py-4">
        <div class="flex items-center">
            <a class="flex items-center pb-4 pl-2" href="">
                <img
                    class="pl-4 h-12 w-12"
                    src="{{ asset('assets/img/logo pertamina.svg') }}"
                    alt=""
                />
                <h2
                    class="font-extrabold font-heading text-xl pl-2 text-red-400 text-transparent bg-clip-text bg-gradient-to-r from-[#ED1B2F] via-[#006CB7] to-[#ADC32B] from-10% via-50% to-90%"
                >
                    {{ env('APP_NAME') }}
                </h2>
            </a>
        </div>
        {{ App\Helpers\MenuHelper::Generate($permission->menu_id) }}
    </div>
</div>