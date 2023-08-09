<html>
    <head>
        <title>Login</title>
        <x-tailwind/>
    </head>
    <body>
        <div class="flex">
            <div class="flex-none w-14 m-2 p-4"><br></div>
            <div class="grow text-center">

                @if ( $error != null )
                    <div class="w-fit m-auto border-4 border-t-0 border-red-600 rounded-b-2xl bg-red-500 font-black p-2">
                        {{ $error }}
                    </div>
                @endif

                <form action="{{route('act14.main')}}">
                    <div class="m-2 p-4">
                        <div class="text-xl font-bold">Login</div>
                        <input type="text" placeholder="Email" name="email" class="border-4 px-4 py-2 mt-3"> <br>
                        <input type="password" placeholder="Password" name="password" class="border-4 px-4 py-2 mt-3"> <br>
                        <button class="border-4 px-4 py-2 mt-3">Submit</button>
                    </div>
                </form>

                <button class="transition duration-100 hover:scale-110 hover:text-blue-500">
                    <a href="{{route('act14.register')}}">No account?</a>
                </button>
            </div>
            <div class="flex-none w-14 m-2 p-4"><br></div>
        </div>

    </body>
</html>