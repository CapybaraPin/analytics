<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tableau de bord</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="assets/css/vendors/flatpickr.min.css" rel="stylesheet">
    <link href="assets/css/vendors/flatpickr.min.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet">
</head>

<body
    class="font-inter antialiased bg-slate-100 text-slate-600"
    :class="{ 'sidebar-expanded': sidebarExpanded }"
    x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
    x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
>

<script>
    if (localStorage.getItem('sidebar-expanded') == 'true') {
        document.querySelector('body').classList.add('sidebar-expanded');
    } else {
        document.querySelector('body').classList.remove('sidebar-expanded');
    }
</script>

<!-- Page wrapper -->
<div class="flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <div>
        <!-- Sidebar backdrop (mobile only) -->
        <div class="fixed inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200" :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

        <!-- Sidebar -->
        <div id="sidebar" class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out" :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false" @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

            <!-- Sidebar header -->
            <div class="flex justify-between mb-10 pr-3 sm:px-2">
                <!-- Close button -->
                <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                    </svg>
                </button>
                <!-- Logo -->
                <a class="block" href="index.html">
                    <svg width="32" height="32" viewBox="0 0 32 32">
                        <defs>
                            <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                                <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%" />
                                <stop stop-color="#A5B4FC" offset="100%" />
                            </linearGradient>
                            <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                                <stop stop-color="#38BDF8" stop-opacity="0" offset="0%" />
                                <stop stop-color="#38BDF8" offset="100%" />
                            </linearGradient>
                        </defs>
                        <rect fill="#6366F1" width="32" height="32" rx="16" />
                        <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5" />
                        <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)" />
                        <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)" />
                    </svg>
                </a>
            </div>

            <!-- Links -->
            <div class="space-y-8">
                <!-- Pages group -->
                <div>
                    <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                        <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6" aria-hidden="true">•••</span>
                        <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">Espace de gestion</span>
                    </h3>
                    <ul class="mt-3">
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150" href="campaigns.html">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current text-indigo-500" d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                                        <path class="fill-current text-indigo-600" d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                                        <path class="fill-current text-indigo-200" d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                                    </svg>
                                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Tableau de bord</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Expand / collapse button -->
            <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
                <div class="px-3 py-2">
                    <button @click="sidebarExpanded = !sidebarExpanded">
                        <span class="sr-only">Expand / collapse sidebar</span>
                        <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
                            <path class="text-slate-400" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
                            <path class="text-slate-600" d="M3 23H1V1h2z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Content area -->
    <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">

        <!-- Site header -->
        <header class="sticky top-0 bg-white border-b border-slate-200 z-30">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 -mb-px">

                    <!-- Header: Left side -->
                    <div class="flex">
                        <!-- Hamburger button -->
                        <button
                            class="text-slate-500 hover:text-slate-600 lg:hidden"
                            @click.stop="sidebarOpen = !sidebarOpen"
                            aria-controls="sidebar"
                            :aria-expanded="sidebarOpen"
                        >
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4" y="5" width="16" height="2" />
                                <rect x="4" y="11" width="16" height="2" />
                                <rect x="4" y="17" width="16" height="2" />
                            </svg>
                        </button>

                    </div>

                    <!-- Header: Right side -->
                    <div class="flex items-center space-x-3">

                        <!-- Info button -->
                        <div class="relative inline-flex" x-data="{ open: false }">
                            <button
                                class="w-8 h-8 flex items-center justify-center bg-slate-100 hover:bg-slate-200 transition duration-150 rounded-full"
                                :class="{ 'bg-slate-200': open }"
                                aria-haspopup="true"
                                @click.prevent="open = !open"
                                :aria-expanded="open"
                            >
                                <span class="sr-only">Info</span>
                                <svg class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-current text-slate-500" d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z" />
                                </svg>
                            </button>
                            <div
                                class="origin-top-right z-10 absolute top-full right-0 min-w-44 bg-white border border-slate-200 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                                @click.outside="open = false"
                                @keydown.escape.window="open = false"
                                x-show="open"
                                x-transition:enter="transition ease-out duration-200 transform"
                                x-transition:enter-start="opacity-0 -translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-out duration-200"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                x-cloak
                            >
                                <div class="text-xs font-semibold text-slate-400 uppercase pt-1.5 pb-2 px-3">Need help?</div>
                                <ul>
                                    <li>
                                        <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="w-3 h-3 fill-current text-indigo-300 shrink-0 mr-2" viewBox="0 0 12 12">
                                                <rect y="3" width="12" height="9" rx="1" />
                                                <path d="M2 0h8v2H2z" />
                                            </svg>
                                            <span>Documentation</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="w-3 h-3 fill-current text-indigo-300 shrink-0 mr-2" viewBox="0 0 12 12">
                                                <path d="M10.5 0h-9A1.5 1.5 0 000 1.5v9A1.5 1.5 0 001.5 12h9a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0010.5 0zM10 7L8.207 5.207l-3 3-1.414-1.414 3-3L5 2h5v5z" />
                                            </svg>
                                            <span>Support Site</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="w-3 h-3 fill-current text-indigo-300 shrink-0 mr-2" viewBox="0 0 12 12">
                                                <path d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z" />
                                            </svg>
                                            <span>Contact us</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Divider -->
                        <hr class="w-px h-6 bg-slate-200" />

                        <!-- User button -->
                        <div class="relative inline-flex" x-data="{ open: false }">
                            <button
                                class="inline-flex justify-center items-center group"
                                aria-haspopup="true"
                                @click.prevent="open = !open"
                                :aria-expanded="open"
                            >
                                <img class="w-8 h-8 rounded-full" src="assets/images/user-avatar-32.png" width="32" height="32" alt="User" />
                                <div class="flex items-center truncate">
                                    <span class="truncate ml-2 text-sm font-medium group-hover:text-slate-800">Hugo ROBLES</span>
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </button>
                            <div
                                class="origin-top-right z-10 absolute top-full right-0 min-w-44 bg-white border border-slate-200 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                                @click.outside="open = false"
                                @keydown.escape.window="open = false"
                                x-show="open"
                                x-transition:enter="transition ease-out duration-200 transform"
                                x-transition:enter-start="opacity-0 -translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-out duration-200"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                x-cloak
                            >
                                <div class="pt-0.5 pb-2 px-3 mb-1 border-b border-slate-200">
                                    <div class="font-medium text-slate-800">Hugo ROBLES</div>
                                    <div class="text-xs text-slate-500 italic">Administrateur</div>
                                </div>
                                <ul>
                                    <li>
                                        <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="settings.html" @click="open = false" @focus="open = true" @focusout="open = false">Paramètres</a>
                                    </li>
                                    <li>
                                        <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="signin.html" @click="open = false" @focus="open = true" @focusout="open = false">Déconnexion</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </header>

        <main>
            <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

                <!-- Page header -->
                <div class="sm:flex sm:justify-between sm:items-center mb-8">

                    <!-- Left: Title -->
                    <div class="mb-4 sm:mb-0">
                        <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Tableau de bord ✨</h1>
                    </div>

                    <!-- Right: Actions -->
                    <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                        <!-- Datepicker built with flatpickr -->
                        <div class="relative">
                            <input class="datepicker form-input pl-9 text-slate-500 hover:text-slate-600 font-medium focus:border-slate-300 w-60" placeholder="Select dates" data-class="flatpickr-right" />
                            <div class="absolute inset-0 right-auto flex items-center pointer-events-none">
                                <svg class="w-4 h-4 fill-current text-slate-500 ml-3" viewBox="0 0 16 16">
                                    <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z" />
                                </svg>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Cards -->
                <div class="grid grid-cols-12 gap-6">

                    <!-- Line chart (Analytics) -->
                    <div class="flex flex-col col-span-full xl:col-span-8 bg-white shadow-lg rounded-sm border border-slate-200">
                        <header class="px-5 py-4 border-b border-slate-100 flex items-center">
                            <h2 class="font-semibold text-slate-800">Analytics</h2>
                        </header>
                        <div class="px-5 py-1">
                            <div class="flex flex-wrap">
                                <!-- Unique Visitors -->
                                <div class="flex items-center py-2">
                                    <div class="mr-5">
                                        <div class="flex items-center">
                                            <div class="text-3xl font-bold text-slate-800 mr-2">24.7K</div>
                                            <div class="text-sm font-medium text-emerald-500">+49%</div>
                                        </div>
                                        <div class="text-sm text-slate-500">Unique Visitors</div>
                                    </div>
                                    <div class="hidden md:block w-px h-8 bg-slate-200 mr-5" aria-hidden="true"></div>
                                </div>
                                <!-- Total Pageviews -->
                                <div class="flex items-center py-2">
                                    <div class="mr-5">
                                        <div class="flex items-center">
                                            <div class="text-3xl font-bold text-slate-800 mr-2">56.9K</div>
                                            <div class="text-sm font-medium text-emerald-500">+7%</div>
                                        </div>
                                        <div class="text-sm text-slate-500">Total Pageviews</div>
                                    </div>
                                    <div class="hidden md:block w-px h-8 bg-slate-200 mr-5" aria-hidden="true"></div>
                                </div>
                                <!-- Bounce Rate -->
                                <div class="flex items-center py-2">
                                    <div class="mr-5">
                                        <div class="flex items-center">
                                            <div class="text-3xl font-bold text-slate-800 mr-2">54%</div>
                                            <div class="text-sm font-medium text-amber-500">-7%</div>
                                        </div>
                                        <div class="text-sm text-slate-500">Bounce Rate</div>
                                    </div>
                                    <div class="hidden md:block w-px h-8 bg-slate-200 mr-5" aria-hidden="true"></div>
                                </div>
                                <!-- Visit Duration-->
                                <div class="flex items-center">
                                    <div>
                                        <div class="flex items-center">
                                            <div class="text-3xl font-bold text-slate-800 mr-2">2m 56s</div>
                                            <div class="text-sm font-medium text-amber-500">+7%</div>
                                        </div>
                                        <div class="text-sm text-slate-500">Visit Duration</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chart built with Chart.js 3 -->
                        <!-- Check out src/js/components/analytics-card-01.js for config -->
                        <div class="grow">
                            <!-- Change the height attribute to adjust the chart height -->
                            <canvas id="analytics-card-01" width="800" height="300"></canvas>
                        </div>
                    </div>

                    <!--  Line chart (Active Users Right Now) -->
                    <div class="flex flex-col col-span-full xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
                        <header class="px-5 py-4 border-b border-slate-100">
                            <h2 class="font-semibold text-slate-800">Active Users Right Now</h2>
                        </header>
                        <!-- Card content -->
                        <div class="flex flex-col h-full">
                            <!-- Live visitors number -->
                            <div class="px-5 py-3">
                                <div class="flex items-center">
                                    <!-- Red dot -->
                                    <div class="relative flex items-center justify-center w-4 h-4 rounded-full bg-rose-100 mr-3" aria-hidden="true">
                                        <div class="absolute w-1.5 h-1.5 rounded-full bg-rose-500"></div>
                                    </div>
                                    <!-- Vistors number -->
                                    <div>
                                        <div class="text-3xl font-bold text-slate-800 mr-2">347</div>
                                        <div class="text-sm text-slate-500">Live visitors</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/components/analytics-card-02.js for config -->
                            <div>
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="analytics-card-02" width="389" height="70"></canvas>
                            </div>

                            <!-- Table -->
                            <div class="grow px-5 pt-3 pb-1">
                                <div class="overflow-x-auto">
                                    <table class="table-auto w-full">
                                        <!-- Table header -->
                                        <thead class="text-xs uppercase text-slate-400">
                                        <tr>
                                            <th class="py-2">
                                                <div class="font-semibold text-left">Top pages</div>
                                            </th>
                                            <th class="py-2">
                                                <div class="font-semibold text-right">Active users</div>
                                            </th>
                                        </tr>
                                        </thead>
                                        <!-- Table body -->
                                        <tbody class="text-sm divide-y divide-slate-100">
                                        <!-- Row -->
                                        <tr>
                                            <td class="py-2">
                                                <div class="text-left">preview.cruip.com/open-pro/</div>
                                            </td>
                                            <td class="py-2">
                                                <div class="font-medium text-right text-slate-800">94</div>
                                            </td>
                                        </tr>
                                        <!-- Row -->
                                        <tr>
                                            <td class="py-2">
                                                <div class="text-left">preview.cruip.com/simple/</div>
                                            </td>
                                            <td class="py-2">
                                                <div class="font-medium text-right text-slate-800">42</div>
                                            </td>
                                        </tr>
                                        <!-- Row -->
                                        <tr>
                                            <td class="py-2">
                                                <div class="text-left">cruip.com/unlimited/</div>
                                            </td>
                                            <td class="py-2">
                                                <div class="font-medium text-right text-slate-800">12</div>
                                            </td>
                                        </tr>
                                        <!-- Row -->
                                        <tr>
                                            <td class="py-2">
                                                <div class="text-left">preview.cruip.com/twist/</div>
                                            </td>
                                            <td class="py-2">
                                                <div class="font-medium text-right text-slate-800">4</div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Card footer -->
                            <div class="text-right px-5 pb-4">
                                <a class="text-sm font-medium text-indigo-500 hover:text-indigo-600" href="#0">Real-Time Report -&gt;</a>
                            </div>
                        </div>
                    </div>

                    <!-- Stacked bar chart (Acquisition Channels) -->
                    <div class="flex flex-col col-span-full sm:col-span-6 bg-white shadow-lg rounded-sm border border-slate-200">
                        <header class="px-5 py-4 border-b border-slate-100 flex items-center">
                            <h2 class="font-semibold text-slate-800">Acquisition Channels</h2>
                        </header>
                        <div class="px-5 py-4">
                            <div id="analytics-card-03-legend" class="grow mb-1">
                                <ul class="flex flex-wrap"></ul>
                            </div>
                        </div>
                        <!-- Chart built with Chart.js 3 -->
                        <!-- Check out src/js/components/analytics-card-03.js for config -->
                        <div class="grow">
                            <!-- Change the height attribute to adjust the chart height -->
                            <canvas id="analytics-card-03" width="595" height="248"></canvas>
                        </div>
                    </div>

                    <!-- Horizontal bar chart (Audience Overview) -->
                    <div class="flex flex-col col-span-full sm:col-span-6 bg-white shadow-lg rounded-sm border border-slate-200">
                        <header class="px-5 py-4 border-b border-slate-100">
                            <h2 class="font-semibold text-slate-800">Audience Overview</h2>
                        </header>
                        <!-- Chart built with Chart.js 3 -->
                        <!-- Check out src/js/components/analytics-card-04.js for config -->
                        <div id="analytics-card-04-legend" class="px-5 py-4">
                            <ul class="flex flex-wrap"></ul>
                        </div>
                        <div class="grow">
                            <!-- Change the height attribute to adjust the chart height -->
                            <canvas id="analytics-card-04" width="595" height="248"></canvas>
                        </div>
                    </div>

                    <!-- Report card (Top Channels) -->
                    <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
                        <header class="px-5 py-4 border-b border-slate-100">
                            <h2 class="font-semibold text-slate-800">Top Channels</h2>
                        </header>
                        <div class="grow p-3">
                            <div class="flex flex-col h-full">
                                <!-- Card content -->
                                <div class="grow">
                                    <ul class="flex justify-between text-xs uppercase text-slate-400 font-semibold px-2 space-x-2">
                                        <li>Source</li>
                                        <li>Visitors</li>
                                    </ul>

                                    <ul class="space-y-1 text-sm text-slate-800 mt-3 mb-4">
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-indigo-100" aria-hidden="true" style="width: 82%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>Google</div>
                                                <div class="font-medium">4.7K</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-indigo-100" aria-hidden="true" style="width: 70%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>Indiehackers.com</div>
                                                <div class="font-medium">4.2K</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-indigo-100" aria-hidden="true" style="width: 60%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>DuckDuckGo</div>
                                                <div class="font-medium">3.4K</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-indigo-100" aria-hidden="true" style="width: 44%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>Hacker News</div>
                                                <div class="font-medium">3.1K</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-indigo-100" aria-hidden="true" style="width: 40%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>Github.com</div>
                                                <div class="font-medium">2.2K</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-indigo-100" aria-hidden="true" style="width: 30%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>Madewithvuejs.com</div>
                                                <div class="font-medium">1.7K</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-indigo-100" aria-hidden="true" style="width: 22%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>Producthunt.com</div>
                                                <div class="font-medium">924</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-indigo-100" aria-hidden="true" style="width: 12%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>Dev.to</div>
                                                <div class="font-medium">696</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Card footer -->
                                <div class="text-center pt-4 pb-1 border-t border-slate-100">
                                    <a class="text-sm font-medium text-indigo-500 hover:text-indigo-600" href="#0">Channels Report -&gt;</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Report card (Top Pages) -->
                    <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
                        <header class="px-5 py-4 border-b border-slate-100">
                            <h2 class="font-semibold text-slate-800">Top Pages</h2>
                        </header>
                        <div class="grow p-3">
                            <div class="flex flex-col h-full">
                                <!-- Card content -->
                                <div class="grow">
                                    <ul class="flex justify-between text-xs uppercase text-slate-400 font-semibold px-2 space-x-2">
                                        <li>Source</li>
                                        <li>Pageviews</li>
                                    </ul>

                                    <ul class="space-y-1 text-sm text-slate-800 mt-3 mb-4">
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-emerald-100" aria-hidden="true" style="width: 82%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>cruip.com/</div>
                                                <div class="font-medium">28K</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-emerald-100" aria-hidden="true" style="width: 70%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>preview.cruip.com/open-pro/</div>
                                                <div class="font-medium">12K</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-emerald-100" aria-hidden="true" style="width: 60%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>preview.cruip.com/appy/</div>
                                                <div class="font-medium">9.7K</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-emerald-100" aria-hidden="true" style="width: 44%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>cruip.com/unlimited/</div>
                                                <div class="font-medium">9.2K</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-emerald-100" aria-hidden="true" style="width: 40%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>preview.cruip.com/simple/</div>
                                                <div class="font-medium">7K</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-emerald-100" aria-hidden="true" style="width: 30%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>cruip.com/about-us/</div>
                                                <div class="font-medium">6.4K</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-emerald-100" aria-hidden="true" style="width: 22%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>docs.cruip.com/</div>
                                                <div class="font-medium">5.4K</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-emerald-100" aria-hidden="true" style="width: 12%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>preview.cruip.com/twist/</div>
                                                <div class="font-medium">2.2K</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Card footer -->
                                <div class="text-center pt-4 pb-1 border-t border-slate-100">
                                    <a class="text-sm font-medium text-indigo-500 hover:text-indigo-600" href="#0">Page Report -&gt;</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Report card (Top Countries) -->
                    <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
                        <header class="px-5 py-4 border-b border-slate-100">
                            <h2 class="font-semibold text-slate-800">Top Countries</h2>
                        </header>
                        <div class="grow p-3">
                            <div class="flex flex-col h-full">
                                <!-- Card content -->
                                <div class="grow">
                                    <ul class="flex justify-between text-xs uppercase text-slate-400 font-semibold px-2 space-x-2">
                                        <li>Source</li>
                                        <li>Sessions</li>
                                    </ul>

                                    <ul class="space-y-1 text-sm text-slate-800 mt-3 mb-4">
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-sky-100" aria-hidden="true" style="width: 82%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>🇨🇮 Ireland</div>
                                                <div class="font-medium">4.2K</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-sky-100" aria-hidden="true" style="width: 70%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>🇺🇸 United States</div>
                                                <div class="font-medium">3.4K</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-sky-100" aria-hidden="true" style="width: 60%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>🇩🇪 Germany</div>
                                                <div class="font-medium">1.6k</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-sky-100" aria-hidden="true" style="width: 44%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>🇮🇹 Italy</div>
                                                <div class="font-medium">1.2k</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-sky-100" aria-hidden="true" style="width: 40%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>🇬🇧 United Kingdom</div>
                                                <div class="font-medium">912</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-sky-100" aria-hidden="true" style="width: 30%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>🇫🇷 France</div>
                                                <div class="font-medium">677</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-sky-100" aria-hidden="true" style="width: 22%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>🇮🇳 India</div>
                                                <div class="font-medium">449</div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="relative px-2 py-1">
                                            <div class="absolute inset-0 bg-sky-100" aria-hidden="true" style="width: 12%;"></div>
                                            <div class="relative flex justify-between space-x-2">
                                                <div>🇸🇬 Singapore</div>
                                                <div class="font-medium">269</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Card footer -->
                                <div class="text-center pt-4 pb-1 border-t border-slate-100">
                                    <a class="text-sm font-medium text-indigo-500 hover:text-indigo-600" href="#0">Countries Report -&gt;</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Doughnut chart (Sessions By Device) -->
                    <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
                        <header class="px-5 py-4 border-b border-slate-100">
                            <h2 class="font-semibold text-slate-800">Sessions By Device</h2>
                        </header>
                        <!-- Chart built with Chart.js 3 -->
                        <!-- Check out src/js/components/analytics-card-08.js for config -->
                        <div class="grow flex flex-col justify-center">
                            <div>
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="analytics-card-08" width="389" height="260"></canvas>
                            </div>
                            <div id="analytics-card-08-legend" class="px-5 pt-2 pb-6">
                                <ul class="flex flex-wrap justify-center -m-1"></ul>
                            </div>
                        </div>
                    </div>

                    <!-- Doughnut chart (Visit By Age Category) -->
                    <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
                        <header class="px-5 py-4 border-b border-slate-100">
                            <h2 class="font-semibold text-slate-800">Sessions By Age</h2>
                        </header>
                        <!-- Chart built with Chart.js 3 -->
                        <!-- Check out src/js/components/analytics-card-08.js for config -->
                        <div class="grow flex flex-col justify-center">
                            <div>
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="analytics-card-09" width="389" height="260"></canvas>
                            </div>
                            <div id="analytics-card-09-legend" class="px-5 pt-2 pb-6">
                                <ul class="flex flex-wrap justify-center -m-1"></ul>
                            </div>
                        </div>
                    </div>

                    <!-- Polar chart (Sessions By Gender) -->
                    <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
                        <header class="px-5 py-4 border-b border-slate-100">
                            <h2 class="font-semibold text-slate-800">Sessions By Gender</h2>
                        </header>
                        <!-- Chart built with Chart.js 3 -->
                        <!-- Check out src/js/components/analytics-card-10.js for config -->
                        <div class="grow flex flex-col justify-center">
                            <div>
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="analytics-card-10" width="389" height="260"></canvas>
                            </div>
                            <div id="analytics-card-10-legend" class="px-5 pt-2 pb-6">
                                <ul class="flex flex-wrap justify-center -m-1"></ul>
                            </div>
                        </div>
                    </div>

                    <!-- Table (Top Products) -->
                    <div class="col-span-full bg-white shadow-lg rounded-sm border border-slate-200">
                        <header class="px-5 py-4 border-b border-slate-100">
                            <h2 class="font-semibold text-slate-800">Top Products</h2>
                        </header>
                        <div class="p-3">

                            <!-- Table -->
                            <div class="overflow-x-auto">
                                <table class="table-auto w-full">
                                    <!-- Table header -->
                                    <thead class="text-xs uppercase text-slate-400 bg-slate-50 rounded-sm">
                                    <tr>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Product</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Created by</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Category</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">Total impressions</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">Top country</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">CR</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Value</div>
                                        </th>
                                    </tr>
                                    </thead>
                                    <!-- Table body -->
                                    <tbody class="text-sm divide-y divide-slate-100">
                                    <!-- Row -->
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="shrink-0 rounded-full mr-2 sm:mr-3 bg-indigo-500">
                                                    <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36">
                                                        <path d="M24.446 19.335a2.5 2.5 0 00-3.522 3.194c-.845.63-1.87.97-2.924.971a4.979 4.979 0 01-1.113-.135 4.436 4.436 0 01-1.343 1.682 6.91 6.91 0 006.9-1.165 2.5 2.5 0 002-4.547h.002zM20.431 11.938a2.5 2.5 0 10-.4 2.014 5.027 5.027 0 012.723 3.078c.148-.018.297-.028.446-.03a4.5 4.5 0 011.7.334 7.023 7.023 0 00-4.469-5.396zM14.969 20.25a2.49 2.49 0 00-1.932-1.234A4.624 4.624 0 0113 18.5a4.97 4.97 0 011.348-3.391 4.456 4.456 0 01-.788-2.016A6.989 6.989 0 0011 18.5c.003.391.04.781.11 1.166a2.5 2.5 0 103.859.584z" />
                                                    </svg>
                                                </div>
                                                <div class="font-medium text-slate-800">Form Builder CP</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex shrink-0 -space-x-3 -ml-px">
                                                <a class="block" href="#0">
                                                    <img class="rounded-full border-2 border-white box-content" src="assets/images/user-28-01.jpg" width="28" height="28" alt="User 01" />
                                                </a>
                                                <a class="block" href="#0">
                                                    <img class="rounded-full border-2 border-white box-content" src="assets/images/user-28-02.jpg" width="28" height="28" alt="User 02" />
                                                </a>
                                                <a class="block" href="#0">
                                                    <img class="rounded-full border-2 border-white box-content" src="assets/images/user-28-03.jpg" width="28" height="28" alt="User 03" />
                                                </a>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 fill-current text-slate-400 shrink-0 mr-2" viewBox="0 0 16 16">
                                                    <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z" />
                                                </svg>
                                                <div>Subscription</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">20,929</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-lg text-center">🇺🇸</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">27.4%</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium text-emerald-500">$12,499.77</div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="shrink-0 rounded-full mr-2 sm:mr-3 bg-emerald-500">
                                                    <svg class="w-9 h-9 fill-current text-emerald-50" viewBox="0 0 36 36">
                                                        <path d="M11 22.012a1 1 0 01-.707-1.707l4.5-4.5a1 1 0 011.414 0l3.293 3.293 4.793-4.793a1 1 0 111.414 1.414l-5.5 5.5a1 1 0 01-1.414 0L15.5 17.926l-3.793 3.793a1 1 0 01-.707.293z" />
                                                    </svg>
                                                </div>
                                                <div class="font-medium text-slate-800">Machine Learning A-Z</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex shrink-0 -space-x-3 -ml-px">
                                                <a class="block" href="#0">
                                                    <img class="rounded-full border-2 border-white box-content" src="assets/images/user-28-07.jpg" width="28" height="28" alt="User 07" />
                                                </a>
                                                <a class="block" href="#0">
                                                    <img class="rounded-full border-2 border-white box-content" src="assets/images/user-28-04.jpg" width="28" height="28" alt="User 04" />
                                                </a>
                                                <a class="block" href="#0">
                                                    <img class="rounded-full border-2 border-white box-content" src="assets/images/user-28-11.jpg" width="28" height="28" alt="User 11" />
                                                </a>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 fill-current text-slate-400 shrink-0 mr-2" viewBox="0 0 16 16">
                                                    <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z" />
                                                </svg>
                                                <div>Subscription</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">17,944</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-lg text-center">🇬🇧</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">22.6%</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium text-emerald-500">$4,227.09</div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="shrink-0 rounded-full mr-2 sm:mr-3 bg-indigo-500">
                                                    <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36">
                                                        <path d="M24.446 19.335a2.5 2.5 0 00-3.522 3.194c-.845.63-1.87.97-2.924.971a4.979 4.979 0 01-1.113-.135 4.436 4.436 0 01-1.343 1.682 6.91 6.91 0 006.9-1.165 2.5 2.5 0 002-4.547h.002zM20.431 11.938a2.5 2.5 0 10-.4 2.014 5.027 5.027 0 012.723 3.078c.148-.018.297-.028.446-.03a4.5 4.5 0 011.7.334 7.023 7.023 0 00-4.469-5.396zM14.969 20.25a2.49 2.49 0 00-1.932-1.234A4.624 4.624 0 0113 18.5a4.97 4.97 0 011.348-3.391 4.456 4.456 0 01-.788-2.016A6.989 6.989 0 0011 18.5c.003.391.04.781.11 1.166a2.5 2.5 0 103.859.584z" />
                                                    </svg>
                                                </div>
                                                <div class="font-medium text-slate-800">2021 Web Bootcamp</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex shrink-0 -space-x-3 -ml-px">
                                                <a class="block" href="#0">
                                                    <img class="rounded-full border-2 border-white box-content" src="assets/images/user-28-05.jpg" width="28" height="28" alt="User 05" />
                                                </a>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 fill-current text-slate-400 shrink-0 mr-2" viewBox="0 0 16 16">
                                                    <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z" />
                                                </svg>
                                                <div>Subscription</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">16,097</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-lg text-center">🇫🇷</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">22.4%</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium text-emerald-500">$2,499.77</div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="shrink-0 rounded-full mr-2 sm:mr-3 bg-sky-500">
                                                    <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36">
                                                        <path d="M18 26a8 8 0 118-8 8.009 8.009 0 01-8 8zm0-14a6 6 0 100 12 6 6 0 000-12z" />
                                                    </svg>
                                                </div>
                                                <div class="font-medium text-slate-800">Digital Marketing Course</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex shrink-0 -space-x-3 -ml-px">
                                                <a class="block" href="#0">
                                                    <img class="rounded-full border-2 border-white box-content" src="assets/images/user-28-06.jpg" width="28" height="28" alt="User 06" />
                                                </a>
                                                <a class="block" href="#0">
                                                    <img class="rounded-full border-2 border-white box-content" src="assets/images/user-28-11.jpg" width="28" height="28" alt="User 11" />
                                                </a>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 fill-current text-slate-400 shrink-0 mr-2" viewBox="0 0 16 16">
                                                    <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z" />
                                                </svg>
                                                <div>Subscription</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">12,996</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-lg text-center">🇮🇹</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">22.1%</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium text-emerald-500">$2,224.09</div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="shrink-0 rounded-full mr-2 sm:mr-3 bg-rose-500">
                                                    <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36">
                                                        <circle cx="18" cy="18" r="3" />
                                                        <path d="M13.05 24.363l-.707-.707a8 8 0 010-11.312l.707-.707 1.414 1.414-.707.707a6 6 0 000 8.484l.707.707-1.414 1.414zM22.95 24.363l-1.414-1.414.707-.707a6 6 0 000-8.484l-.707-.707 1.414-1.414.707.707a8 8 0 010 11.312l-.707.707z" />
                                                    </svg>
                                                </div>
                                                <div class="font-medium text-slate-800">Form Builder PRO</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex shrink-0 -space-x-3 -ml-px">
                                                <a class="block" href="#0">
                                                    <img class="rounded-full border-2 border-white box-content" src="assets/images/user-28-09.jpg" width="28" height="28" alt="User 09" />
                                                </a>
                                                <a class="block" href="#0">
                                                    <img class="rounded-full border-2 border-white box-content" src="assets/images/user-28-01.jpg" width="28" height="28" alt="User 01" />
                                                </a>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 fill-current text-slate-400 shrink-0 mr-2" viewBox="0 0 16 16">
                                                    <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z" />
                                                </svg>
                                                <div>Subscription</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">7,097</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-lg text-center">🇩🇪</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">17.4%</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium text-emerald-500">$1,949.72</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </main>

    </div>

</div>

<script src="assets/js/vendors/alpinejs.min.js" defer></script>
<script src="assets/js/vendors/chart.js"></script>
<script src="assets/js/vendors/moment.js"></script>
<script src="assets/js/vendors/chartjs-adapter-moment.js"></script>
<script src="assets/js/analytics-charts.js"></script>
<script src="assets/js/vendors/flatpickr.js"></script>
<script src="assets/js/flatpickr-init.js"></script>

</body>

</html>