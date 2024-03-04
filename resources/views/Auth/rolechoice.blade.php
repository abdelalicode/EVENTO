@extends('app')

@section('content')
    <div class="w-screen min-h-screen bg-gradient-to-r from-red-500 to-rose-900 p-12">
        <div class="flex space-x-96 mx-auto">
            <h1 class="text-6xl text-white" style="font-family: 'Oswald', sans-serif;">EVENTO</h1>
            <h1 class="mt-5 text-2xl text-white" style="font-family: 'Allura' , sans serif;">Creating moments to remember</h1>
        </div>

        <div class="m-24">
            <h1 class="text-6xl text-white" style="font-family: 'Oswald', sans-serif;">Welcome {{ $validateduser['firstname'] }}!</h1>
            <h1 class="text-2xl text-white" style="font-family: 'Oswald', sans-serif;">Are You ?</h1>
            <div class="m-12 ml-36 flex gap-24">


                <form action="{{ route('organisator') }}" method="post">
                    @csrf
                    <button type="submit" class="relative px-6 py-3 font-bold rounded-lg group">
                        <span
                            class="absolute inset-0 w-full h-full transition duration-300 transform -translate-x-1 -translate-y-1 bg-cyan-400 ease opacity-80 group-hover:translate-x-0 group-hover:translate-y-0"></span>
                        <span
                            class="absolute inset-0 w-full h-full transition duration-300 transform translate-x-1 translate-y-1 bg-pink-800 ease opacity-80 group-hover:translate-x-0 group-hover:translate-y-0 mix-blend-screen"></span>
                        <span class="relative text-2xl">ORGANISATOR</span>
                    </button>

                </form>

                <p class="text-white">OR SIMPLY LOOKING FOR</p>


                <form action="{{ route('participant') }}" method="post">
                    @csrf
                    <button type="submit" class="relative px-6 py-3 font-bold text-black group">
                        <span
                            class="absolute inset-0 w-full h-full transition duration-300 ease-out transform -translate-x-2 -translate-y-2 bg-red-300 group-hover:translate-x-0 group-hover:translate-y-0"></span>
                        <span class="absolute inset-0 w-full h-full border-4 border-black"></span>
                        <span class="relative text-2xl">EVENTS TO PARTICPATE IN</span>
                    </button>
                </form>



            </div>
        </div>




    </div>
@endsection
