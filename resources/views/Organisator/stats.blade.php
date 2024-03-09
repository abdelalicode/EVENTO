<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>
    <link rel="icon" type="image/x-icon"
        href="https://cdn0.iconfinder.com/data/icons/leto-time/64/__calendar_appointment_event_date-256.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Allura&display=swap');
    </style>
</head>

<body
    class="bg-[url('https://img.freepik.com/premium-vector/hand-drawn-ramadan-kareem-lantern_17005-72.jpg?w=1060')] bg-opacity-50 bg-sky-900 bg-blend-multiply">

    @include('Organisator.partials.sidebar')


    <div class="m-16 lg:pl-36">
        <h1 class="ml-12  p-5 font-bold text-white drop-shadow-lg" style="font-size:1.5em; font-family: 'Oswald', sans-serif;">YOUR
            RESERVATIONS STATS</h1>

        <div class="flex flex-wrap gap-1 justify-center p-12">

            @foreach ($reservationsByEvent as $event)
                <div class="flex flex-wrap gap-1 justify-center p-6">

                    <div
                        class="flex flex-col gap-2 h-40 text-white rounded-xl shadow-md p-6 w-[440px] bg-gray-200 bg-opacity-30 backdrop-filter backdrop-blur-lg">
                        <div class="font-normal">Event Title: <span
                                class="font-medium text-2xl">{{ $event->title }}</span><br /></div>
                        <div class="font-semibold tracking-tight">Total Reservations: <span
                                class="text-6xl">{{ $event->total_reservations }}</span></div>
                    </div>

                </div>
            @endforeach

            @foreach ($results as $result)
                <div class="flex flex-wrap gap-1 justify-center p-6">

                    <div
                        class="flex flex-col gap-2 h-40 text-white rounded-xl shadow-md p-6 w-[440px] bg-cyan-800 bg-opacity-30 backdrop-filter backdrop-blur-lg">
                        <div class="font-normal">Category: <span
                                class="font-medium text-2xl">{{ $result->category_name }}</span><br /></div>
                        <div class="font-semibold tracking-tight">Total Reservations: <span
                                class="text-6xl">{{ $result->total_reservations }}</span></div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
