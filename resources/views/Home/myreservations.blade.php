<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/htmx.org@1.9.10"
        integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous">
    </script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet"
        href="https://horizon-tailwind-react-corporate-7s21b54hb-horizon-ui.vercel.app/static/css/main.d7f96858.css" />
    <title>EVNTO</title>
    <link rel="icon" type="image/x-icon"
        href="https://cdn0.iconfinder.com/data/icons/leto-time/64/__calendar_appointment_event_date-256.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Schoolbell&v1" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Allura&display=swap');

        [modal-backdrop] {
            display: none;
        }
    </style>

</head>

<body>
    <nav class="bg-stone-50 dark:bg-gray-900" style="font-family: 'Oswald', sans-serif;">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img width="48" height="48" src="https://img.icons8.com/pulsar-color/48/000000/concert-day.png"
                    alt="concert-day" />
                <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white"
                    style="font-size:2.4em;">EVNTO</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium  text-3xl flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:dark:border-gray-700">
                    <li class="mt-1">
                        <a href="#"
                            class="block py-2 px-3 text-black bg-blue-700 rounded md:bg-transparent md:text-sky-200 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">MY RESERVATIONS</a>
                    </li>
                    <li class="mt-1">
                        <a href="#"
                            class="block   py-2 px-3 text-gray-700 rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li class="mt-1">
                        <a href="#"
                            class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li class="mt-1">
                        <a href="#"
                            class="block  py-2 px-3 text-gray-700 rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    @guest
                        <li>



                            <a href="{{ route('signinview') }}"
                                class="block text-gray-100 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                <div
                                    class="relative inline-flex items-center justify-start px-3 py-2 overflow-hidden font-semibold text-base text-teal-500 transition-all duration-150 ease-in-out rounded hover:px-3 hover:py-2 bg-gray-50 group">
                                    <span
                                        class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-teal-500 group-hover:h-full"></span>
                                    <span class="absolute right-0 pr-3 duration-200 ease-out group-hover:translate-x-5">
                                        <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </span>
                                    <span
                                        class="absolute left-0 pl-1 -translate-x-5 group-hover:translate-x-0 ease-out duration-200">
                                        <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </span>
                                    <span
                                        class="relative text-left transition-colors duration-200 ease-in-out group-hover:text-white">SIGN
                                        IN</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('signupview') }}"
                                class="inline-block rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                <div
                                    class="relative inline-flex items-center justify-start px-3 py-2 overflow-hidden font-semibold text-base text-indigo-600 transition-all duration-150 ease-in-out rounded hover:px-3 hover:py-2 bg-gray-50 group">
                                    <span
                                        class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                                    <span class="absolute right-0 pr-3 duration-200 ease-out group-hover:translate-x-5">
                                        <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </span>
                                    <span
                                        class="absolute left-0 pl-1 -translate-x-5 group-hover:translate-x-0 ease-out duration-200">
                                        <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </span>
                                    <span
                                        class="relative text-left transition-colors duration-200 ease-in-out group-hover:text-white">SIGN
                                        UP</span>
                                </div>
                            </a>

                        </li>
                    @endguest
                    @auth
                        <li>

                            <div class="mx-16">
                                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                                    class="flex items-center text-sm pe-4 font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:m-8 sm:m-4 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white absolute top-0 right-0"
                                    type="button">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="w-8 h-8 me-2 rounded-full"
                                        src="https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg"
                                        alt="user photo">
                                    <p class="text-stone-900 capitalize"
                                        style="font-size:1.2em; font-family: 'Oswald', sans-serif;">
                                        {{ Auth::user()->username }} </p>
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>

                                <!-- Dropdown menu -->
                                <div id="dropdownAvatarName"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                        <div class="font-medium ">{{ Auth::user()->firstname }}
                                            {{ Auth::user()->lastname }}</div>
                                        <div class="truncate">{{ Auth::user()->email }}</div>
                                    </div>
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                                        <li>
                                            <a href="{{ route('myreservations') }}"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">MY
                                                RESERVATIONS</a>
                                        </li>
                                    </ul>
                                    <div class="py-2">
                                        <a href="{{ route('logout') }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                            out</a>
                                    </div>
                                </div>
                            </div>


                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>


    <div class="mt-24 flex flex-col justify-center items-center h-full">
        <div
            class="relative flex max-w-[1000px] h-[430px] w-full flex-col rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
            <div
                class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                <h4 class="text-lg font-bold text-navy-700 dark:text-white">
                    MY RESERVATIONS
                </h4>
                <button
                    class="linear rounded-[20px] bg-lightPrimary px-4 py-2 text-base font-medium text-brand-500 transition duration-200 hover:bg-gray-100 active:bg-gray-200 dark:bg-white/5 dark:text-white dark:hover:bg-white/10 dark:active:bg-white/20">
                    See all
                </button>
            </div>
            <div class="w-full  px-4 md:overflow-x-hidden">
                <table role="table" class="w-full min-w-[500px] overflow-x-scroll">
                    <thead>
                        <tr role="row">
                            <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                <div
                                    class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">
                                    EVENT TITLE
                                </div>
                            </th>
                            <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                <div
                                    class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">
                                    EVENT DATE
                                </div>
                            </th>
                            <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                <div
                                    class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">
                                    RESERVATION ID
                                </div>
                            </th>
                            <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                <div
                                    class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">
                                    STATUS
                                </div>
                            </th>
                            <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                <div
                                    class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">
                                    ACTION
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody role="rowgroup" class="px-4">
                        @foreach ($myreservations as $res)
                            <tr role="row">
                                <td class="py-3 text-sm" role="cell">
                                    <div class="flex items-center gap-2">
                                        <div class="h-[30px] w-[30px] rounded-full">
                                            <img src="{{$res->ticket->event->getFirstMediaUrl('eventimages')}}"
                                                class="h-full w-full rounded-full" alt="" />
                                        </div>
                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                            {{ $res->ticket->event->title }}
                                        </p>
                                    </div>
                                </td>
                                <td class="py-3 text-sm" role="cell">
                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                        {{ $res->ticket->event->date }}
                                    </p>
                                </td>
                                <td class="py-3 text-sm" role="cell">
                                    <div class="mx-2 flex font-bold">
                                        {{ $res->id }}
                                    </div>
                                </td>

                                <td class="py-3 text-sm" role="cell">
                                    @if ($res->status === 1)
                                        <span
                                            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">ACCEPTED</span>
                                    @else
                                        <span
                                            class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">PENDING</span>
                                    @endif
                                </td>

                                <td class="py-3 text-sm" role="cell">
                                    @if ($res->status === 1)
                                        GET YOUR TICKET
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>

</html>
