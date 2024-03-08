@extends('app')


@section('content')
    <div class="ml-24">
        @include('Home.hero')
        <div class="flex flex-wrap gap-3">
            <div
                class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                    FILTER THE EVENTS
                </h5>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">SEARCH FOR YOUR FAVORITE EVENTS OR FILTER
                    THE CATEGORIES</p>
                <ul class="my-4 space-y-3">
                    <li>
                        <div
                            class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                viewBox="0 0 128 128">
                                <path fill="#fff"
                                    d="M108.9,108.9L108.9,108.9c-2.3,2.3-6.1,2.3-8.5,0L87.7,96.2c-2.3-2.3-2.3-6.1,0-8.5l0,0c2.3-2.3,6.1-2.3,8.5,0l12.7,12.7C111.2,102.8,111.2,106.6,108.9,108.9z">
                                </path>
                                <path fill="#fff"
                                    d="M52.3 17.299999999999997A35 35 0 1 0 52.3 87.3A35 35 0 1 0 52.3 17.299999999999997Z"
                                    transform="rotate(-45.001 52.337 52.338)"></path>
                                <path fill="#fff"
                                    d="M52.3 17.299999999999997A35 35 0 1 0 52.3 87.3A35 35 0 1 0 52.3 17.299999999999997Z"
                                    transform="rotate(-45.001 52.337 52.338)"></path>
                                <path fill="#71c2ff"
                                    d="M52.3 84.3c-1.7 0-3-1.3-3-3s1.3-3 3-3c6.9 0 13.5-2.7 18.4-7.6 6.4-6.4 9-15.5 6.9-24.4-.4-1.6.6-3.2 2.2-3.6 1.6-.4 3.2.6 3.6 2.2C86 55.8 82.9 67.1 75 75 68.9 81 60.9 84.3 52.3 84.3zM73 35c-.8 0-1.5-.3-2.1-.9L70.7 34c-1.2-1.2-1.2-3.1 0-4.2 1.2-1.2 3.1-1.2 4.2 0l.2.2c1.2 1.2 1.2 3.1 0 4.2C74.5 34.7 73.8 35 73 35z">
                                </path>
                                <path fill="#444b54"
                                    d="M52.3 90.3c-9.7 0-19.5-3.7-26.9-11.1-14.8-14.8-14.8-38.9 0-53.7 14.8-14.8 38.9-14.8 53.7 0h0C94 40.3 94 64.4 79.2 79.2 71.8 86.6 62.1 90.3 52.3 90.3zM52.3 20.4c-8.2 0-16.4 3.1-22.6 9.4-12.5 12.5-12.5 32.8 0 45.3C42.2 87.4 62.5 87.4 75 75c12.5-12.5 12.5-32.8 0-45.3C68.7 23.5 60.5 20.4 52.3 20.4zM111 98.3L98.3 85.6c-1.7-1.7-4-2.6-6.4-2.6-1.4 0-2.7.3-3.9.9l-2.5-2.5c-1.2-1.2-3.1-1.2-4.2 0-1.2 1.2-1.2 3.1 0 4.2l2.5 2.5c-.6 1.2-.9 2.5-.9 3.9 0 2.4.9 4.7 2.6 6.4L98.3 111c1.8 1.8 4.1 2.6 6.4 2.6s4.6-.9 6.4-2.6l0 0C114.5 107.5 114.5 101.8 111 98.3zM106.8 106.8c-1.2 1.2-3.1 1.2-4.2 0L89.8 94.1c-.6-.6-.9-1.3-.9-2.1s.3-1.6.9-2.1c.6-.6 1.3-.9 2.1-.9s1.6.3 2.1.9l12.7 12.7C108 103.7 108 105.6 106.8 106.8z">
                                </path>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">


                                <input type="text" id="search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Search event title..." required />

                            </span>
                            <span
                                class="inline-flex items-center justify-center px-2 py-0.5 ms-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">Search</span>
                        </div>
                    </li>

                    <li>
                        <div
                            class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <svg aria-hidden="true" class="h-4" viewBox="0 0 96 96" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M72.0998 0.600098H48.3998H24.5998H0.799805V24.4001V48.2001V49.7001V71.8001V71.9001V95.5001H24.5998V72.0001V71.9001V49.8001V48.3001V24.5001H48.3998H72.1998H95.9998V0.700104H72.0998V0.600098Z"
                                    fill="#617BFF" />
                                <path
                                    d="M48.5 71.8002H72.1V95.6002H73C79.1 95.6002 84.9 93.2002 89.2 88.9002C93.5 84.6002 95.9 78.8002 95.9 72.7002V48.2002H48.5V71.8002Z"
                                    fill="#617BFF" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap"> <select id="categories"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Choose a category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select></span>
                        </div>
                    </li>
                </ul>
                <div>
                    <a href="#"
                        class="inline-flex items-center text-xs font-normal text-gray-500 hover:underline dark:text-gray-400">
                        <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Why do I need to search ?</a>
                </div>
            </div>
            <div class="mt-5">


                <div class="m-8 p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-100 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
                </div>

                <h1 class="m-12 p-5 text-6xl underline">LIST OF EVENTS</h1>

            </div>
            <p>Users can explore a wide range of events available on the platform. The system provides pagination and
                filtering options to facilitate easy navigation and searching by category or title.
                Users can view detailed information about each event, including its description, date, location, and
                available seats. This helps users make informed decisions before booking.</p>


        </div>

        <div class="flex justify-center mt-5 mb-24">
            <div id="eventscard" class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3 gap-16">
                @foreach ($events as $event)
                    <div class="...">
                        <div
                            class="w-full flex-1 mt-8 p-8 order-3 bg-white shadow-xl rounded-2xl sm:w-96 lg:w-full lg:order-3 lg:rounded-l-none">
                            <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
                                <img src="{{ $event->getFirstMediaUrl('eventimages') }}" alt=""
                                    class="rounded-3xl w-20 h-20" />
                                <div class="ml-5">
                                    @php
                                        $event->date = \Carbon\Carbon::parse($event->date);
                                    @endphp




                                    <span class="ml-3 block text-2xl font-semibold">{{ $event->date->format('y') }}</span>
                                    <span><span class="font-medium text-gray-500 text-xl align-top">*&thinsp;</span><span
                                            class="text-5xl font-bold">{{ $event->date->day }}</span></span><span
                                        class="text-gray-500 font-medium">{{ $event->date->format('F') }}</span>
                                </div>
                            </div>
                            <ul class="mb-7 font-medium text-gray-500">
                                <li class="flex text-lg mb-2">

                                    <span class="ml-3">Title <span class="text-black">{{ $event->title }}</span></span>
                                </li>
                                <li class="flex text-lg mb-2">
                                    <img width="24" height="18"
                                        src="https://img.icons8.com/ios-filled/50/map-pin.png" alt="map-pin" />
                                    <span class="ml-3">Venue <span
                                            class="text-black">{{ $event->place->venue }}</span></span>
                                </li>
                                <li class="flex text-lg">
                                    <span
                                        class="bg-purple-100 text-purple-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">{{ $event->category->name }}</span>

                                </li>
                            </ul>
                            <a href="event/{{ $event->id }}"
                                class="flex justify-center items-center bg-indigo-500 rounded-xl py-5 px-4 text-center text-white text-xl">
                                CHECK EVENT!
                                <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        {{ $events->links() }}



    </div>
@endsection


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectcat = document.getElementById('categories')


        search.addEventListener('keyup', async function() {
            await fetch(`/search?query=${this.value}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    eventscard.innerHTML = '';
                    data.events.forEach(event => {
                        const html = `
                                            <div class="...">
                                                <div class="w-full flex-1 mt-8 p-8 order-3 bg-white shadow-xl rounded-2xl sm:w-96 lg:w-full lg:order-3 lg:rounded-l-none">
                                                    <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
                                                        <img src="${event.imageUrl}" alt="" class="rounded-3xl w-20 h-20" />
                                                        <div class="ml-5">
                                                            
                                                            <span class="ml-3 block text-2xl font-semibold"></span>
                                                            <span><span class="font-medium text-gray-500 text-xl align-top">${event.date}</span><span
                                                                    class="text-5xl font-bold"></span></span><span
                                                                class="text-gray-500 font-medium"></span>
                                                        </div>
                                                    </div>
                                                    <ul class="mb-7 font-medium text-gray-500">
                                                        <li class="flex text-lg mb-2">
                                                            <span class="ml-3">Title <span class="text-black">${event.title}</span></span>
                                                        </li>
                                                        <li class="flex text-lg mb-2">
                                                            <img width="24" height="18" src="https://img.icons8.com/ios-filled/50/map-pin.png" alt="map-pin"/>
                                                            <span class="ml-3">Venue <span class="text-black">${event.place}</span></span>
                                                        </li>
                                                        <li class="flex text-lg">
                                                            <span class="bg-purple-100 text-purple-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">${event.category}</span>
                                                        </li>
                                                    </ul>
                                                    <a href="event/${event.id}"
                                                        class="flex justify-center items-center bg-indigo-500 rounded-xl py-5 px-4 text-center text-white text-xl">
                                                        CHECK EVENT!
                                                        <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                                                    </a>
                                                </div>
                                            </div>
                                                      `;
                            eventscard.innerHTML += html;
                    });

                })
        })

        selectcat.addEventListener('change', fetchData);

        function fetchData() {

            // console.log(selectcat.value)
            const selectedOption = selectcat.value;
            //    // console.log(searchFrom.value,searchTo.value)

            fetch(`/select?category=${selectedOption}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                    eventscard.innerHTML = '';
                    data.eventsbycat.forEach(event => {
                        const html = `
                                            <div class="...">
                                                <div class="w-full flex-1 mt-8 p-8 order-3 bg-white shadow-xl rounded-2xl sm:w-96 lg:w-full lg:order-3 lg:rounded-l-none">
                                                    <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
                                                        <img src="${event.imageUrl}" alt="" class="rounded-3xl w-20 h-20" />
                                                        <div class="ml-5">
                                                            
                                                            <span class="ml-3 block text-2xl font-semibold"></span>
                                                            <span><span class="font-medium text-gray-500 text-xl align-top">${event.date}</span><span
                                                                    class="text-5xl font-bold"></span></span><span
                                                                class="text-gray-500 font-medium"></span>
                                                        </div>
                                                    </div>
                                                    <ul class="mb-7 font-medium text-gray-500">
                                                        <li class="flex text-lg mb-2">
                                                            <span class="ml-3">Title <span class="text-black">${event.title}</span></span>
                                                        </li>
                                                        <li class="flex text-lg mb-2">
                                                            <img width="24" height="18" src="https://img.icons8.com/ios-filled/50/map-pin.png" alt="map-pin"/>
                                                            <span class="ml-3">Venue <span class="text-black">${event.place}</span></span>
                                                        </li>
                                                        <li class="flex text-lg">
                                                            <span class="bg-purple-100 text-purple-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">${event.category}</span>
                                                        </li>
                                                    </ul>
                                                    <a href="event/${event.id}"
                                                        class="flex justify-center items-center bg-indigo-500 rounded-xl py-5 px-4 text-center text-white text-xl">
                                                        CHECK EVENT!
                                                        <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                                                    </a>
                                                </div>
                                            </div>
                                                      `;
                            eventscard.innerHTML += html;
                    });
                });
        }
    })
</script>
