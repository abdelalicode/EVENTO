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
    <title>Youconnect</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</head>

<body>

    <div class="font-[sans-serif] text-[#333] w-3/4 mx-auto p-12 h-3/4">
        <div class="mt-12 grid md:grid-cols-2 items-center gap-8 h-full">
            <form class="max-w-lg max-md:mx-auto w-full p-6" action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="mb-10">
                    <h3 class="text-4xl font-extrabold">RESET PASSWORD</h3>
                    <p class="text-sm mt-6">Forgot your password? no problem just send us your email</p>
                </div>
                <div>
                    <label class="text-[15px] mb-3 block">Email</label>
                    <div class="relative flex items-center">
                        <input name="email" type="text" required
                            class="w-full text-sm bg-gray-100 px-4 py-4 rounded-md outline-blue-600"
                            placeholder="Enter email" />
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                            class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 682.667 682.667">
                            <defs>
                                <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                    <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                                <path fill="none" stroke-miterlimit="10" stroke-width="40"
                                    d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z"
                                    data-original="#000000"></path>
                                <path
                                    d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z"
                                    data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="mt-10">
                    <button type="submit"
                        class="w-full shadow-xl py-3 px-4 text-sm font-semibold rounded text-white bg-sky-700 hover:bg-sky-900 focus:outline-none">
                        Sent Link
                    </button>
                </div>
                <p class="text-sm mt-10 text-center">Come back to<a href="{{ route('signinview') }}"
                    class="text-sky-900 font-semibold hover:underline ml-1">Sign In here</a></p>
    
            </form>
            <div
                class="h-full md:py-6 flex items-center relative max-md:before:hidden before:absolute before:bg-gradient-to-r before:from-cyan-500 before:to-sky-800 before:h-full before:w-3/4 before:right-0 before:z-0">
                <img src="https://readymadeui.com/photo.webp" class="rounded-md lg:w-4/5 md:w-11/12 z-50 relative"
                    alt="Dining Experience" />
            </div>
        </div>
    </div>

</body>
