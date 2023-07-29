@extends('layouts.app')

@section('content')
    <!-- Sidebar -->
    <aside
        class="fixed top-5 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidenav" id="drawer-navigation">
        <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
            <form action="#" method="GET" class="md:hidden mb-2">
                <label for="sidebar-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                            </path>
                        </svg>
                    </div>
                    <input type="text" name="search" id="sidebar-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search" />
                </div>
            </form>
            <ul class="space-y-2">
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg aria-hidden="true"
                            class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        <span class="ml-3">Overview</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Pages</span>
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kanban</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Calendar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Sales</span>
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                            </path>
                            <path
                                d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Messages</span>
                        <span
                            class="inline-flex justify-center items-center w-5 h-5 text-xs font-semibold rounded-full text-primary-800 bg-primary-100 dark:bg-primary-200 dark:text-primary-800">
                            4
                        </span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-authentication" data-collapse-toggle="dropdown-authentication">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Authentication</span>
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Sign
                                In</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Sign
                                Up</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Forgot
                                Password</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                            <path fill-rule="evenodd"
                                d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3">Docs</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                            </path>
                        </svg>
                        <span class="ml-3">Components</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3">Help</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    {{-- Main Section --}}
    <main class="p-4 md:ml-64 h-auto mt-5 pt-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">

            {{-- Product --}}
            @for ($i = 0; $i < 7; $i++)
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg"
                            src="data:image/jpeg;base64,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"
                            alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Pak Bambang
                            </h5>
                        </a>
                        @for ($j = 0; $j < 3; $j++)
                            <button type="button"
                                class="-ml-3 py-2.5 px-3 mr-4 mb-2 text-xs font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                Front-end
                            </button>
                        @endfor
                        <div class="flex items-center mt-2.5 mb-5">
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-m font-bold text-gray-900 dark:text-white">Rp. 500.000/jam</span>
                            <a href="{{ route('detail') }}"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Detail</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </main>
@endsection
