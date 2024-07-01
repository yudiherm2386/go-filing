<div class="sticky top-0 bg-[#F9F9FA] z-10">
    <!-- Search -->
    <div class="flex justify-between p-4">
        <a
            href="mobilebar.html"
            class="flex md:hidden hover:bg-gray-200 rounded-full"
        >
            <img class="w-8" src="{{ asset('assets/img/svg/menu.svg') }}" alt="Menu" />
        </a>
        <div class="hidden pl-4 md:flex items-center">
            <a href="#">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    widdiv="1.5em"
                    height="1.5em"
                    viewBox="0 0 24 24"
                    class="text-gray-700"
                >
                    <g
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-widdiv="2"
                    >
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21l-4.3-4.3" />
                    </g>
                </svg>
            </a>
            <div class="pl-4">
                <input
                    class="bg-transparent placeholder:font-sans focus:outline-none"
                    type="text"
                    name="search"
                    id="search"
                    placeholder="Search..."
                />
            </div>
        </div>
        <div class="flex">
            <a
                class="flex text-xs text-gray-500 items-center mr-5 hover:brightness-75 duration-100"
                href="search.html"
                >Advanced Search</a
            >
            <div class="relative">
                <a
                    class="flex w-8 h-8 bg-gradient-to-r from-orange-600 to-orange-400 text-white rounded-full text-center items-center justify-center shadow-md hover:shadow-sm duration-100"
                    href="#"
                    >{{ strtoupper(substr(Session::get('name'), 0, 1)); }}
                </a>
                <div
                    class="absolute flex flex-col right-0 text-black bg-white w-40 shadow rounded-lg py-2"
                >
                    <div class="pb-2 px-3 border-b">
                        <div class="font-bold">{{ Session::get('name') }}</div>
                        <div class="text-xs">{{ Session::get('group_name') }}</div>
                    </div>
                    <div class="pt-2">
                        <a
                            href="profile.html"
                            class="flex gap-2 px-2 py-1 hover:bg-blue-200 font-medium"
                        >
                            <img class="w-5" src="{{ asset('assets/img/svg/profile.svg') }}" alt="" />
                            Profile
                        </a>
                        <a
                            href="logout"
                            class="flex gap-2 px-2 py-1 hover:bg-blue-200 font-medium"
                        >
                            <img class="w-5" src="{{ asset('assets/img/svg/logout.svg') }}" alt="" />
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->
</div>