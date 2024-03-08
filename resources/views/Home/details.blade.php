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
    <title>EVNTO</title>
    <link rel="icon" type="image/x-icon"
        href="https://cdn0.iconfinder.com/data/icons/leto-time/64/__calendar_appointment_event_date-256.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Schoolbell&v1" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Allura&display=swap');
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
                            aria-current="page">DETAILS</a>
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
                </ul>
            </div>
        </div>
    </nav>

    <div class="m-12">

        <section class="bg-white dark:bg-gray-900">
            <div class="max-w-6xl px-6 py-10 mx-auto">
                <p class="text-xl font-medium text-blue-500 ">{{ $event->category->name }}</p>

                <h1 class="mt-2 text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                    {{ $event->title }}
                </h1>

                <main class="relative z-20 w-full mt-8 md:flex md:items-center xl:mt-12">
                    <div class="absolute w-full bg-blue-400 -z-10 md:h-96 rounded-2xl"></div>

                    <div
                        class="w-full p-6 bg-blue-400 md:flex md:items-center rounded-2xl md:bg-transparent md:p-0 lg:px-12 md:justify-evenly">
                        <img class="h-24 w-24 md:mx-6 rounded-full object-cover shadow-md md:h-[32rem] md:w-80 lg:h-[36rem] lg:w-[26rem] md:rounded-2xl"
                            src="{{ $event->getFirstMediaUrl('eventimages') }}" alt="client photo" />

                        <div class="mt-2 md:mx-6">
                            <div>
                                <p class="text-xl font-medium tracking-tight text-white">
                                    {{ \Carbon\Carbon::parse($event->date)->format('j F Y') }}</p>
                                <p class="text-blue-200 ">Venue: {{ $event->place->venue }}</p>
                            </div>


                            
                            <div class="relative px-5 py-2 font-medium text-white group">
                                <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-blue-500 group-hover:bg-purple-700 group-hover:skew-x-12"></span>
                                <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-blue-700 group-hover:bg-blue-500 group-hover:-skew-x-12"></span>
                                <span class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-blue-600 -rotate-12"></span>
                                <span class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-blue-400 -rotate-12"></span>
                                @if ($event->numplaces_available === 0)
                                <span class="relative">SOLD OUT!</span>
                                @else
                                <span class="relative">Places Available: {{ $event->numplaces_available }} Ticket</span> 
                                @endif
                                
                            </div>

                            <p class="mt-4 text-lg leading-relaxed text-white md:text-xl"> {{ $event->description }}
                            </p>

                            <div class="flex items-center justify-between mt-6 md:justify-start">
                                <button title="left arrow"
                                    class="p-2 text-white transition-colors duration-300 border rounded-full rtl:-scale-x-100 hover:bg-blue-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>

                                <button title="right arrow"
                                    class="p-2 text-white transition-colors duration-300 border rounded-full rtl:-scale-x-100 md:mx-6 hover:bg-blue-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </section>

    </div>

</body>

</html>
